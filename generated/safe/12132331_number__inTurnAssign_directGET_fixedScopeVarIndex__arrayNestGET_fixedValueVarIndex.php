<?php
/*
Safe sample
DataType: number
Source: inTurnAssign_directGET_fixedScopeVarIndex
Sink: arrayNestGET_fixedValueVarIndex
*/
	$array = array();
	$array[0]='safe';
	$array[1]='safe';
	$array[2]='safe';
	$array[3]='safe';
	$array[4]='safe';
	$array[5]='safe';
	$array[6]='safe';
	$array[7]='safe';
	$array[8]='safe';
	$array[9]='safe';

//source
	$var1 = $_GET['var1'];
	if($var1<11)
	{
		$array[$var1] = $_GET['UNSAFE'];
	}

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