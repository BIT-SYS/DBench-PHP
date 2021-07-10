<?php

class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}

$temp = new Input();
$array = array();
$array[] = 'safe' ;
$array[] = $temp->getInput();
$array[] = 'safe' ;
$x = 0;
$tainted = $array[$x] ;

//no_sanitizing

//flaw

$var = fopen($tainted, "r");


 ?>
