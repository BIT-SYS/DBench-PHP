<?php
$array = array();
$array[] = 'safe' ;
$array[] = $_POST['UserData'] ;
$array[] = 'safe' ;
$x=0;
$string = $array[$x] ;
$tainted = unserialize($string);
    

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
