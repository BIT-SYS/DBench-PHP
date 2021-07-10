<?php
$array = array();
$array[] = 'safe' ;
$array[] = shell_exec('cat /tmp/tainted.txt');
$array[] = 'safe' ;
$x = 1;
$tainted = $array[$x] ;



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
