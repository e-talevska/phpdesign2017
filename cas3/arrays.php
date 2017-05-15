<!DOCTYPE html>
<html>
<head>
	<title>Arrays</title>
</head>
	<body>

		<?php
				// 0 1 2 
			$numbers = [1, 3, 7];
			echo $numbers[2];

			for($i=0; $i < count($numbers); $i++ ){
				echo "<p>{$numbers[$i]}</p>";
			}

			$numbers[1] = 5;
			echo $numbers[1] . "<br>";

			echo "Before adding new elements <br>";
			//at the end of the array and new element

			$numbers[] = 11;
			$numbers[] = 145;
			$numbers[] = 1354;

			for($i=0; $i < count($numbers); $i++ ){
				echo "<p>{$numbers[$i]}</p>";
			}
				echo "Before array_push <br>";
				array_push($numbers, 34, 56, 86);
			
			for($i=0; $i < count($numbers); $i++ ){
				echo "<p>{$numbers[$i]}</p>";
			}

		?>

	</body>
</html>