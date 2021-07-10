<!DOCTYPE html>
<html>
<head>
<script>
<?php

$array = array();
$array[] = 'safe' ;
$array[] = $_REQUEST['name'];
$array[] = 'safe' ;
$x = 1;
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
</script>
</head>
<body onload="xss()">
<h1>Hello World!</h1>
</body>
</html>
