<?php

class Input{
  
  public function myfunction($v)
  {
	if ($v === "Dog")
   {
		return $_SESSION['UserData'];
   }
  }
  
  $a = array("Horse","Dog","Cat");
  
  public function getInput(){
    return array_map("myfunction",$a[0]);
  }
}

$temp = new Input();

$tainted = $temp->getInput() ;

$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;

if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;
      

//flaw

$var = include("'". $tainted . ".php'");



?>
