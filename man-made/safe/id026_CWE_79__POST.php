<!DOCTYPE html>
<html>
<body>
<?php
$array = array();
$array[] = 'safe' ;
$array[] = $_POST['UserData'];
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

//flaw
echo "<div id=". $tainted .">content</div>" ;
?>
<h1>Hello World!</h1>
</div>
</body>
</html>
