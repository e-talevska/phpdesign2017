<?php
	$c = 1;
	function zbir($a, $b){
		echo ($a + $b) . '<br />';
	}

	zbir(2, 4);
	zbir(34, 43);
	zbir(34.7, 45.2);
	zbir($c, 1);
	// zbir();

	function bio($name, $lastName, $year){
		echo "Hello! My name is: $name $lastName. I am born in $year.";
	}

	bio('Martin', 'Gavrilovski', 1992);

	function pecati($text, $tag = 'p'){
		// if($tag == 'p'){
		// 	echo "<p>$text</p>";
		// } else if($tag == 'h2'){
		// 	echo "<h2>$text</h2>";
		// } else{
		// 	echo $text . "<br />";
		// }

		echo "<$tag>$text</$tag>";
	}
	// Pecati vo paragraph
	pecati("Paragraph");
	// Pecati vo h2
	pecati("Header", 'h2');
	// Pecati bez tag
	pecati('Bez tag', 'span');

	echo "<hr />";
 ?>

<?php

	$name = "John";
	$lastName = "Doe";

	function newBio($name, $lastName, $flag = 0){
		$result = '';
		if($flag == 0){
			$result = "$name $lastName.";
		} else{
			$result = "$lastName $name.";
		}

		return $result;
	}

	newBio($name, $lastName);
	echo "<br />";
	newBio($name, $lastName, 1);

	$fullName = newBio($name, $lastName);
	echo "<h3>$fullName</h3>";
 ?>

<?php

	function plostina($x, $y){
		return $x*$y;
	}

	$P = plostina(4,5);
	echo $P;
	echo "<br />";
	echo plostina($P, $P);
	echo "<br />";
	echo plostina(plostina($P,$P), plostina($P,$P));

	echo '<hr />';

 ?>


<?php

	function celToFahr($c){
		global $P; //From main program
		echo $P;
		$f = ($c*1.8) + 32;
		return $f;
	}

	function fahrToCel($f){
		$c = (($f-32)*5)/9;
		return $c;
	}

	echo $f = celToFahr(1000);
	echo "<br />";
	echo fahrTocel($f);

 ?>