<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
<?php 


	$numbers = [1, 3, 5, 7];

	for($i=0; $i < count($numbers); $i++){
		echo "<p>{$numbers[$i]}</p>";
	}


	$numbers[1] = 79;
	echo $numbers[1];

	//dodavanje na nov element

	$numbers[4] = 55;


	for($i=0; $i < count($numbers); $i++){
		echo "<p>{$numbers[$i]}</p>";
	}


	// Push na niza

	array_push($numbers, 33, 35, 38);

	for($i=0; $i < count($numbers); $i++){
		echo "<p>{$numbers[$i]}</p>";
	}
 ?>
</body>
</html>