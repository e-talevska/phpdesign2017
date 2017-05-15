<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>

<?php 

	$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	$numbers[0] = 100;
	$numbers[] = 11;

	array_push($numbers, 12, 13, 14, 15);
	// echo $numbers[0];
	// echo sizeof($numbers);
	for ($i = 0; $i < sizeof($numbers); $i++) { 
		echo $numbers[$i] . "<br>";
	}



 ?>

</body>
</html>