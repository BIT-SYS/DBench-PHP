<?php
/*
Unsafe sample
DataType: string
Source: inTurnAssign_directGET_randomVarIndex
Sink: classObjGET_fixedValueVarExprIndex
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
	$array[$var1] = $_GET['UNSAFE'];

//sink
	class Input2{
		public function getInput() {
			return '1';
		}
	}
	$temp2 = new Input2();
	$var2 = $temp2->getInput();
	$tainted = $array[$var2.'0'];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>