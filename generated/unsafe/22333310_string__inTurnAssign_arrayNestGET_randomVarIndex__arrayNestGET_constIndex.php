<?php
/*
Unsafe sample
DataType: string
Source: inTurnAssign_arrayNestGET_randomVarIndex
Sink: arrayNestGET_constIndex
*/
	$array = array();
	$array['0']='safe';
	$array['1']='safe';
	$array['2']='safe';
	$array['3']='safe';
	$array['4']='safe';
	$array['5']='safe';
	$array['6']='safe';
	$array['7']='safe';
	$array['8']='safe';
	$array['9']='safe';

//source
	$arrayTmp1 = array(
		'0' => '0',
		'10' => '10' ,
		'20' => '20'
	);
	$index1 = $_GET['Input1'];
	$var1 = $arrayTmp1[$index1];
	$array[$var1] = $_GET['UNSAFE'];

//sink
	$arrayTmp2 = array(
		'0' => '0',
		'10' => '10' ,
		'20' => '20'
	);
	$var2 = $arrayTmp2['10'];
	$tainted = $array[$var2];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>