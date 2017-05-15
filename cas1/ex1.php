<!-- PHP -->
<?php 

	$feet = 10;
	$meters = $feet * 0.3048;

	$a = 45;
	$b = 83;
	$l = $a * $b;

	$c = "hhgjygjj773";
	$d = 38;
	echo $c * $d;
	var_dump($c === true);

?>


<!DOCTYPE html>
<html>
<head>
	<title> Vezba 1 - Feet to meters </title>
</head>
	<body>

		<p> <?php echo "$feet feet converted to meters: $meters"; ?> </p>
		<p> <?php echo "Ako a = $a, i b = $b, Ploshtinata na kvadratot iznesuva: $l"; ?> </p>

	</body>
</html>