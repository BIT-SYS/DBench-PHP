<?php
/*
Safe sample
DataType: string
Source: inTurnAssign_arrayNestGET_fixedValueVarExprIndex
Sink: classObjGET_fixedScopeVarExprIndex
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
	$index1 = '1';
	$var1 = $arrayTmp1[$index1.'0'];
	$array[$var1] = $_GET['UNSAFE'];

//sink
	class Input2{
		public function getInput() {
			return $_GET['Input2'];
		}
	}
	$temp2 = new Input2();
	$var2 = $temp2->getInput();
	if($var2!='1')
	{
		$tainted = $array[$var2.'0'];
	}

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>