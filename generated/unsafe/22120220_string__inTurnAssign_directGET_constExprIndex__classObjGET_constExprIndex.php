<?php
/*
Unsafe sample
DataType: string
Source: inTurnAssign_directGET_constExprIndex
Sink: classObjGET_constExprIndex
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
			return '1';
		}
	}
	$temp2 = new Input2();
	$tainted = $array[$temp2->getInput().'0'];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>