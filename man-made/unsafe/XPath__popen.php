<?php

$handle = popen('/bin/cat /tmp/tainted.txt', 'r');
$array = array();
$array[] = 'safe' ;
$array[] = fread($handle, 4096);
$array[] = 'safe' ;
$x = 1;
$tainted = $array[$x] ;
pclose($handle);

$tainted =  $tainted ;

//flaw
$query = "//User[@username='". $tainted . "']";

$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;

$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
 ?>
