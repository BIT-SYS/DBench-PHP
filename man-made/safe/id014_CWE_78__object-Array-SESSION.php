<?php

class Input{
  private $input;

  public function getInput(){
    $x=0;
return $this->input[$x];
  }

  public  function __construct(){
    $this->input = array();
    $this->input[]= 'safe' ;
    $this->input[]= $_SESSION['UserData'] ;
    $this->input[]= 'safe' ;
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

$query = sprintf("cat '%s'", $tainted);

//flaw
$ret = system($query);


?>
