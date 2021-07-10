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
    $this->input[1]= $_SESSION['UserData'] ;
    $this->input[2]= 'safe' ;
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

$query = "//User[username/text()='". $tainted . "']";

//flaw
$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;

$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;

?>
