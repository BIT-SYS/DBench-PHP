<?php
/*
Safe sample
DataType: string
Source: unifiedInitial_arrayNestGET_constIndex
Sink: directGET_fixedValueVarIndex
*/

//source
	$arrayTmp1 = array(
		'0' => '0',
		'10' => '10' ,
		'20' => '20'
	);
	$array = array(
		'0'=>'safe',
		'1'=>'safe',
		'2'=>'safe',
		'3'=>'safe',
		'4'=>'safe',
		'5'=>'safe',
		'6'=>'safe',
		'7'=>'safe',
		'8'=>'safe',
		'9'=>'safe',
		$arrayTmp1['10']=>$_GET['UNSAFE']
	);

//sink
	$var2 = '11';
	$tainted = $array[$var2];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>