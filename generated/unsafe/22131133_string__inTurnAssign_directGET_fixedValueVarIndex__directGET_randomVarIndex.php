<?php
/*
Unsafe sample
DataType: string
Source: inTurnAssign_directGET_fixedValueVarIndex
Sink: directGET_randomVarIndex
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
	$var1 = '10';
	$array[$var1] = $_GET['UNSAFE'];

//sink
	$var2 = $_GET['var2'];
	$tainted = $array[$var2];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>