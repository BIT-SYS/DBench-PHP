<?php

class Input{
  
  public function myfunction($v)
  {
	if ($v === "Dog")
   {
		return $_GET['UserData'];
   }
  }
  
  $a = array("Horse","Dog","Cat");
  
  public function getInput(){
    return array_map("myfunction",$a[0]);
  }
}

$temp = new Input();

$array = array();
$array['test'] = 'safe' ;
$array['realOne'] = $temp->getInput() ;
$array['trap'] = 'safe' ;

$favcolor = 'realOne';

switch ($favcolor)
{
case 'test':
    break;
case 'realOne':
    $tainted = $array[2-1] ;
    break;
case 'trap':
    break;
}

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