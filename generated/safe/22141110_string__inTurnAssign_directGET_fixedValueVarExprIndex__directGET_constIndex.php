<?php
/*
Safe sample
DataType: string
Source: inTurnAssign_directGET_fixedValueVarExprIndex
Sink: directGET_constIndex
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
	$var1 = '1';
	$array[$var1.'0'] = $_GET['UNSAFE'];

//sink
	$tainted = $array['11'];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>