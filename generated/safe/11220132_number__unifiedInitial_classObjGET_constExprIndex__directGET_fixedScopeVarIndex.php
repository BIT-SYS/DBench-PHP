<?php
/*
Safe sample
DataType: number
Source: unifiedInitial_classObjGET_constExprIndex
Sink: directGET_fixedScopeVarIndex
*/

//source
	class Input1{
		public function getInput() {
			return 9;
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
		$temp1->getInput()+1=>$_GET['UNSAFE']
	);

//sink
	$var2 = $_GET['var2'];
	if($var2>10)
	{
		$tainted = $array[$var2];
	}

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>