<?php
$db_host = 'localhost';
$db_user = '';
$db_pass = '';
$db_name = '';

// The OAuth credentials you received when registering your app at Twitter
define("TWITTER_CONSUMER_KEY", "");
define("TWITTER_CONSUMER_SECRET", "");
// The OAuth data for the twitter account
define("OAUTH_TOKEN", "");
define("OAUTH_SECRET", "");
define("BEARER", "");

$stops = array('5 avenue', '6 bay', '7 bathurst', '8 broadview', '9 bellamy', '10 van', '11 bayview', '12 kingston', '14 glencairn', '15 evans', '16 mccowan', '17 birchmount', '20 cliffside', '21 brimley', '22 coxwell', '23 dawes', '24 victoria', '25 don', '26 dupont', '28 davisville', '29 dufferin', '30 lambton', '31 greenwood', '32 eglinton', '33 forest', '34 eglinton', '35 jane', '36 finch', '37 islington', '38 highland', '39 finch', '40 junction', '41 keele', '42 cummer', '43 kennedy', '44 kipling', '45 kipling', '46 martin', '47 lansdown', '47 lansdowne', '48 rathburn', '49 bloor', '50 burnhamthorpe', '51 leslie', '52 lawrence', '53 steeles', '54 lawrence', '55 warren', '56 leaside', '57 midland', '58 malton', '59 maple', '60 steeles', '61 avenue', '62 mortimer', '63 ossington', '64 main', '65 parliament', '66 prince', '67 pharmacy', '68 warden', '69 warden', '70 oconnor', '70 o connor', '71 runnymede', '72 pape', '73 royal', '74 mt', '75 sherbourne', '76 royal', '77 swansea', '78 st', '79 scarlett', '80 queensway', '81 thorncliffe', '82 rosedale', '83 jones', '84 sheppard', '85 sheppard', '86 scarborough', '87 cosburn', '88 south', '89 weston', '90 vaughan', '91 woodbine', '92 woodbine', '94 wellesley', '95 york', '96 wilson', '97 yonge', '98 willowdale', '99 arrow', '100 flemingdon', '101 downsview', '102 markham', '103 mt', '104 faywood', '105 dufferin', '106 york', '107 keele', '108 downsview', '109 ranee', '110 islington', '111 east', '112 west', '113 danforth', '115 silver', '116 morningside', '117 alness', '120 calvington', '122 graydon', '123 shorncliffe', '124 sunnybrook', '125 drewry', '126 christie', '127 davenport', '129 mccowan', '130 middlefield', '131 nugget', '132 milner', '133 neilson', '134 progress', '135 gerrard', '139 finch', '160 bathurst', '161 rogers', '162 lawrence', '165 weston', '167 pharmacy', '168 symington', '169 huntingwood', '171 mt', '190 scarborough', '191 highway', '192 airport', '193 exhibition', '196 york', '199 finch', '224 victoria', '300 bloor', '301 queen', '302 danforth', '303 don', '305 eglinton', '306 carlton', '307 eglinton', '308 finch', '309 finch', '310 bathurst', '311 islington', '312 st', '313 jane', '316 ossington', '319 wilson', '320 yonge', '321 york', '322 coxwell', '324 victoria', '329 dufferin', '352 lawrence', '353 steeles', '354 lawrence', '385 sheppard', '400 lawrence', '402 parkdale', '403 south', '404 east', '405 etobicoke', '407 toronto', '141 mt', '142 avenue', '143 beach', '144 don', '145 humber', '501 queen', '502 downtowner', '503 kingston', '504 king', '505 dundas', '506 carlton', '508 lake', '509 harbourfront', '510 spadina', '511 bathurst', '512 st');

$stops_num = array('5', '6', '7', '8', '9', '10', '11', '12', '14', '15', '16', '17', '20', '21', '22', '23', '24', '25', '26', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '68', '69', '70', '71', '72', '73', '74', '75', '76', '77', '78', '79', '80', '81', '82', '83', '84', '85', '86', '87', '88', '89', '90', '91', '92', '94', '95', '96', '97', '98', '99', '100', '101', '102', '103', '104', '105', '106', '107', '108', '109', '110', '111', '112', '113', '115', '116', '117', '120', '122', '123', '124', '125', '126', '127', '129', '130', '131', '132', '133', '134', '135', '139', '160', '161', '162', '165', '167', '168', '169', '171', '190', '191', '192', '193', '196', '199', '224', '300', '301', '302', '303', '305', '306', '307', '308', '309', '310', '311', '312', '313', '316', '319', '320', '321', '322', '324', '329', '352', '353', '354', '385', '400', '402', '403', '404', '405', '407', '141', '142', '143', '144', '145', '501', '502', '503', '504', '505', '506', '508', '509', '510', '511', '512');

