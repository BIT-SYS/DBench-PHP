<?php

$array = array();
$array[] = 'safe' ;
$array[] = 'safe' ;

$handle = @fopen("/tmp/tainted.txt", "r");

if ($handle) {
  if(($tainted = fgets($handle, 4096)) == false) {
    $tainted = $array[0];
  }
  fclose($handle);
} else {
  $tainted = $array[1];
}

//no_sanitizing

//flaw

$var = fopen($tainted, "r");


 ?>
