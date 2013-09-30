<?php
date_default_timezone_set('UTC');

include("../_config.php");
require '../tmhOAuth.php';
require '../tmhUtilities.php';

$tmhOAuth = new tmhOAuth(array(
	'consumer_key'    => TWITTER_CONSUMER_KEY,
	'consumer_secret' => TWITTER_CONSUMER_SECRET,
	'token'    		  => OAUTH_TOKEN,
	'user_token'      => OAUTH_TOKEN,
	'secret'    	  => OAUTH_SECRET,
	'user_secret'     => OAUTH_SECRET,
	'bearer'          => BEARER
));

$db_connect = mysql_connect($db_host, $db_user, $db_pass) or die("Could not connect to MySQL server ($db_host)");
$db_select = mysql_select_db($db_name) or die("Could not select MySQL database ($db_name)");

$args['q'] = urlencode('(#ttcu OR ttc) -from:ttcnotices -from:ttcing');
$args['result_type'] = 'recent';
$args['count'] = '100';
$args['lang'] = 'en';
$sincequery = mysql_fetch_row(mysql_query('SELECT id FROM tweets ORDER BY created_at DESC LIMIT 1'));
if ($sincequery[0]) $args['since_id'] = $sincequery[0];

$results = array();
$tweetCollection = array();
$newAuthorIds = array();
$updateAuthorIds = array();
$newTweetFlag = false;
$newAuthorFlag = false;
$updateAuthorFlag = false;

$code = $tmhOAuth->apponly_request(array(
	'url' => $tmhOAuth->url('1.1/search/tweets'),
	'params' => $args
));
if ($tmhOAuth->response['code'] == 200) {
	$results = json_decode($tmhOAuth->response['response'], true);
} else {
	if (count($results) == 0)
		die();
}