$stops_names = array('airport', 'alness', 'arrow', 'avenue', 'bathurst', 'bay', 'bayview', 'beach', 'bellamy', 'birchmount', 'bloor', 'brimley', 'broadview', 'burnhamthorpe', 'calvington', 'carlton', 'christie', 'cliffside', 'cosburn', 'coxwell', 'cummer', 'danforth', 'davenport', 'davisville', 'dawes', 'don', 'downsview', 'downtowner', 'drewry', 'dufferin', 'dundas', 'dupont', 'eglinton', 'etobicoke', 'evans', 'exhibition', 'faywood', 'finch', 'flemingdon', 'forest', 'gerrard', 'glencairn', 'graydon', 'greenwood', 'harbourfront', 'highland', 'highway', 'humber', 'huntingwood', 'islington', 'jane', 'jones', 'junction', 'keele', 'kennedy', 'king', 'kingston', 'kipling', 'lake', 'lambton', 'lansdown', 'lansdowne', 'lawrence', 'leaside', 'leslie', 'main', 'malton', 'maple', 'markham', 'martin', 'mccowan', 'middlefield', 'midland', 'milner', 'morningside', 'mortimer', 'mt', 'neilson', 'nugget', 'oconnor', 'connor', 'ossington', 'pape', 'parkdale', 'parliament', 'pharmacy', 'prince', 'progress', 'queen', 'queens', 'queensway', 'ranee', 'rathburn', 'rogers', 'rosedale', 'royal', 'runnymede', 'scarborough', 'scarlett', 'sheppard', 'sherbourne', 'shorncliffe', 'silver', 'south', 'spadina', 'steeles', 'sunnybrook', 'swansea', 'symington', 'thorncliffe', 'van', 'vaughan', 'victoria', 'warden', 'warren', 'wellesley', 'weston', 'willowdale', 'wilson', 'woodbine', 'yonge', 'york');

$subway1 = array('yus', 'yusl', 'bd', 'bathurst', 'bay', 'bayview', 'bessarion', 'bloor', 'yonge', 'broadview', 'castlefrank', 'chester', 'christie', 'college', 'coxwell', 'davisville', 'donlands', 'downsview', 'dufferin', 'dundas', 'dupont', 'eglinton', 'ellesmere', 'finch', 'glencairn', 'greenwood', 'islington', 'jane', 'keele', 'kennedy', 'king', 'kipling', 'lansdowne', 'lawrence', 'leslie', 'mccowan', 'midland', 'museum', 'osgoode', 'ossington', 'pape', 'queen', 'rosedale', 'runnymede', 'sheppard', 'sherbourne', 'spadina', 'summerhill', 'union', 'warden', 'wellesley', 'wilson', 'woodbine', 'yorkdale');

$subway2 = array('castle frank', 'don mills', 'dundas west', 'high park', 'lawrence east', 'lawrence west', 'main street', 'north york centre', 'old mill', 'queen s park', 'queens park', 'royal york', 'scarborough centre', 'st andrew', 'st clair', 'st clair west', 'st george', 'st patrick', 'vic park', 'victoria park', 'york mills');

function custom_sort($a,$b) {
	return $a['id']>$b['id'];
}

function time_since($original) {
	// array of time period chunks
	$chunks = array(
		array(60 * 60 * 24 * 365 , 'year'),
		array(60 * 60 * 24 * 30 , 'month'),
		array(60 * 60 * 24 * 7, 'week'),
		array(60 * 60 * 24 , 'day'),
		array(60 * 60 , 'hour'),
		array(60 , 'minute'),
	);
	
	$today = time(); /* Current unix time  */
	$since = $today - $original;
	
	// $j saves performing the count function each time around the loop
	for ($i = 0, $j = count($chunks); $i < $j; $i++) {
		$seconds = $chunks[$i][0];
		$name = $chunks[$i][1];
	
		// finding the biggest chunk (if the chunk fits, break)
		if (($count = floor($since / $seconds)) != 0) {
			break;
		}
	}
	
	$print = ($count == 1) ? '1 '.$name : "$count {$name}s";
	
	if ($i + 1 < $j) {
		// now getting the second item
		$seconds2 = $chunks[$i + 1][0];
		$name2 = $chunks[$i + 1][1];
	
		// add second item if it's greater than 0
		if (($count2 = floor(($since - ($seconds * $count)) / $seconds2)) != 0) {
			$print .= ($count2 == 1) ? ', 1 '.$name2 : ", $count2 {$name2}s";
		}
	}
	return $print;
}
	
