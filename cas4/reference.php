<?php 

$a = 1;
$b = $a;

echo "\$b: ".$b."<br>";
$a = 2;
// $b = $a;
echo "\$b: ".$b."<br>";


$x = 1;
$y = &$x;
echo $y;
echo "<br />";
$x = 25;
echo $y;
echo "<br />";

unset($y); //delete alias
echo "\$x: " . $x . "<br>";



echo "====================================================";

echo "<br />";

function inc1($x){
	return $x+1;
}

$a = 2;
$a = inc1($a);
echo "\$a " .$a. "<br>";

function inc(&$x){
	$x++;
}

$a = 2;
inc($a); //samo promenliva moze da se pushti kako argument
echo "\$a " .$a. "<br>";


function beautify(&$s){


	$s = trim(ucwords(strtolower($s)));
}

$fullName =" JOhn doE ";
beautify($fullName);
echo $fullName;

 ?>