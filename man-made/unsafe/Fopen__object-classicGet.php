<?php

class Input{
  private $input;

  public function getInput(){
    return $this->input;
  }

  public  function __construct(){
   $this->input = $_GET['UserData'] ;
  }
}
$temp = new Input();

$array = array();
$array[] = 'safe' ;
$array[] = $temp->getInput();
$array[] = 'safe' ;
$x = 1;
$tainted = $array[$x] ;

//no_sanitizing

//flaw

$var = fopen($tainted, "r");


 ?>