function autolink($ret) {
	$ret = preg_replace("#(^|[\n ])([\w]+?://[\w]+[^ \"\n\r\t< ]*)#", "\\1<a href=\"\\2\" target=\"_blank\">\\2</a>", $ret);
	$ret = preg_replace("#(^|[\n ])((www|ftp)\.[^ \"\t\n\r< ]*)#", "\\1<a href=\"http://\\2\" target=\"_blank\">\\2</a>", $ret);
	$ret = preg_replace("/@(\w+)/", "<a href=\"http://twitter.com/\\1/\" target=\"_blank\">@\\1</a>", $ret);
	$ret = preg_replace("/#(\w+)/", "<a href=\"http://search.twitter.com/search?q=%23\\1\" target=\"_blank\">#\\1</a>", $ret);
	return censorWords($ret);
}

function censorWords($text){
	$find = array(
		'/a+s+s+h+o+l+e+/i',
		'/\bs+h+i+t+([b-z]|\b|$)/i',
		'/\bb+u+l+l+s+h+i+t+\b/i',
		'/f+(u+)?c+k+/i',
		'/\bp+e+n+i+s+\b/i',
		'/\bc+o+c+k+\b/i',
		'/\bb+i+t+c+h(e+s+)?\b/i',
		'/\bj+a+c+k+a+s+s+(e+s+)?\b/i',
		'/\bv+a+g+i+n+a+\b/i'
	);
	$replace = array(
		'a__h_le',
		'sh_t$1',
		'b_llsh_t',
		'f__k',
		'p_nis',
		'c_ck',
		'b_tch$1',
		'jacka__$1',
		'v_g_na'
	);
	return preg_replace($find,$replace,$text);
}

function is_english($str) {
	if (strlen($str) != strlen(utf8_decode($str))) {
		return false;
	}
	return true;
}

function mood($string) {
	$string = explode(' ', $string);
	$contentCount = count($string);
	$mood = 0;
	for($i=0; $i<$contentCount; $i++) {
		if (preg_match('/\b(delay(s|ed)|stalled|diverting|wait(ing|ed)?|full|no|creepy|gross|dumb|packed|painful|f\'ing|clos(e(d|s)|ures?)|delay|down|stuck|custody|stabb(ed|ing)|shooting|shot|steal|theft|thie(f|ves)|police|forgot|not|stopped|hurt|slow|avoid|detour(ing)?|sucks|hate|shuttle|screw(s|ed|ing)?|walk(ing|ed)?)\b|a+s+s+h+o+l+e+|f+(u+)?c+k+|\b(s+h+i+t+([b-z]|\b|$)|b+i+t+c+h(e+s+)?|b+u+l+l+s+h+i+t+|c+o+c+k+|p+e+n+i+s+|v+a+g+i+n+a+|b+a+s+t+a+r+d+(s+)?|j+a+c+k+a+s+s+(e+s+)?)\b/', $string[$i]))
			$mood -= 1;
		elseif (preg_match('/\b(cleared|resumed|love|won|amazing)\b/', $string[$i]))
			$mood += 1;
	}
	if ($mood >= 0) $mood = '+';
	else $mood = '-';
	return $mood;
}

