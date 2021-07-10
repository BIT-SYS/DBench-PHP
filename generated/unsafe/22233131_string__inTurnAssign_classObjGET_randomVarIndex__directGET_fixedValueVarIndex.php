<?php
/*
Unsafe sample
DataType: string
Source: inTurnAssign_classObjGET_randomVarIndex
Sink: directGET_fixedValueVarIndex
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
			return $_GET['Input1'];
		}
	}
	$temp1 = new Input1();
	$var1 = $temp1->getInput();
	$array[$var1] = $_GET['UNSAFE'];

//sink
	$var2 = '10';
	$tainted = $array[$var2];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>