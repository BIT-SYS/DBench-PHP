<?php
/*
Unsafe sample
DataType: number
Source: inTurnAssign_classObjGET_fixedScopeVarExprIndex
Sink: arrayNestGET_fixedValueVarExprIndex
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
			return $_GET['Input1'];
		}
	}
	$temp1 = new Input1();
	$var1 = $temp1->getInput();
	if($var1<10)
	{
		$var1 = $var1+1；
	$array[$var1] = $_GET['UNSAFE'];
	}

//sink
	$arrayTmp2 = array(
		0 => 0,
		1 => 10 ,
		2 => 20
	);
	$index2 = 2;
	$var2 = $arrayTmp2[$index2-1];
	$tainted = $array[$var2];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>