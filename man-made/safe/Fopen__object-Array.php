<?php

class Input{
  private $input;

  public function getInput(){
    $x=0;
return $this->input[$x];
  }

  public  function __construct(){
    $this->input = array();
    $this->input[0]= 'safe' ;
    $this->input[1]= $_GET['UserData'] ;
    $this->input[2]= 'safe' ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();

//no_sanitizing

//flaw

$var = fopen($tainted, "r");


 ?>
