<?php

$a = 1;
$b = $a; // copy value
echo "\$b: " . $b . "<br>";
$a = 2;
echo "\$b: " . $b . "<br>";


$x = 1;
$y = &$x; // set allias
echo "\$y: " . $y . "<br>";
$x = 2;
echo "\$b: " . $b . "<br>";
unset($y); //delet allias
echo "\$x: " . $x . "<br>";

echo "<br>";
echo "<br>";
echo "=====================================";
echo "<br>";

function inc1($x){
	return $x+1;
}
$a = 2;
$a = inc1($a);
echo "\$a: " . $a . "<br>";
// gornata i dolnata funkcija davaat ekvivalenten rezultat
function inc(&$x){
	$x++;
}

$a = 2;
inc($a);
echo "\$a: " . $a . "<br>";

echo "<br>";
echo "<br>";
echo "=====================================";
echo "<br>";


function beautify(&$s){ // jOhn dOe

	$s = trim(ucwords( strtolower($s) ) );
}

$fullName = "    jOhn dOe    ";

beautify($fullName);

echo $fullName;

?>