<?php

$array = array();
$array[] = 'safe' ;
$array[] = $_GET['userData'] ;
$array[] = 'safe' ;
$x = 1;
$tainted = $array[$x] ;

//no_sanitizing

//flaw

$var = fopen($tainted, "r");


 ?>
