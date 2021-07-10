<?php

$array = array();
$array[] = 'safe' ;
$array[] = $_SESSION['UserData'];
$array[] = 'safe' ;
$x = 0;
$tainted = $array[$x] ;

//no_sanitizing

//flaw

$var = fopen($tainted, "r");


 ?>
