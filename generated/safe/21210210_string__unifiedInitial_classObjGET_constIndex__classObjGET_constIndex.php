<?php
/*
Safe sample
DataType: string
Source: unifiedInitial_classObjGET_constIndex
Sink: classObjGET_constIndex
*/

//source
	class Input1{
		public function getInput() {
			return '10';
		}
	}
	$temp1 = new Input1();
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
		$temp1->getInput()=>$_GET['UNSAFE']
	);

//sink
	class Input2{
		public function getInput() {
			return '11';
		}
	}
	$temp2 = new Input2();
	$tainted = $array[$temp2->getInput()];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>