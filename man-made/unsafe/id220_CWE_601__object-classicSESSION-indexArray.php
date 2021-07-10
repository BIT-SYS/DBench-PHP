<?php

class Input{
  private $input;
  
  $array1 = array();
  $array1[] = 'test' ;
  $array1[] = 'realOne' ;
  $array1[] = 'trap' ;
  
  public  function __construct(){
    $this->input = array();
	$x = $array1[0];
	$y = $array1[1];
	$z = $array1[2];
    $this->input[$x]= 'safe' ;
    $this->input[$y]= $_SESSION['UserData'] ;
    $this->input[$z]= 'safe' ;
  }

  public function getInput(){
    return $this->input['realOne'];
  }

}
$temp = new Input();
$tainted =  $temp->getInput();

$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;

$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;

//flaw

$var = header("Location: '$tainted'.php");



?>
