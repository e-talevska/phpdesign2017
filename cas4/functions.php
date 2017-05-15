<?php

$c = 1;
	function zbir($a,$b){

		echo ($a + $b) . "<br>";

	};

zbir(14,22);
zbir(68959,796);
zbir($c,6);
?>

<?php

//definiranje na funkcija
	function myInfo($name,$lastName,$year){
		echo "Hello,my name is ".$name." ".$lastName." I am born in ".$year."<br>";
	}
myInfo("Ivana","Dimitrova",1993);

//dodavanje de fault-na vrednost na agrumentite
	function paint($room = "bedroom",$color = "red"){
		echo "The color of the $room is $color <br>";
	}

	paint();
	paint(null);

	//redosledot na argumentite e vazen,argumentite so deFault-ni vrednosti se posledni 
	//ako nema nova vrednost,ja povtoruvame istata,no ne go ostavame prazno
	paint("bedroom","green");
?>

<?php 

	function pecati($text, $tag = 'p'){
		
		if($tag == 'p'){

			echo "<p>$text</p>";

		} else if($tag == 'h2'){

			echo "<h2>$text</h2>";
		}else{
			echo $text . "<br>";
		}

		//OR echo "<$tag>$text</$tag>;"
	}

//peacti vo paragraph, isto ke bide - print('This is something','p');
	pecati('This is something');
	pecati('Hello World');
	pecati('Hello Everybody', 'h2');


?>

<?php
	function myFunction($firstName, $lastName, $flag = 0){
		
		$result = '';

		if ($flag === 0) {
			$result = $firstName." ".$lastName."<br>";
		}
		else{
			$result = $lastName." ".$firstName."<br>";
		}

		return $result;

	}

	// myFunction("Ivana","Dimitrova",1);
	// myFunction("Ivana","Dimitrova",0);

			// or
	$firstName = "Ivana";
	$lastName = "Dimitrova";

$fullName = myFunction($firstName,$lastName);
echo "<h3>$fullName</h3>";

function plostina($a,$b){
	return $a*$b;
}

$P = plostina(4,5); echo "<br>";
echo plostina($P,$P); echo "<br>";
echo plostina(plostina(1,4),plostina(5,2)); echo "<br>";



function celToFar($c){
//za da koristime globalna promenliva
	global $P;
	echo $P;

	return ($c * 1.8)+32;
}

function farToCel($f){
	return (5/9) * ($f -32);
}

$f = celToFar(100);
$c = farToCel($f);

echo "<p>Stepeni: $c</p>";
echo "<p>Stepeni:".celToFar($c)."</p>";



?>
