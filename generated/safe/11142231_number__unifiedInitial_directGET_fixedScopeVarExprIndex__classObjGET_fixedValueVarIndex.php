<?php
/*
Safe sample
DataType: number
Source: unifiedInitial_directGET_fixedScopeVarExprIndex
Sink: classObjGET_fixedValueVarIndex
*/

//source
	$var1 = $_GET['var1'];
	if ($var1<10) {
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
	}

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