<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		asdasd {
 		   background-color: green;
 		   display: block
		}
		p{
			text-transform: capitalize;
		}
	</style>
</head>
<body>


<?php 

	function hello($name, $lName, $year)
	{
		echo "Hello, my name is " . $name . " " . $lName . ". I am born in " . $year;
	}

	hello("Elena", "Apostoloska", 1994);

	function color($color)
	{
		echo "<div style='background-color: " . $color . "; width: 100px; height:100px'>gey</div>";
	}

	color("red");
	color("green");
	color("blue");

	function printText($text, $tag = 'p')
	{
		echo "<$tag>" . $text . "</$tag>";
	}

	printText("This is written in H1 tag", "h1");
	printText("This is written in H3 tag", "h3");
	printText("The default tag is a paragraph tag");
	printText("This is written in italic tag", "i");
	printText("The default tag is a paragraph tag");
	printText("The default tag is a paragraph tag", "asdasd");

	function flag($name, $lName, $flag = '0')
	{
		if ($flag == 0) {
			echo "$name $lName $flag <br>";
		}else if ($flag == 1) {
			echo "$lName $name $flag <br>";
		}else{
			echo "Error";
		}
	}

	flag("Elena", "Apostoloska", 0);
	flag("Elena", "Apostoloska", 1);

	echo "<br><br><br>";

	function sum($a, $b)
	{
		$sumOf = $a + $b;
		return $sumOf;
	}

	function area($width, $height)
	{
		$result = $width * $height;
		return $result;
	}

	$p = area(5, 2);
	echo area(5, 2)."<br>";
	echo area(sum(1, 8), 2);
	var_dump($p);


	function toCelsius($fahrenheit)
	{
		echo $fahrenheit . " fahrenheit is " . ($fahrenheit-32)/1.8 . " celsius";
	}

	function toFahrenheit($celsius)
	{
		echo $celsius . " celsius is " . ($celsius*(9/5)+32) . " fahrenheit";
	}

	toCelsius(100);
	echo "<br>";
	toFahrenheit(1);
 ?>

 <p>ljakshdaskljhd</p>

</body>
</html>