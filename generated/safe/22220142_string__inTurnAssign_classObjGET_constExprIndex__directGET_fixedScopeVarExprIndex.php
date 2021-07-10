<?php
/*
Safe sample
DataType: string
Source: inTurnAssign_classObjGET_constExprIndex
Sink: directGET_fixedScopeVarExprIndex
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
	class Input1{
		public function getInput() {
			return '1';
		}
	}
	$temp1 = new Input1();
	$array[$temp1->getInput().'0'] = $_GET['UNSAFE'];

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