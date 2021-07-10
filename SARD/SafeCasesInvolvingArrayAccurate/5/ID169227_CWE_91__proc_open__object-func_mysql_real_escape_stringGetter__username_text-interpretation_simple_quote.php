<?php
/* 
Safe sample
input : use proc_open to read /tmp/tainted.txt
sanitize : use mysql_real_escape_string via an object and a classic getter
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


$descriptorspec = array(
  0 => array("pipe", "r"),
  1 => array("pipe", "w"),
  2 => array("file", "/tmp/error-output.txt", "a")
  );
$cwd = '/tmp';
$process = proc_open('more /tmp/tainted.txt', $descriptorspec, $pipes, $cwd, NULL);
if (is_resource($process)) {
  fclose($pipes[0]);
  $tainted = stream_get_contents($pipes[1]);
  fclose($pipes[1]);
  $return_value = proc_close($process);
}

class Sanitize{
  private $data;
  public function __construct($input){
    $this->data = $input ;
  }
  public function getData(){
    return $this->data;
  }
  public function sanitize(){
    $this->data = mysql_real_escape_string($this->data) ;
  }
}
$sanitizer = new Sanitize($tainted) ;
$sanitizer->sanitize();
$tainted = $sanitizer->getData(); 

$query = "//User[username/text()=' $tainted ']";

$xml = simplexml_load_file("users.xml");//file load
echo "query : ". $query ."<br /><br />" ;

$res=$xml->xpath($query);//execution
print_r($res);
echo "<br />" ;

?>