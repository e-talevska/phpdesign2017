<?php 
$c = 1;
function zbir($a, $b){
	//$a = 2;
	//$b = 4;
	echo ($a + $b) . "<br>";
}

zbir(34, 2);
zbir(3425, 2);
zbir(345, 25);
zbir(34.35, 2);
zbir(3485, 266);
zbir($c, 266);

?>

<!-- <?php 
//$name = "Boban";
//$lastName = "Serafimovski";
//$year = 1973;

//function description($a, $b, $c){
	//$a = 2;
	//$b = 4;
//	echo "Hello! My name is" . $a . $b . "I am born in" . $c"<br>";
// }

//description($name, $lastName, $year);


?> -->
<?php 
function description($name, $lname, $year){
	echo "Hello! My name is " . $name . $lname . " I am born in " . $year . "<br>";
}

description("Boban", "Serafimovski", 1973);


?>


<?php
function pecati($text, $tag = 'p'){
	if($tag == 'p'){
		echo "<p>$text</p>";
	} elseif ($tag == 'h2') {
		echo "<h2>$text</h2>";
	} else {
		echo $text . "<br>";
	}
}
//Pecati vo paragraph
pecati('Nekoj tekst');
pecati('Hello world');
pecati('Hello class', 'h2');
echo("<br>");
?>

<?php 
// function info($firstName, $lastName, $flag = 0){
//	if($flag === 0) {
//		echo $firstName . " " . $lastName;
//	} else{
//		echo $lastName . " " . $firstName;
//	}
//}

//$firstName = "John";
//$lastName = "Doe";

//info($firstName, $lastName);


?>
<?php 
//function info($firstName, $lastName, $flag = 0){
//	$result = '';
//	if($flag === 0) {
//		$result = $firstName . " " . $lastName;
//	} else {
//		$result =  $lastName . " " . $firstName;
//	}
//
//	return $result;
//}

//$firstName = "John";
//$lastName = "Doe";

//$fullName = info($firstName, $lastName); //"John Doe"
//echo "<h3>$fullName</h3>";
//var_dump($fullName)

?>

<?php 
//function plostina($a, $b){
//	return $a*$b;
//}

//$P = plostina(4,5);
//echo plostina($P, $P);
//echo "<br>";
//echo plostina( plostina(1,2), plostina(3,4));

?>

<!-- od celsius to farenheight -->
<?php 
function celToFar($c){
	return $c*1.8+32;
}
function farToCel($f){
	return (5/9) * ($f-32);
}
$F = celToFar(100);
$c = farToCel($F);

echo "<p>Stepeni: " . farToCel($F) ."</p>";

?>
