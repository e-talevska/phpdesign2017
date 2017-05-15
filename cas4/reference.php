<?php

	$a = 1;
	$b = $a; // copy value
	echo "\$b: " . $b . "<br />";
	$a = 2;
	echo "\$b: " . $b . "<br />";

	$x = 1;
	$y = &$x; // set alias
	echo "\$y: " . $y . "<br />";
	$x = 2;
	echo "\$y: " . $y . "<br />";
	unset($y); // delete alias
	echo "\$x: " . $x . "<br />";

	echo "<hr />";

	function inc1($x){
		return $x+1;
	}
	$a = 2;
	$a = inc1($a);
	echo "\$a: " . $a . "<br />";
	// ekvivalentni
	function inc(&$x){
		$x++;
	}
	$a = 2;
	inc($a);
	echo "\$a: " . $a . "<br />";

	echo "<hr />";
 ?>


<?php 

	function beautify(&$s){
		$s = trim(ucwords(strtolower($s)));
	}

	$fullName = "JoHn DOE";
	beautify($fullName);
	echo $fullName;

?>