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
