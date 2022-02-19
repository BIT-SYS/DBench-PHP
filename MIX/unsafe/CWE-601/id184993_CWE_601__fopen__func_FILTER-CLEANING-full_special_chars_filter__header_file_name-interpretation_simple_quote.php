


<?php
//vary_constants
//add_useless_loop
/* 
Unsafe sample
input : use fopen to read /tmp/tainted.txt and put the first line in $tainted
Uses a full_special_chars_filter via filter_var function
construction : interpretation with simple quote
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
$variable_constructed_0="r";
$variable_constructed_1="/tmp/tainted.txt";
$handle = @fopen("/tmp/tainted.txt", "r");
}
}
}
}

for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
if ($handle) {
  if(($tainted = fgets($handle, 4096)) == false) {
$variable_constructed_2="";
    $tainted = "";
  }
  fclose($handle);
} else {
$variable_constructed_3="";
  $tainted = "";
}
}
}
}
}

for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$sanitized = filter_var($tainted, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
}
}
}
}
for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
  $tainted = $sanitized ;
}
}
}
}
     

//flaw

for($loopVar0=0;$loopVar0<1;$loopVar0++){
for($loopVar1=0;$loopVar1<1;$loopVar1++){
for($loopVar2=0;$loopVar2<1;$loopVar2++){
for($loopVar3=0;$loopVar3<1;$loopVar3++){
$var = header("Location: '$tainted'.php");
}
}
}
}



?>