function dupeCheck($needle, $haystack) {
	$dupeFlag = false;
	$needle = cleanString($needle);
	$needlemood = mood($needle);
	$haycount = count($haystack);
    for($i=0; $i<$haycount; $i++) {
		$haystick = cleanString($haystack[$i]);
		// If they are exactly the same, mark as dupe.
		if ($needle == $haystick) {
			$dupeFlag = true;
			break;
		}
		$haystickmood = mood($haystick);
		// Extract key words (station names, stop numbers), and see if the needle and haystick are the same
			$needlekeys = extractor($needle);
			$haystickkeys = extractor($haystick);
			$haydiff = array_diff($needlekeys, $haystickkeys);
			// Enable below to be more strict on duplicate entries
			//if ($needlemood == $haystickmood && (empty($haydiff) && count($needlekeys) && count($needlekeys) == count($haystickkeys)) || (count($haydiff) == 1 && count($needlekeys) && abs(count($needlekeys) - count($haystickkeys)) >= 1)) {
			if (empty($haydiff) && $needlemood == $haystickmood && count($needlekeys) && count($needlekeys) == count($haystickkeys)) {
				$dupeFlag = true;
				break;
			}
		// If still in the loop, remove irrelevant words and compare left-over words
			$regex = '/\b(delay(s|ed)|due to|at|the|and|full|on|stalled|bus(s?es)?|both ?ways|being|used|collision|incident|streetcar|line|servic(e|ing)|has|for|stations?|route|a)\b/';
			$needle = preg_replace($regex, '', $needle);
			$haystick = preg_replace($regex, '', $haystick);
			similar_text($needle, $haystick, $dupepercentage);
			if($dupepercentage > 80) {
				$dupeFlag = true;
				break;
			}
    }
	return $dupeFlag;	
}

function cleanString($content) {
	$content = strtolower($content);
	// Remove all links
	$content = preg_replace('/http:\/\/t\.co\/[a-z0-9]+/', '', $content);
	// Remove junk key words
	$content = preg_replace('/don\'t/', '', $content);
	// Remove junk numbers
	$content = preg_replace('/([0-9]+)?[0-9](st|nd|rd|th)|[0-9]+(-|\/|\.)[0-9]+|than [0-9]+|[0-9]+%|[0-9]+ (cents?|more)|[0-9],[0-9]+(\.[0-9]+)?/', '', $content);
	// Remove "x minutes", but leave in "minute" for scoring purposes
	$content = preg_replace('/([0-9]+:[0-9]+|[0-9]+((-|\bto\b)[0-9]+)?(\s|-)?(min(s?|utes?)?|years?|hours?|days?|sec(s|onds?)?)\b)/', 'minute', $content);
	$content = preg_replace('/\bday [0-9]+\b/', '', $content);
	//  remove all non alphanumeric chars; we're exploding later
	$content = preg_replace('/[^a-z0-9]/', ' ', $content);
	// split conjoined numeric/alpha strings
	$content = preg_replace('/([0-9])([a-z])/', '$1 $2', $content);
	
	while(strstr($content, '  ')) {
		$content = str_replace('  ', ' ', $content);
	}
	
	return $content;
}

function extractor($content) {
	global $stops, $stops_num, $stops_names, $subway1, $subway2;
	preg_match_all('/\b('.implode('|', $stops).')|\b('.implode('|', $stops_num).')\b|\b('.implode('|', $stops_names).')\b|\b('.implode('|', $subway1).')\b|\b('.implode('|', $subway2).')\b/', $content, $matches);
	sort($matches[0]);
	return array_unique($matches[0]);
}

