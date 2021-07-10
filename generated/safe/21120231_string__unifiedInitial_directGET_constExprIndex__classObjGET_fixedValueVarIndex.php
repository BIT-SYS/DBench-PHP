<?php
/*
Safe sample
DataType: string
Source: unifiedInitial_directGET_constExprIndex
Sink: classObjGET_fixedValueVarIndex
*/

//source
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
		'1'.'0'=>$_GET['UNSAFE']
	);

//sink
	class Input2{
		public function getInput() {
			return '11';
		}
	}
	$temp2 = new Input2();
	$var2 = $temp2->getInput();
	$tainted = $array[$var2];

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>