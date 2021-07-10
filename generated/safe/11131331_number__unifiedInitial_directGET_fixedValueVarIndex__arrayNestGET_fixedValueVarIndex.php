<?php
/*
Safe sample
DataType: number
Source: unifiedInitial_directGET_fixedValueVarIndex
Sink: arrayNestGET_fixedValueVarIndex
*/

//source
	$var1 = 10;
	$array = array(
		0=>'safe',
		1=>'safe',
		2=>'safe',
		3=>'safe',
		4=>'safe',
		5=>'safe',
		6=>'safe',
		7=>'safe',
		8=>'safe',
		9=>'safe',
		$var1=>$_GET['UNSAFE']
	);

//sink
	$arrayTmp2 = array(
		0 => 0,
		1 => 10 ,
		2 => 20
	);
	$index2 = 2;
	$var2 = $arrayTmp2[$index2];
	$tainted = $array[$var2];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>