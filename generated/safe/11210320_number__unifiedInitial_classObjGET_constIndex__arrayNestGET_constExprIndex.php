<?php
/*
Safe sample
DataType: number
Source: unifiedInitial_classObjGET_constIndex
Sink: arrayNestGET_constExprIndex
*/

//source
	class Input1{
		public function getInput() {
			return 10;
		}
	}
	$temp1 = new Input1();
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
		$temp1->getInput()=>$_GET['UNSAFE']
	);

//sink
	$arrayTmp2 = array(
		0 => 0,
		1 => 10 ,
		2 => 20
	);
	$var2 = $arrayTmp2[3-1];
	$tainted = $array[$var2];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>