function scorer($content) {
	global $stops, $stops_num, $stops_names, $subway1, $subway2;
	$score = 0;
	$intCount = 0;
	$numratio = 0;
	$contentCount = 0;
	$ttc = false;
	$content = strtolower($content);
	// Phrases
		// General spam words
		if (preg_match('/(\b(chez|frais|bit ly|budget|condom|sex|his coxwell|her spadina|conceive|barrow ttc|transportation \& ticket center|league|ttc production|ttc aluminum)\b|^&gt; |^!!|bpm\b|\b[0-9]+ [0-9]+\b)/', $content))
			$score = -999999999;
		// Profanity
		if (preg_match('/a+s+s+h+o+l+e+|f+(u+)?c+k+|\b(s+h+i+t+([b-z]|\b|$)|b+i+t+c+h(e+s+)?|b+u+l+l+s+h+i+t+|c+o+c+k+|p+e+n+i+s+|v+a+g+i+n+a+|b+a+s+t+a+r+d+(s+)?|j+a+c+k+a+s+s+(e+s+)?)\b/', $content))
			$score = -999999999;
	if ($score == 0) {
		$content = cleanString($content);
		$contentkeys = extractor(cleanString($content));
		if (count($contentkeys) > 0) {
			$ttc = true;
			$score = 15*count($contentkeys);
		}
		if ($ttc) {
			$content = explode(' ', $content);
			$contentCount = count($content);
			for($i=0; $i<$contentCount; $i++) {
				if (preg_match('/^\d+[^a-z]/', $content[$i]))
					$intCount++;
				if(in_array($content[$i], $stops_names))
					$score += 10;
				///////////////////////////////////////////////
				if (preg_match('/\b(west|east|south|north|n|e|s|w) ?b(o?u?nd)?\b/', $content[$i]))
					$score += 20;
				///////////////////////////////////////////////
				if (preg_match('/\broutes?\b/', $content[$i]))
					$score += 15;
				if (preg_match('/\blines?\b/', $content[$i]))
					$score += 15;
				///////////////////////////////////////////////
				if (preg_match('/\bexpress\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bbus(s?es)?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bsc\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\b(street ?)?cars?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bsubways?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\btrains?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bshuttles?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bstations?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bplatform\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bpolice\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bstn?s?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bdelay(ed|s)?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\binvestigation\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bbackups?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bupdates?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\boutage\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bresum(ing|ed)\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bnormal\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bregular\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\boperate\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bredirect(ed|ing)?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bclear(ed)?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bfire?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bsmoke?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bholding?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\brestored\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bemergency\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\breport(s|ed)?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bavoid(ing)?\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bstabb(ed|ing)\b/', $content[$i]))
					$score += 10;
				if (preg_match('/\bsho(t|oting)\b/', $content[$i]))
					$score += 10;
				///////////////////////////////////////////////
				if (preg_match('/\bstop(s|ped)?\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\bdisabled?\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\bclosure\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\bdivert(ed)?\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\bscheduled?\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\baccident\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\bcrash\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\bpower\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\bmedical?\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\bservices?\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\blate\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\bpacked\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\bcrowd\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\bmin(ute)?s?\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\bdr\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\brd\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\bave\b/', $content[$i]))
					$score += 5;
				if (preg_match('/\bstuck\b/', $content[$i]))
					$score += 5;
				///////////////////////////////////////////////
				if (preg_match('/\bmotion(s|ed|ing)?\b/', $content[$i]))
					$score -= 5;
			}
			$numratio = $intCount/$contentCount;
			if ($numratio > 0.35)
				$score -= 999999999;
		} else $score -= 999999999;
	}
	return array($score,$numratio,$intCount,$contentCount);
}

function prepareTweetSimple($tweet) {
	if (strlen($tweet) > 140)
		$tweet = substr($tweet, 0, 137).'...';
	return $tweet;
}

function prepareTweet($tweet, $user){
	$tweetlength = strlen($tweet);
	$userlength = strlen($user);
	$tweet = html_entity_decode($tweet);
	if (($tweetlength + 3 + $userlength) <= 140) {
		$tweet = $tweet.' -@'.strtolower($user);
	} elseif (($tweetlength + 2 + $userlength) == 140) {
		$tweet = $tweet.'-@'.strtolower($user);
	} else {
		$tweet = trim(substr($tweet, 0, (140 - 2 - $userlength)));
		if (preg_match('/\bht?t?p?:?\/?\/?t?\.?c?o?\/?([A-Za-z0-9]+)?$/', $tweet) || preg_match('/(^|[^A-Za-z0-9])#(\w+)?$/', $tweet) || preg_match('/(^|[^A-Za-z0-9])@(\w+)?$/', $tweet)) {
			if (preg_match('/(^|[^A-Za-z0-9])@(\w+)?$/', $tweet)) $tweet = preg_replace('/(^|[^A-Za-z0-9])@(\w+)?$/', '', $tweet);
			else if (preg_match('/(^|[^A-Za-z0-9])#(\w+)?$/', $tweet)) $tweet = preg_replace('/(^|[^A-Za-z0-9])#(\w+)?$/', '', $tweet);
			else if (preg_match('/\bht?t?p?:?\/?\/?t?\.?c?o?\/?([A-Za-z0-9]+)?$/', $tweet)) $tweet = preg_replace('/\bht?t?p?:?\/?\/?t?\.?c?o?\/?([A-Za-z0-9]+)?$/', '', $tweet);
			if ((strlen($tweet) + 3 + $userlength) <= 140) $tweet = $tweet.' -@'.strtolower($user);
			elseif ((strlen($tweet) + 2 + $userlength) == 140) $tweet = $tweet.'-@'.strtolower($user);
			else $tweet = prepareTweet($tweet, $user);
		} else $tweet .= ']@'.$user;
	}
	return $tweet;
}

