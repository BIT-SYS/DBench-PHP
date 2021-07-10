<?php
/*
Safe sample
DataType: number
Source: inTurnAssign_classObjGET_fixedValueVarExprIndex
Sink: classObjGET_fixedValueVarIndex
*/
	$array = array();
	$array[0]='safe';
	$array[1]='safe';
	$array[2]='safe';
	$array[3]='safe';
	$array[4]='safe';
	$array[5]='safe';
	$array[6]='safe';
	$array[7]='safe';
	$array[8]='safe';
	$array[9]='safe';

//source
	class Input1{
		public function getInput() {
			return 9;
		}
	}
	$temp1 = new Input1();
	$var1 = $temp1->getInput();
	$var1 = $var1+1；
	$array[$var1] = $_GET['UNSAFE'];

//sink
	class Input2{
		public function getInput() {
			return 11;
		}
	}
	$temp2 = new Input2();
	$var2 = $temp2->getInput();
	$tainted = $array[$var2];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>