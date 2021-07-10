<?php
/*
Safe sample
DataType: string
Source: inTurnAssign_directGET_constExprIndex
Sink: classObjGET_fixedScopeVarIndex
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
	$array['1'.'0'] = $_GET['UNSAFE'];

//sink
	class Input2{
		public function getInput() {
			return $_GET['Input2'];
		}
	}
	$temp2 = new Input2();
	$var2 = $temp2->getInput();
	if($var2!='10')
	{
		$tainted = $array[$var2];
	}

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>