function refreshCache() {
	date_default_timezone_set('America/Toronto');
	
	$topOutput = '';
	$statsOutput = '';

	// Output
		// Latest alerts - All
		$getLatest = mysql_query("SELECT tweets.id, tweets.text, tweets.created_at, users.screen_name, users.trusted FROM tweets, users WHERE tweets.userid = users.id ORDER BY tweets.created_at DESC LIMIT 6");
		$latestOutput = '';
		while ($latest = mysql_fetch_array($getLatest)) {
			include('_output.php');
		}
		$latestOutput .= '<div class="tright text">(<a href="http://twitter.com/ttcing/" target="_blank">view more</a>)</div>';
		// Dump to Output Files
			$f = fopen("../inc/_latest.inc", "w"); 
			fwrite($f, $latestOutput); 
			fclose($f);
		// Latest alerts - #ttcu only
		$getLatest = mysql_query("SELECT tweets.id, tweets.text, tweets.created_at, users.screen_name, users.trusted FROM tweets, users WHERE tweets.ttcu = '1' AND tweets.userid = users.id ORDER BY tweets.created_at DESC LIMIT 6");
		$latestOutput = '';
		while ($latest = mysql_fetch_array($getLatest)) {
			include('_output.php');
		}
		$latestOutput .= '<div class="tright text">(<a href="http://twitter.com/ttcing/" target="_blank">view more</a>)</div>';
		// Dump to Output Files
			$f = fopen("../inc/_latest-ttcu.inc", "w"); 
			fwrite($f, $latestOutput); 
			fclose($f);
		// Latest alerts - all other than #ttcu
		$getLatest = mysql_query("SELECT tweets.id, tweets.text, tweets.created_at, users.screen_name, users.trusted FROM tweets, users WHERE tweets.ttcu = '0' AND tweets.userid = users.id ORDER BY tweets.created_at DESC LIMIT 6");
		$latestOutput = '';
		while ($latest = mysql_fetch_array($getLatest)) {
			include('_output.php');
		}
		$latestOutput .= '<div class="tright text">(<a href="http://twitter.com/ttcing/" target="_blank">view more</a>)</div>';
		// Dump to Output Files
			$f = fopen("../inc/_latest-nonttcu.inc", "w"); 
			fwrite($f, $latestOutput); 
			fclose($f);
		
		// Top users.
		$getTopUsers = mysql_query("SELECT screen_name, tweets FROM users WHERE screen_name <> 'TTCnotices' ORDER BY tweets DESC, created_at DESC LIMIT 6");
		while($user = mysql_fetch_array($getTopUsers)) {
			$topOutput .= '<div class="grid_3 user alpha">'.
				'<!-- <div class="grid_1 alpha avatar">'.
					'<a href="http://twitter.com/'.$user['screen_name'].'/" target="_blank"><img src="http://img.tweetimag.es/i/'.$user['screen_name'].'_n" border="0" alt="'.$user['screen_name'].'" title="'.$user['screen_name'].'" /></a>'.
				'</div> -->'.
				'<div class="grid_2 omega name">'.
					'<a href="http://twitter.com/'.$user['screen_name'].'/" target="_blank">'.strtolower($user['screen_name']).'</a>'.
					'<div class="num">'.$user['tweets'].' alert';
					if($user['tweets'] > 1) { $topOutput .= 's'; }
					$topOutput .= '</div>'.
				'</div>'.
			'</div>';
		}
		// Stats.
		$getAlerts = mysql_fetch_row(mysql_query("SELECT COUNT(id) FROM tweets"));
		$getUsers = mysql_fetch_row(mysql_query("SELECT COUNT(id) FROM users"));
		$statsOutput .= '<div class="grid_3 stat alpha">'.
				'<div class="grid_1 figure alpha">'.$getAlerts[0].'</div>'.
				'<div class="grid_2 context omega">alert';
					if($getAlerts[0] > 1) { $statsOutput .= 's'; }
				$statsOutput .= '</div>'.
			'</div>'.
			'<div class="grid_3 stat alpha">'.
				'<div class="grid_1 figure alpha">'.$getUsers[0].'</div>'.
				'<div class="grid_2 context omega">contributor';
					if($getUsers[0] > 1) { $statsOutput .= 's'; }
				$statsOutput .= '</div>'.
			'</div>';

	// Dump to Output Files
		$f = fopen("../inc/_top.inc", "w"); 
		fwrite($f, $topOutput); 
		fclose($f);
		
		$f = fopen("../inc/_stats.inc", "w"); 
		fwrite($f, $statsOutput); 
		fclose($f);
}
?>