<?php

$handle = popen('/bin/cat /tmp/tainted.txt', 'r');

$array = array();
$array[] = 'safe' ;
$array[] = fread($handle, 4096);
$array[] = 'safe' ;
$x = 0;
$tainted = $array[$x] ;

pclose($handle);

//no_sanitizing

//flaw

$var = fopen($tainted, "r");


 ?>
