<?php
$array = array();
$array[] = 'safe' ;
$array[] = $_SESSION['UserData'];
$array[] = 'safe' ;
$x = 0;
$tainted = $array[$x] ;

$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;

$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;

$query = sprintf("echo $'%s';", $tainted);

//flaw
$res = eval($query);

?>
