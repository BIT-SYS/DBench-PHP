<?php
/*
Safe sample
DataType: string
Source: unifiedInitial_arrayNestGET_fixedValueVarExprIndex
Sink: directGET_constExprIndex
*/

//source
	$arrayTmp1 = array(
		'0' => '0',
		'10' => '10' ,
		'20' => '20'
	);
	$index1 = '1';
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
		$arrayTmp1[$index1.'0']=>$_GET['UNSAFE']
	);

//sink
$tainted = $array['1'.'1'];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>