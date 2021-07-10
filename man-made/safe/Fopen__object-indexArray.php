<?php

class Input{
  private $input;

  public function getInput(){
    $x='test';
return $this->input[$x];
  }

  public  function __construct(){
    $this->input = array();
    $this->input['test']= 'safe' ;
    $this->input['realOne']= $_GET['UserData'] ;
    $this->input['trap']= 'safe' ;
  }
}
$temp = new Input();
$tainted =  $temp->getInput();

//no_sanitizing

//flaw

$var = fopen($tainted, "r");


 ?>
