<?php
/*
Unsafe sample
DataType: number
Source: inTurnAssign_classObjGET_constExprIndex
Sink: directGET_randomVarExprIndex
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
	$array[$temp1->getInput()+1] = $_GET['UNSAFE'];

//sink
	$var2 = $_GET['var2'];
	$tainted = $array[$var2+1];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>