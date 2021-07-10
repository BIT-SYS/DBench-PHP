<?php

$script = "/tmp/tainted.php";
exec($script, $result, $return);

$tainted = $result[0];

//no_sanitizing

//flaw

$var = fopen($tainted, "r");


 ?>
