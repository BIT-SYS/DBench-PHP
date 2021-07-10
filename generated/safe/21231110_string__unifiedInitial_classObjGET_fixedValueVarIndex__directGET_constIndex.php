<?php
/*
Safe sample
DataType: string
Source: unifiedInitial_classObjGET_fixedValueVarIndex
Sink: directGET_constIndex
*/

//source
	class Input1{
		public function getInput() {
			return '10';
		}
	}
	$temp1 = new Input1();
	$var1 = $temp1->getInput();
	$array = array(
		'0'=>'safe',
		'1'=>'safe',
		'2'=>'safe',
		'3'=>'safe',
		'4'=>'safe',
		'5'=>'safe',
		'6'=>'safe',
		'7'=>'safe',
		'8'=>'safe',
		'9'=>'safe',
		$var1=>$_GET['UNSAFE']
	);

//sink
	$tainted = $array['11'];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>