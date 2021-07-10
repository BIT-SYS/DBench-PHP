<?php
$array = array();
$array[] = 'safe' ;
$array[] = $_SESSION['UserData'];
$array[] = 'safe' ;
$x = 1;
$tainted = $array[$x] ;

$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;

$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;

//flaw

$var = http_redirect(sprintf("'%s'.php", $tainted));



?>
