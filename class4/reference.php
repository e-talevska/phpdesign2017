<?php 

	$a = 1;
	$b = $a;

	echo "\$b = " . $b . "<br>";


	$a = 2;
	echo "\$b = " . $b . "<br>";

	$x = 1;
	$y = $x;
	echo "\$y = " . $y . "<br>";

	$x = 5;
	$y = &$x;
	echo "\$y = " . $y . "<br>";

	function inc1($x)
	{
		return $x+1;
	}

	$a = 2;
	$a = inc1($a);
	echo "\$a" . $a . "<br>";

	function inc(&$x)
	{
		return $x+1;
	}

	$a = 2;
	$a = inc($a);
	echo "\$a" . $a . "<br>";

	function beautify(&$s)
	{
		$s = ucwords(strtolower($s));
	}

	$fullName = "elEnA ApOsToLoSkA";
	beautify($fullName);

	echo $fullName;

 ?>