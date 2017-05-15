<?php 

	// za pecatenje
	echo "Hello world";


/* povik do funkcija
	phpinfo(); */

	//definiranje na promenlivi
	$firstName = "Ivana";
	$year = 2017;
	$birthYear = 1993;
	$floatVariable = 2.123;
	$booleanVariable = true;
	$flag = false;
	
	$year = "2025";

	

	// definiranje na konstanta - name, value
	define('PI', 3.14);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- konkatanacija pravime so tocka -->
	<h2><?php echo "My name is" . $firstName; ?></h2>
	<h3><?php echo "My birth year is $birthYear $flag" . " " . "The value of the float variable is: $floatVariable"; ?> </h3>
	<h3><?php echo $booleanVariable; ?></h3>

	<p><?php echo "PI has value: " . PI; ?></p>


</body>
</html>