<?php 

$a = 1;
$b = $a;//copy value
echo "\$b: ".$b."<hr/>";
$a = 2;
echo "\$b: ".$b."<hr/>";


$x = 1;
$y = &$x;//set allias
echo "\$y: ".$y."<hr/>";
$x = 2;
echo "\$y: ".$y."<hr/>";
unset($y);//delete alias
echo "\$x: ".$x."<hr/>";


function inc1($x){
	return $x+1;
}
$a = 2;
$a = inc1($a);
echo "\$a: ".$a."<hr/>";



function inc(&$x){
	$x++;
}

$a = 2;
inc($a);
echo "\$a: ".$a."<hr/>";



function beautify(&$s){
	$s = trim(ucwords(strtolower($s)));

}

$fullName = "  jOHn jameS ";
beautify($fullName);
echo $fullName;
var_dump($fullName);

 ?>