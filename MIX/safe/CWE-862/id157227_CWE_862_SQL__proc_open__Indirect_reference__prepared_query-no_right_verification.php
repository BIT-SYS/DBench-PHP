


<?php
//vary_constants
//add_useless_loop
/*
/* 
Safe sample
input : use proc_open to read /tmp/tainted.txt
SANITIZE : uses indirect reference
construction : prepared query and no right verification
*/



/*Copyright 2015 Bertrand STIVALET 

Permission is hereby granted, without written agreement or royalty fee, to

use, copy, modify, and distribute this software and its documentation for

any purpose, provided that the above copyright notice and the following

three paragraphs appear in all copies of this software.


IN NO EVENT SHALL AUTHORS BE LIABLE TO ANY PARTY FOR DIRECT,

INDIRECT, SPECIAL, INCIDENTAL, OR CONSEQUENTIAL DAMAGES ARISING OUT OF THE 

USE OF THIS SOFTWARE AND ITS DOCUMENTATION, EVEN IF AUTHORS HAVE

BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.


AUTHORS SPECIFICALLY DISCLAIM ANY WARRANTIES INCLUDING, BUT NOT

LIMITED TO THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A

PARTICULAR PURPOSE, AND NON-INFRINGEMENT.


THE SOFTWARE IS PROVIDED ON AN "AS-IS" BASIS AND AUTHORS HAVE NO

OBLIGATION TO PROVIDE MAINTENANCE, SUPPORT, UPDATES, ENHANCEMENTS, OR

MODIFICATIONS.*/


for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$variable_constructed_0=0;
$variable_constructed_1=1;
$variable_constructed_2="/tmp/error-output.txt";
$variable_constructed_3="pipe";
$variable_constructed_4="r";
$variable_constructed_5=2;
$variable_constructed_6="a";
$variable_constructed_7="file";
$variable_constructed_8="w";
$descriptorspec = array(
  $variable_constructed_0 => array("pipe", "r"),
  $variable_constructed_1 => array("pipe", "w"),
  $variable_constructed_5 => array("file", "/tmp/error-output.txt", "a")
  );
}
}
}
}
for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$variable_constructed_9="/tmp";
$cwd = $variable_constructed_9;
}
}
}
}
for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$variable_constructed_10="more /tmp/tainted.txt";
$process = proc_open($variable_constructed_10, $descriptorspec, $pipes, $cwd, NULL);
}
}
}
}
for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
if (is_resource($process)) {
$variable_constructed_11=0;
  fclose($pipes[$variable_constructed_11]);
$variable_constructed_12=1;
  $tainted = stream_get_contents($pipes[$variable_constructed_12]);
$variable_constructed_13=1;
  fclose($pipes[$variable_constructed_13]);
  $return_value = proc_close($process);
}
}
}
}
}

for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$course_array = array();
}
}
}
}
//get the user id
for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$user_id = intval($_SESSION[‘user_id’]);
}
}
}
}

//creation of the references with only data allowed to the user
for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$result = mysql_query("SELECT * FROM COURSE where course.allowed = {$user_id}");
}
}
}
}

for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
while ($row = mysql_fetch_array($result)){
  $course_array[] = $result[‘id’];
}
}
}
}
}

for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$_SESSION[‘course_array’] = $course_array;
}
}
}
}
for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
if (isset($_SESSION[‘course_array’])){
  $course_array = $_SESSION[‘course_array’];
  if (isset($course_array[$taintedId])){
    //indirect reference > get the right id
    $tainted = $course_array[$tainted];
  }
}
else {
$variable_constructed_14=0;
  $tainted = $variable_constructed_14; //default value
}
}
}
}
}

for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$variable_constructed_15="SELECT * FROM COURSE WHERE id=?";
$query = "SELECT * FROM COURSE WHERE id=?";
}
}
}
}

for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$variable_constructed_16="localhost";
$variable_constructed_17="mysql_password";
$variable_constructed_18="mysql_user";
$conn = mysql_connect($variable_constructed_16, 'mysql_user', 'mysql_password'); //Connection to the database (address, user, password)
}
}
}
}
for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$stmt = $conn->prepare($query);
}
}
}
}
for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$variable_constructed_19="i";
$stmt->bind_param("i", $checked_data);
}
}
}
}
for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$stmt->execute();
}
}
}
}
for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
mysql_close($conn);
}
}
}
}

 ?>
