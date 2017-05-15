<?php 

$c = 1;
function zbir($a, $b){
	
	echo ($a + $b) . "<br>";
} 
zbir(3, 9);
zbir(4, 1);
zbir($c, 3);

function info($name, $lname, $year){
	echo "Hi, my name is $name $lname and I am born in $year.";
}

info("Stef", "Naskova", 1992);

echo "<br>---------------------------------  <br>";

function pecati($text, $tag){

	echo "<$tag>$text</$tag>";
	// if($tag == 'p'){
	// 	echo "<p>$text</p>";
	// } else if($tag == 'h2'){
	// 	echo "<h2>$text</h2>";
	// } else{
	// 	echo $text . "<br>";
	// }
}

pecati("denes jadev doner", 'h2');
pecati("denes e losh den", 'p');
// pecati("zdravo lugenca");


echo "---------------------------------  <br>";

function funk($name, $lname, $flag=0){
	$result = '';
	if($flag===0){
		$result = $name . ' ' . $lname;
	} else {
		$result = $lname . ' ' . $name;
		
	}
	return $result;
}

$name = 'Stef';
$lname = 'Naskova';

$fullName = funk($name, $lname);
echo "<h3>$fullName</h3>";


// nova 
echo "---------------------------------  <br>";

function plostina($a, $b){
	return $a*$b;
}

$P = plostina(4, 5);
echo plostina($P, $P);
echo "<br>";
echo plostina(plostina(1, 2), plostina(3, 4));

echo "<br>";
echo "---------------------------------  <br>";


function cToFar($c){
	return $c*1.8+32;
}

function farToCel($f){
	return (5/9) * ($f-32);
}

$f = cToFar(12);
$c= farToCel(123);

echo "<p>Stepeni: $c </p>"



?>