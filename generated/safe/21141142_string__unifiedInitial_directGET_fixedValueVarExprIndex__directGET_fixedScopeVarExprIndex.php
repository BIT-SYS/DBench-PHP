<?php
/*
Safe sample
DataType: string
Source: unifiedInitial_directGET_fixedValueVarExprIndex
Sink: directGET_fixedScopeVarExprIndex
*/

//source
	$var1 = '1';
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
		$var1.'0'=>$_GET['UNSAFE']
	);

//sink
	$var2 = $_GET['var2'];
	if($var2!='1')
	{
		$tainted = $array[$var2.'0'];
	}

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>