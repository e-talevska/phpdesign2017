<?php 
$a = 1;
$b = $a; // copy value

echo "\$b: " . $b ."<br>"; // da ne pechati nesho se stava \ pred varijablata

$a = 2;
echo "\$b: " . $b ."<br>";  

$x = 1;
$y = &$x; // set alias, se dava ushte edno ime, so dve iminja se imenuva edna varijabla
echo "\$y: " . $y ."<br>";  
$x = 2;
echo "\$y: " . $y ."<br>"; 
unset($y);
echo "\$x: " . $x ."<br>";  

echo "<br>";
echo "---------------------------------  <br>";

function inc1($x){
	return $x+1;
}

$a = 2;
$a = inc1($a);
echo "\$a: " . $a ."<br>";

// ovie dve funkcii davaat ist rezultat ^^

function inc(&$x){
	$x++;
}
$a = 2;
inc($a);
echo "\$a: " . $a ."<br>";  


echo "<br>";
echo "---------------------------------  <br>";

function beautify(&$s){
	$s = ucwords(strtolower($s));
}

$fullname = 'stEFI nAskOVa';
beautify($fullname);
echo $fullname;



 ?>