<?php

class Input{
  private $input;
  
  $array1 = array();
  $array1[] = 'test' ;
  $array1[] = 'realOne' ;
  $array1[] = 'trap' ;
  
  public  function __construct(){
    $this->input = array();
	$x = array1[0];
	$y = array1[1];
	$z = array1[2];
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

$query = "SELECT lastname, firstname FROM drivers, vehicles WHERE drivers.id = vehicles.ownerid AND vehicles.tag='". $tainted . "'";

//flaw
$conn = mysql_connect('localhost', 'mysql_user', 'mysql_password'); // Connection to the database (address, user, password)
mysql_select_db('dbname') ;
echo "query : ". $query ."<br /><br />" ;

$res = mysql_query($query); //execution

while($data =mysql_fetch_array($res)){
print_r($data) ;
echo "<br />" ;
} 
mysql_close($conn);

?>
