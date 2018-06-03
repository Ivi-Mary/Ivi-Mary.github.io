<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title></title>
</head>
<body>
<?php
echo $res;
?>
</body>
</html>
<?php
$styles = array(
	'big_room_house',
	'club_house',
	'dance_pop',
	'deep_house',
	'electrohouse',
	'future_house',
	'g_house',
	'pop',
	'progressive_housee',
	'russian_pop',
	'techhouse',);
$styles = array(
	'techhouse',);
$urls = array();
foreach ($styles as $style) {
	for ($m=1; $m < 12; $m++) { 
		$urls[] = "http://promodj.com/music/$style/?sortby=rating&bitrate=high&no_junk=1&period=date&duration=10m&year=2017&month=$m&page=1";
		$urls[] = "http://promodj.com/music/$style/?sortby=rating&bitrate=high&no_junk=1&period=date&duration=10m&year=2017&month=$m&page=2";
	}
}
foreach ($urls as $url) {
	$html = file_get_contents($url);
	$re = '/<span class="downloads_count"><a onclick="return cb\(event\);" href="(.*)" ambatitle="Download">/im';
	preg_match_all($re, $html, $matches, PREG_SET_ORDER, 0);
	foreach ($matches as $key => $value) {
		echo $value[1]."\r\n";
	}
}
?>
