<?php 
	$feet = 100;
	$meter = $feet * 0.3048;

	$a = 10;
	$b = 20;
	$P = $a * $b;

	var_dump($P, $a);

?>

<!DOCTYPE HTML>
	<html>
	<head>
		<title>Feet to meters</title>
	</head>
	<body>
		<p><?php echo "$feet feet converted to meters: $meter"; ?></p>
		<p><?php echo "Area of rectangle with side 1: $a and side2: $b is = $P"; ?></p>

	</body>
</html>