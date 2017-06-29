<?php 
//aritmeticki operatori
	$feet = 346570;
	$meters = $feet * 0.3048; 


	$a = 300;
	$b = 1570;
	$rectangleArea = $a * $b;

//operaori za sporedba == === < > 
	$a = "24dfsg";
	$b = 7;
	echo $a * $b;

	var_dump($a == true);

//logicki operatori ! - Logical NOT; || - Logical OR; && - Logical AND;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Feet to meters</title>
</head>
<body>

	<h3><?php echo "$feet feet converted to meters: $meters"; ?></h3>
	<h3><?php echo "The area of the rectangle is: $rectangleArea" . " cm2" ; ?></h3>

</body>
</html>