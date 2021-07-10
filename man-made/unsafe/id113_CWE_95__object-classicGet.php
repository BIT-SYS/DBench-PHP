<?php

class Input{
  private $input;

  public function getInput(){
    return $this->input;
  }

  public  function __construct(){
   $this->input = $_SESSION['UserData'] ;
  }
}
$temp = new Input();
$array = array();
$array[] = 'safe' ;
$array[] = $temp->getInput();
$array[] = 'safe' ;
$x = 1;
$tainted = $array[$x] ;

$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;

$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;

$query = sprintf("echo $'%s';", $tainted);

//flaw
$res = eval($query);

?>
