<?php

$script = "/tmp/tainted.php";
exec($script, $result, $return);
$array = array();
$array[] = 'safe' ;
$array[] = $result[0];
$array[] = 'safe' ;
$x = 0;
$tainted = $array[$x] ;

$tainted = $tainted ;

//flaw
$query = "SELECT * FROM student where id=' $tainted '";

$conn = mysql_connect('localhost', 'mysql_user', 'mysql_password'); //Connection to the database (address, user, password)
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $checked_data);
$stmt->execute();
mysql_close($conn);

 ?>
