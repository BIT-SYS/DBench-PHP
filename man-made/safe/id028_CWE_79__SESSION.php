<!DOCTYPE html>
<html>
<head>
<style>
<?php

$array = array();
$array[] = 'safe' ;
$array[] = $_SESSION['UserData'];
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
 </style> 
 </script>
</head>
<body>
<h1>Hello World!</h1>
</body>
</html>
