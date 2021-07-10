<?php
/*
Unsafe sample
DataType: string
Source: inTurnAssign_directGET_fixedScopeVarExprIndex
Sink: classObjGET_constIndex
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
	$var1 = $_GET['var1'];
	if($var1=='1')
	{
		$array[$var1.'0'] = $_GET['UNSAFE'];
	}

//sink
	class Input2{
		public function getInput() {
			return '10';
		}
	}
	$temp2 = new Input2();
	$tainted = $array[$temp2->getInput()];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>