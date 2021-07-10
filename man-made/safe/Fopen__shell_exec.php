<?php

$array = array();
$array[] = 'safe' ;
$array[] = shell_exec('cat /tmp/tainted.txt');
$array[] = 'safe' ;
$x = 0;
$tainted = $array[$x] ;


//no_sanitizing

//flaw

$var = fopen($tainted, "r");


 ?>
