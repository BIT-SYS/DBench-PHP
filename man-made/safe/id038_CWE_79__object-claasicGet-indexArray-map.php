<!DOCTYPE html>
<html>
<head>
<style>
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
$x = 0;
$tainted = $array[$x] ;

$sanitized = filter_var($tainted, FILTER_SANITIZE_EMAIL);
if (filter_var($sanitized, FILTER_VALIDATE_EMAIL))
  $tainted = $sanitized ;
else
  $tainted = "" ;

$sanitized = filter_var($tainted, FILTER_SANITIZE_SPECIAL_CHARS);
  $tainted = $sanitized ;

//flaw
echo "<div id=". $tainted .">content</div>" ;
?>
</style> 
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>
