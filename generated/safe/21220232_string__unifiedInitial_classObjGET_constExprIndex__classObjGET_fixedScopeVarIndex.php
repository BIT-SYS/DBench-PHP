<?php
/*
Safe sample
DataType: string
Source: unifiedInitial_classObjGET_constExprIndex
Sink: classObjGET_fixedScopeVarIndex
*/

//source
	class Input1{
		public function getInput() {
			return '1';
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
		$temp1->getInput().'0'=>$_GET['UNSAFE']
	);

//sink
	class Input2{
		public function getInput() {
			return $_GET['Input2'];
		}
	}
	$temp2 = new Input2();
	$var2 = $temp2->getInput();
	if($var2!='10')
	{
		$tainted = $array[$var2];
	}

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>