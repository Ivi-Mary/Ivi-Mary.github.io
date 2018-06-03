<?php
header('Content-Type: text/html; charset=UTF-8');
 require('phpQuery-master/phpQuery/phpQuery.php');

 $url = 'https://privatbank.ua/';
 $file = file_get_contents($url);
 
 $pattern='#<table id = "course-table-pb.+?</table>#s';
 preg_match( $pattern,$file,$matches);
 
 print_r($matches);
