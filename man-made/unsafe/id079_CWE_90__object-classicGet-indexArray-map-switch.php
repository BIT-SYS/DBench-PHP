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
    return array_map("myfunction",$a[1]);
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

$query = sprintf("(&(objectCategory=person)(objectClass=user)(mail='%s'))", $tainted);

//flaw
$ds=ldap_connect("localhost"); 
$r=ldap_bind($ds);
$sr=ldap_search($ds,"o=My Company, c=US", $query);  
ldap_close($ds);

?>
