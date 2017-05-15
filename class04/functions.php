<?php

	$c = 9;

	function zbir($a, $b){
		echo ($a + $b) . "<br />";
	}


	zbir(11, 6);
	zbir(rand(1,5), rand(5, 70));
	//moze i promenliva da se puste kako argument
	zbir($c, 15);

	function example($name, $lastN, $age){
		echo "My name is $name and my surname is $lastN, my age is $age<br />";
	}

	example("Marija", "Shakleva", 22);

	//*****************************
	//default value of argument, za da ja ima defaultna vrednost mora da ne stavame argument pri povikuvanje, redot na argumenti e biten
	function paint($color = "red", $color02 = "brown"){
		echo "The color is $color and the room is $color02.<br/> ";
	}

	paint();
	paint("not the default one, now it's blue");
	paint("not the default one, now it's pink", "in a different color");

	function pecati($text, $tag = 'p'){
		if($tag == 'p'){
			echo "<p>$text</p>";
		}else if($tag == 'h4'){
			echo "<h4>$text</h4>";
		}else{
			echo $text . "<br />";
		}

		//or echo "<$tag>$text</$tag>";
	}

	pecati("lalalala", "h4");
	pecati("lalalala", "p");
	pecati("default");

	function example02($firstN, $lastN, $flag = 0){
		$result = "";
		if($flag == 0){
			//echo "My last name is $lastN and my name is $firstN<br />";
			$result = $firstN . $lastN;
		}
		else{
			//echo "My name is $firstN and my last name is $lastN.<br />";
			$result = $lastN . $firstN;
		}

		return $result;
	}

	$firstN = "Marija ";
	$lastN = "Shakleva";

	//example02("Marija ", "Shakleva ");
	//example02("Marija ", "Shakleva ", 1);
	$fullName  = example02($firstN, $lastN);
	echo $fullName;

	function plostina($a, $b){
		return $a * $b;
	}

	$P = plostina(342, 7655);
	echo "<br />" . plostina($P, $P);
	echo "<br />" . plostina(plostina(3, 6), plostina(6, 35));

	//bi trebalo  funkcijata da vraka neso za da moze da ja povikame kako argument vo druga.


	//ex03 Celsius to Fahrenheit and reverse

	function convert02($f){
		global $P;
		echo "<br/>Global variable with word global $P.<br />";
		return (5/9) * ($f-32);
	}

	function convert($cel){
		return $cel * 1.8 + 32;
	}

	$col = convert(15);
	echo "<br /> Fahrenheit of 15 Celsius is " . $col;

	$col02 = convert02($col);
	echo "<br />  Celsius of $col is " . $col02;


	// za da koristes globalna promenliva vo funkcija mora so zborceto global da ja pises vo funkcijata


	echo "<h3><br />***************************************************************************</h3>";
	echo "<br />Passing a reference";
	//*************************
	//passing reference

	//copy value
	$a = 1;
	$b = $a;
	echo "<br />\$b: " . $b . "<br />";
	$a = 2;
	echo "<br />\$b: " . $b . "<br />";

	//set an alias, na edna ista memorija da ima dve iminja
	$x = 1;
	$y = &$x;
	echo "<br />\$y: " . $y . "<br />";
	$x = 2;
	echo "<br />\$y: " . $y . "<br />";
	unset($y); //delete alias
	echo "<br />\$x: " . $x . "<br />";

	// so unset na $y ne se brise x, si ostanuva.


	//bez ampersand ne pravis niso, vrednosta na $ab ostanuva 3, a so prakanje referenca vrednosta se zgolemuva za 1.
	function inc(&$x){
		$x++;
	}
	//ekvivalenten rezultat od dvete funkcii
	function incr($x){
		return $x+1;
	}

	$ab = 3;
	inc($ab);
	echo "<br />\$ab: " . $ab . "<br />";
	incr($ab);
	echo "<br />\$ab: " . $ab . "<br />";

	//ova uspeva bidejki e pratena so referenca
	function beautify(&$s){
		$s = trim ( ucwords (strtolower($s) ) );
	}

	$fullNam = "   maRiJa          shaKleVa   ";
	beautify($fullNam);
	echo $fullNam;

	//cistenje na space so trim

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Functions 10.05.2017</title>
 </head>
 <body>
 
 </body>
 </html>