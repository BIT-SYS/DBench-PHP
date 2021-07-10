<?php
/*
Safe sample
DataType: number
Source: unifiedInitial_arrayNestGET_fixedValueVarExprIndex
Sink: classObjGET_constIndex
*/

//source
	$arrayTmp1 = array(
		0 => 0,
		1 => 10 ,
		2 => 20
	);
	$index1 = 2;
	$array = array(
		0=>'safe',
		1=>'safe',
		2=>'safe',
		3=>'safe',
		4=>'safe',
		5=>'safe',
		6=>'safe',
		7=>'safe',
		8=>'safe',
		9=>'safe',
		$arrayTmp1[$index1-1]=>$_GET['UNSAFE']
	);

//sink
	class Input2{
		public function getInput() {
			return 11;
		}
	}
	$temp2 = new Input2();
	$tainted = $array[$temp2->getInput()];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>