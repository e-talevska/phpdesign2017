<?php
$c = 1;
function zbir($a, $b){
	echo ($a + $b) . "<br>";
}

zbir(34, 2);
zbir(3232, 334);
zbir(1.68, 43);
zbir($c, 1);
// zbir();


function pecati($text,$tag = 'p') {
	// if($tag == 'p') {
	// 	echo "<p>$text</p>";
	// } else if($tag == 'h2') {
	// 	echo "<h2>$text</h2>";
	// } else {
	// 	echo $text . "<br>";
	// }

	echo "<$tag>$text</$tag>";
}

//pecati vo paragraph
pecati('Nekoj text');
pecati('Hello World');
pecati('Hello Class', 'h2');
pecati('Hello Class', 'dfd');
echo "<br>";
echo "<br>";

function info($firstName, $lastName, $flag = 0) {
	$result = '';
	if($flag === 0) {
		$result = $firstName . " " . $lastName;
	} else {
		$result = $lastName . " " . $firstName;
	}

	return $result;
}

$firstName = "John";
$lastName = "Doe";

$fullName = info($firstName, $lastName); //"John Doe"
echo "<h3>$fullName</h3>";


function plostina($a, $b) {
	return $a*$b;
}
plostina(4,5);
$P = plostina(4,5);
echo plostina($P, $P);
echo "<br>";
echo plostina( plostina(1,2), plostina(3,4));

echo "<br>";
echo "<br>";
echo "================================================";

function celToFar($c) {
	global $P; //from main program
	echo $P;
	return $c*1.8+32;
}

function farToCel($f) {
	return (5/9) * ($f-32);
}

$F = celToFar(100);
$c = farToCel($F);
echo "<p>Stepeni: " . farToCel($F) ."</p>";

?>