if (count($results) > 0) {
	// Reverse order so oldest first
	usort($results, 'custom_sort');
	
	// Query for the past 15 minutes
	$past = time() - 60 * 15;
	$tweetCollectionResults = mysql_query("SELECT text FROM tweets WHERE created_at >= $past ORDER BY created_at DESC");
	while($tweet = mysql_fetch_array($tweetCollectionResults, MYSQL_NUM)) {
		$tweetCollectionCache[] = $tweet[0];
	}
	
	$addTweetQuery = 'INSERT INTO tweets (id, text, created_at, ttcu, userid) VALUES ';
	$addAuthorQuery = 'INSERT INTO users (created_at, screen_name, name, tweets, id) VALUES ';
	$updateAuthorQuery1 = 'UPDATE users SET created_at = CASE id';
	$updateAuthorQuery2 = ' END, screen_name = CASE id';
	$updateAuthorQuery3 = ' END, name = CASE id';
	$updateAuthorQuery4 = ' END, id = CASE id';
	unset($results[0]);
	
	foreach ($results as $dataraw) {
		foreach ($dataraw as $data) {
			if (
				// Block tweets from specific users.
				(!preg_match('/ttc_[a-z0-9_]+|ttcnotices|ttcing|commutr|TTCSexytime|ctvtoronto|BusFreak93|martincwiner|sawUonTTC|torontoreviewer|mctraffic|moviemayor|limousineluxe|phpjunktweets|97fmradiocity|rudeboykella1|1_aim_1destiny|conveyancingby|eliasviktor001|cmoletoronto|KMANonSaturday|DrMaryamAdibfar|SoldByFlorio|FayeElleYN/i', $data['user']['screen_name']))
				
				// Make sure Tweet is in English.
				&& (is_english($data['text']))
				
				// Don't post replies.
				&& ($data['in_reply_to_user_id'] == '')

				// Filter out Tweets that are: Retweets | Money
				&& (($data['user']['screen_name'] != 'andryou' && !preg_match('/(^|\s)((R|M)T:? (“|["\'])?|(“|["\']))@|\(via |\bvia @|\$[0-9]+|[0-9]+\$/i', $data['text'])))

				// Filter out Tweets that are likely spam
				&& (!preg_match('/has now cleared and full service|has cleared \& full service|has cleared and full service|full service has resumed on|has returned to regular routing|ALL CLEAR: The delay both ways on/i', $data['text']))
				
				// Filter out Tweets that are from specific sources
				&& (!preg_match('/(twitterfeed|wpsyndicator|mailchimp|google|fwix|vimeo|cordlessdrillsscrewdriver|foursquare|sawuon)\.com|Tweet Button/i', $data['source']))
			) {
				// Check to see if similar tweet made in cached batch.
				if (!dupeCheck($data['text'], $tweetCollectionCache)) {
					$score = scorer($data['text']);
					// Check for the #ttcu hashtag and ttc/#ttc
					$hasTTCU = preg_match('/#ttcu\b/i', $data['text']);
					$hasTTC = preg_match('/\bttc\b/i', $data['text']);
					if ((strtolower($data['user']['screen_name']) == 'andryou' && ($hasTTCU || $hasTTC)) || (($hasTTCU || $hasTTC) && strtolower($data['user']['screen_name']) != 'andryou' && $score[0] > 39)) {
						if (!dupeCheck($data['text'], $tweetCollection)) {
							$date = strtotime($data['created_at']);
							$tweetCollection[] = preg_replace('/[^a-z0-9]/', ' ', strtolower($data['text']));
							
							// Tweet!
							$code = $tmhOAuth->user_request(array(
								'method' => 'POST',
								'url' => $tmhOAuth->url("1.1/statuses/update"),
								'params' => array(
									'status' => prepareTweet(censorWords($data[text]), $data['user']['screen_name'])
								)
							));
							$newTweetFlag = true;
							
							// Insert into database.
							$addTweetQuery .= "('".
								mysql_real_escape_string($data[id]) ."', '". 
								mysql_real_escape_string($data[text]) ."', '".
								mysql_real_escape_string($date) ."', '". 
								mysql_real_escape_string($hasTTCU) ."', '".
								mysql_real_escape_string($data[user][id]) ."'),";

							// Is this author already in the database?
							$checkDupe = mysql_fetch_row(mysql_query("SELECT COUNT(id) FROM users WHERE id = '$data[user][id]' LIMIT 1"));
							$checkDupe = $checkDupe[0];
							if ($checkDupe == 0 && !in_array($data[user][id], $newAuthorIds)) {
								// Set the marker to true to run SQL queries.
								$newAuthorFlag = true;
								$newAuthorIds[] = mysql_real_escape_string($data[user][id]);

								// Insert into database.
								$addAuthorQuery .= "('".
									mysql_real_escape_string($date) ."', '". 
									mysql_real_escape_string($data[user][screen_name]) ."', '".
									mysql_real_escape_string($data[user][name]) ."', '1', '".
									mysql_real_escape_string($data[user][id]) ."'),";
							} else {
								if (!in_array($data[user][id], $updateAuthorIds)) {
									// Set the marker to true to run SQL queries.
									$updateAuthorFlag = true;
									$updateAuthorIds[] = mysql_real_escape_string($data[user][id]);
									
									// Update the author.
									$updateAuthorQuery1 .= " WHEN '". mysql_real_escape_string($data[user][id]) ."' THEN '". mysql_real_escape_string($date) ."'";
									$updateAuthorQuery2 .= " WHEN '". mysql_real_escape_string($data[user][id]) ."' THEN '". mysql_real_escape_string($data[user][screen_name]) ."'";
									$updateAuthorQuery3 .= " WHEN '". mysql_real_escape_string($data[user][id]) ."' THEN '". mysql_real_escape_string($data[user][name]) ."'";
									$updateAuthorQuery4 .= " WHEN '". mysql_real_escape_string($data[user][id]) ."' THEN '". mysql_real_escape_string($data[user][id]) ."'";
								}
							}
						}
					}
				}
			}
		}
	}

	if ($newTweetFlag) {
		mysql_query(rtrim($addTweetQuery,','));
		if ($newAuthorFlag)
			mysql_query(rtrim($addAuthorQuery,','));
		if ($updateAuthorFlag) {
			$updateAuthorQuery = $updateAuthorQuery1.$updateAuthorQuery2.$updateAuthorQuery3.$updateAuthorQuery4.' END WHERE id IN ('.implode(',', $updateAuthorIds).')';
			mysql_query($updateAuthorQuery);
			foreach ($updateAuthorIds as $usertoupdate) {
				$countAlerts = mysql_fetch_row(mysql_query("SELECT COUNT(id) FROM tweets WHERE userid = '$usertoupdate'"));
				$alertsNum = $countAlerts[0];
				$updateUser = mysql_query("UPDATE users SET tweets = $alertsNum WHERE id = '$usertoupdate'");
			}
		}
		refreshCache();
	}
}

mysql_close();
?>