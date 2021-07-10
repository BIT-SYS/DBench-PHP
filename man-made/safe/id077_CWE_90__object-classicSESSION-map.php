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
$array = array();
$array[] = 'safe' ;
$array[] = $temp->getInput() ;
$array[] = 'safe' ;
$x = 0;
$tainted = $array[$x] ;

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
