<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>
	
	<?php
	
	// indexed array-index no. 0,1,2
		$numbers = [1, 3, 7, 10];
		echo $numbers[2];

		for($i=0; $i < count($numbers); $i++ ){
			echo "<p>{$numbers[$i]}</p>";
		}
		echo "Before adding new elemnts <br>";
		//promena na vrednost
		$numbers[1] = 5;
		echo $numbers[1] . "<br>";

		//za dodavanje na vrednost,za konkretno mesto go pisuvame index-ot,za kraj na nizata go ostavame prazno (go izostavuvame index-ot);
		$numbers[] = 16;
		$numbers[] = 22;
		$numbers[] = 36;

		for($i = 0; $i < count($numbers); $i++){
			echo "<p>$numbers[$i]</p>";
		}
		echo "Before array_push <br>";
		array_push($numbers, 56,84,90);

		for($i = 0; $i < count($numbers); $i++){
			echo "<p>{$numbers[$i]}</p>";
		}

	?>



</body>
</html>