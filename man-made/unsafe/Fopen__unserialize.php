<?php

$array = array();
$array[] = 'safe' ;
$array[] = $_POST['UserData'] ;
$array[] = 'safe' ;

$x=1;
$string = $array[$x] ;
$tainted = unserialize($string);
    

//no_sanitizing

//flaw

$var = fopen($tainted, "r");


 ?>
