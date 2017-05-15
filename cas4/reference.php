<?php

$a = 1;
$b = $a; //copy value
echo "\$b: ".$b."<br>";
$a = 2;
echo "\$b: ".$b."<br>";


$x = 1;
$y = &$x; //set alias
echo "\$y: ".$y."<br>";
$x = 2;
echo "\$y: ".$y."<br>";
unset($y); //delete alias
echo "\$x: ".$x."<br>";

echo "<br>";
echo "<br>";
echo "================================================";
echo "<br>";
echo "<br>";

function inc1($x) {
	return $x+1;
}
$a = 2;
$a = inc1($a);
echo "\$a: ".$a."<br>";
//ekvivalentni
function inc(&$x){
	$x++;
}

$a = 2;
inc($a);
echo "\$a: ".$a."<br>";

echo "<br>";
echo "<br>";
echo "================================================";
echo "<br>";
echo "<br>";

function beautify(&$s) { //jOHn DOe
					//john doe
	$s = trim( ucwords( strtolower($s) ) );
}		

$fullName = "  jOHn DOe  ";
beautify($fullName);

echo $fullName;
?>