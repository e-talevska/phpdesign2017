<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
<body>

	<?php 
		$numbers = [1,3,7];
		echo $numbers[2];

		for ($i=0; $i < count($numbers) ; $i++) { 
			echo "<p>{$numbers[$i]}</p>";
		}

			
		$numbers[] =11; // na krajot na nizata dodaj nov element

		for ($i=0; $i < count($numbers) ; $i++) { 
			echo "<p>{$numbers[$i]}</p>";
		}

		array_push($numbers, 34,56,87);

		for ($i=0; $i < count($numbers) ; $i++) { 
			echo "<p>{$numbers[$i]}</p>";
		}

	 ?>

</body>
</html>