<?php
/*
Safe sample
DataType: number
Source: unifiedInitial_directGET_constExprIndex
Sink: directGET_fixedScopeVarExprIndex
*/

//source
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
		10=>$_GET['UNSAFE']
	);

//sink
	$var2 = $_GET['var2'];
	if($var2>9)
	{
		$tainted = $array[$var2+1];
	}

	$query = sprintf("$temp = '%d';", $tainted);

//flaw
	$res = eval($query);
?>