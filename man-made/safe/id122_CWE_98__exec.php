<?php

$script = "/tmp/tainted.php";
exec($script, $result, $return);
$array = array();
$array[] = 'safe' ;
$array[] = $result[0];
$array[] = 'safe' ;
$x = 0;
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

$var = include("'". $tainted . ".php'");



?>
