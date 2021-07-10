<?php

class Input{
  public function getInput(){
    return $_GET['UserData'] ;
  }
}

$temp = new Input();
$tainted =  $temp->getInput();

$tainted =  $tainted ;

//flaw
$query = "//User[@username='". $tainted . "']";

$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;

$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;
 ?>
