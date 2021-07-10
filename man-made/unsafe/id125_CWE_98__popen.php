<?php

$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$array = array();
$array[] = 'safe' ;
$array[] = fread($handle, 4096);
$array[] = 'safe' ;
$x = 1;
$tainted = $array[$x] ;
pclose($handle);


$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;

if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;

//flaw

$var = require("'$tainted'.php");



?>
