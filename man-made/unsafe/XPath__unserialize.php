<?php
$array = array();
$array[] = 'safe' ;
$array[] = $_POST['UserData'] ;
$array[] = 'safe' ;
$x = 1;
$string = $array[$x] ;
$tainted = unserialize($string);
    

$tainted =  $tainted ;

//flaw
$query = "//User[@username='". $tainted . "']";

$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;

$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
 ?>
