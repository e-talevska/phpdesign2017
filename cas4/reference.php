<?php 

$a = 1;
$b = $a; //copy value

echo "\$b: ".$b."<br>";
$a = 2;
echo "\$b: ".$b."<br>";


//isprakjanje na promenlivi po referenca(ja prakjame konkretnata vrednost,za da se promeni) - &

$x = 1;
$y = &$x; //set alias
echo "\$y: ".$y."<br>";

$x=2;
echo "\$y: ".$y."<br>";

unset($y); //delete alias
echo "\$x: ".$x."<br>";

echo "<br>";
echo "<br>";
echo"=========================================================";
echo "<br>";
echo "<br>";

function inc1($x){
	return $x+1;
}
$a = 2;
$a = inc($a);
echo "\$a: ".$a."<br>";

// ekvivalenten e rezultatot

function inc(&$x){
	$x++;
}
$a = 2;
inc($a);
echo "\$a: ".$a."<br>";

echo "<br>";
echo "<br>";
echo"=========================================================";
echo "<br>";
echo "<br>";


function beautify(&$s){
	$s = trimp(ucwords( strtolower($s)));
}

$fullName = "  ivANa DimItrOvA  ";
beautify($fullName);

echo $fullName;
?>