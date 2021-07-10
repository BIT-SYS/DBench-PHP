<?php
/*
Safe sample
DataType: string
Source: unifiedInitial_directGET_fixedScopeVarExprIndex
Sink: directGET_constIndex
*/

//source
	$var1 = $_GET['var1'];
	if ($var1=='1') {
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
	}

//sink
	$tainted = $array['11'];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>