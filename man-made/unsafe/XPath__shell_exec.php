<?php
$array = array();
$array[] = 'safe' ;
$array[] = shell_exec('cat /tmp/tainted.txt');
$array[] = 'safe' ;
$x = 1;
$tainted = $array[$x] ;

$tainted =  $tainted ;

//flaw
$query = "//User[@username='". $tainted . "']";

$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;

$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
 ?>
