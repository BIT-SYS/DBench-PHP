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

$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;
$query = "//User[username/text()='". $tainted . "']";

//flaw
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;

$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;

?>
