<?php
/*
Safe sample
DataType: string
Source: unifiedInitial_classObjGET_fixedValueVarExprIndex
Sink: classObjGET_constExprIndex
*/

//source
	class Input1{
		public function getInput() {
			return '1';
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
		$var1.'0'=>$_GET['UNSAFE']
	);

//sink
	class Input2{
		public function getInput() {
			return '1';
		}
	}
	$temp2 = new Input2();
	$tainted = $array[$temp2->getInput().'1'];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>