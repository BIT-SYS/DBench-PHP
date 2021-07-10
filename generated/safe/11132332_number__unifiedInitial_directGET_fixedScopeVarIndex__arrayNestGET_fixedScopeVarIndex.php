<?php
/*
Safe sample
DataType: number
Source: unifiedInitial_directGET_fixedScopeVarIndex
Sink: arrayNestGET_fixedScopeVarIndex
*/

//source
	$var1 = $_GET['var1'];
	if ($var1<11) {
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
			$var1=>$_GET['UNSAFE']
		);
	}

//sink
	$arrayTmp2 = array(
		0 => 0,
		1 => 10 ,
		2 => 20
	);
	$index2 = $_GET['Input2'];
	if ($index2>1)
	{
		$var2 = $arrayTmp2[$index2];
		$tainted = $array[$var2];
	}

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>