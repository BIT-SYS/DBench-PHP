<?php
/*
Safe sample
DataType: number
Source: unifiedInitial_directGET_fixedValueVarExprIndex
Sink: classObjGET_constIndex
*/

//source
	$var1 = 9;
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
		$var1+1=>$_GET['UNSAFE']
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