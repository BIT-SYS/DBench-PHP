<?php

$descriptorspec = array(
  0 => array("pipe", "r"),
  1 => array("pipe", "w"),
  2 => array("file", "/tmp/error-output.txt", "a")
  );
$cwd = '/tmp';
$process = proc_open('more /tmp/tainted.txt', $descriptorspec, $pipes, $cwd, NULL);
if (is_resource($process)) {
  fclose($pipes[0]);
  $x=0;
$tainted = stream_get_contents($pipes[$x]);
  fclose($pipes[1]);
  $return_value = proc_close($process);
}

//no_sanitizing

//flaw

$var = fopen($tainted, "r");


 ?>
