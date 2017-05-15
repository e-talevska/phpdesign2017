<?php 

	$c = 1;
	function zbir($a, $b){
		echo ($a+$b) . "<br>";
	}
	zbir(4, 63);
	zbir(8, 23);
	zbir(4.18, 82);
	zbir($c, 5);

	function fullName($name, $lastName, $year){
		echo "Hello, my name is " . $name . " " . $lastName . ". I'm born in " . $year . " year." . "<br>"; 
	}
	fullName("Martina", "Linkova", 1993);
	fullName("John", "Doe", 1991);

	
	function colorFun($color){
		echo "The color of the room is $color <br>";
	}
	colorFun("blue");


	function paint($color = "red"){
			echo "The color of the room is $color <br>";
		}
		paint();

	//The order of the arguments matters!! Zatoa argumentite koi imaat defaultni vrednosti se stavaat na kraj
	function pecati($text, $tag = "p"){
		if ($tag == 'p'){
			echo "<p>$text</p>";
		} else if ($tag == 'h2'){
			echo "<h2>$text</h2>";
		} else {
			echo $text . "<br>";
		}
	}
	// ili echo "<$tag>$text</$tag>";

	//Pechati vo paragraf
	pecati('Nekoj text');
	pecati('Hello, world');
	pecati('Hello in h2', 'h2');

	function vezba($firstName, $lastName, $flag = 0){
		$result = '';
		if ($flag == 0){
			$result = $firstName . " " . $lastName;
		} else {
			$result = $lastName . " " . $firstName;
		} 
		return $result;
	}

	$firstName = "John";
	$lastName = "Doe";
	
	$fullName = vezba($firstName, $lastName);
	echo "<h3>$fullName</h3>";

	function plostina($a, $b){
		return $a * $b;
	}
	$P = plostina(4, 7);
	echo plostina(8, 5); echo "<br>";
	echo plostina($P, $P); echo "<br>";
	echo plostina( plostina(1,2), plostina(3,4));

	echo "<hr>";

	//Celsius to Far
	function celToFar($c){
		// Samo vaka moze da imam pristap do globalna promenliva
		global $P;
		echo $P;
		return $c * 1.8 + 32;
	}
	
	
	function farToCel($f){
		return (5/9) * ($f-32);
	}
	$F = celToFar(35);
	$c = farToCel($F);
	echo "<p>Stepeni: " . farToCel($F) . "</p>";


?>