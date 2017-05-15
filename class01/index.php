<?php  

	echo "Hello PHP!";
	// phpinfo();

	$firstName = "Marija";
	$year = 2017;

	$age = 22;//moze i string da bide
	$piNum = 3.141;
	$bool = true;
	$print = '<br /> That\'s my age of ' . $age . ' which is not the same as ' . $piNum;//dvojnite pecatat promenlivi, a edinecnite go pecatat ona so e bukvalno prikazano osven ako ne koristime konkatanacija so pomos na tocka.Escape na stringovi e so \pred '' (ili "");
	echo $print;
	//$float = 7E - 10;//float broj sedum na -10, e znaci eksponent
	if($bool){
		echo "<br /><h1>It is true.</h1>";
	};
	//defining constants
	define('PI', 3.14); 
	echo "Pi has value of " . PI;

	//ex 02
	$feet = 100;
	$meters = "<h3> Feet length of " . $feet . " is " . ($feet * 0.3048) . " meters." . "</h3>";
	echo $meters;

	//ex 03
	$a = 5;
	$b = 7;
	$area = "<h3>The area of the rectangle for values " . $a . " and value " . $b . " is " . ($a*$b) . "</h3>";
	echo $area;

	$x = "3bfgbgfhghf645654";
	$y = 3;
	echo $x * $y;//iako e string moze da se izvrsi operacija se dodeka ima brojka i ona so go dvoi e integerot, ja gleda prvata brojka, ako nema brojki ke bide 0;
	//0 sporedeno so false vraka true;

	//*****ZA DEBBUGIRANJE****************
	var_dump($x == true);//ako go sporedis so false, toa probuva da go pretvori vo boolean vrednost bidejki ima karakteri, boolean
	var_dump($x === true);
	//ako ne koristis operator za identicnost toj probuva da gi pretvori vo tipot na vrednosta so koja so se sporeduva

?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Class 01</title>
</head>
<body>
	<h2><?php echo $print;  ?></h2>	
</body>
</html>