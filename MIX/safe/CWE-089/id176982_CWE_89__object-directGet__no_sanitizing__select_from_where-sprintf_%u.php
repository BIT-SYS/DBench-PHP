


<?php
//vary_constants
//add_useless_loop
/* 
Safe sample
input : get the field userData from the variable $_GET via an object
sanitize : none
construction : use of sprintf via a %u
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


class Input{
  public function getInput(){
$variable_constructed_0="UserData";
    return $_GET[$variable_constructed_0] ;
  }
}

for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$temp = new Input();
}
}
}
}
for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$tainted =  $temp->getInput();
$variable_constructed_1=1;
$a = $variable_constructed_1;
while($a>1) {
$variable_constructed_2="UserData";
  $tainted = $_GET[$variable_constructed_2];
}
}
}
}
}

//no_sanitizing

for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$variable_constructed_3="SELECT * FROM student where id=%u";
$query = sprintf("SELECT * FROM student where id=%u", $tainted);
}
}
}
}

for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$variable_constructed_4="localhost";
$variable_constructed_5="mysql_password";
$variable_constructed_6="mysql_user";
$conn = mysql_connect($variable_constructed_4, 'mysql_user', 'mysql_password'); // Connection to the database (address, user, password)
}
}
}
}
for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$variable_constructed_7="dbname";
mysql_select_db($variable_constructed_7) ;
}
}
}
}
for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$variable_constructed_8="query : ";
$variable_constructed_9="<br /><br />";
echo "query : ". $query ."<br /><br />" ;
}
}
}
}

for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$res = mysql_query($query); //execution
}
}
}
}

for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
while($data =mysql_fetch_array($res)){
print_r($data) ;
$variable_constructed_10="<br />";
echo "<br />" ;
} 
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
