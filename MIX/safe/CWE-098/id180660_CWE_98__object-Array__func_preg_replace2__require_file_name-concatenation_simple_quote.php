


<?php
//vary_constants
//add_useless_loop
/* 
Safe sample
input : get the field userData from the variable $_GET via an object, which store it in a array
SANITIZE : use of preg_replace with another regex
construction : concatenation with simple quote
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
  private $input;

  public function getInput(){
$variable_constructed_0=1;
    return $this->input[$variable_constructed_0];
  }

  public  function __construct(){
    $this->input = array();
$variable_constructed_1=0;
$variable_constructed_2="safe";
    $this->input[$variable_constructed_1]= 'safe' ;
$variable_constructed_3=1;
$variable_constructed_4="UserData";
    $this->input[$variable_constructed_3]= $_GET['UserData'] ;
$variable_constructed_5=2;
$variable_constructed_6="safe";
    $this->input[$variable_constructed_5]= 'safe' ;
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
$variable_constructed_7=1;
$a = $variable_constructed_7;
while($a>1) {
$variable_constructed_8="UserData";
  $tainted = $_GET[$variable_constructed_8];
}
}
}
}
}

for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$variable_constructed_9="";
$variable_constructed_10="/\W/si";
$tainted = preg_replace('/\W/si',$variable_constructed_9,$tainted);
$variable_constructed_11=1;
$a = $variable_constructed_11;
while($a>1) {
$variable_constructed_12="UserData";
  $tainted = $_GET[$variable_constructed_12];
}
}
}
}
}


for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$variable_constructed_13=".php'";
$variable_constructed_14="'";
$var = require("'". $tainted . $variable_constructed_13);
}
}
}
}



?>
