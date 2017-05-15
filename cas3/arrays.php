<!DOCTYPE html>
<html>
	<head>
		<title> Arrays </title>
	</head>
	<body>

		<?php
		// Indexed Arrays:
		             // 0   1   2   3
			$numbers = [34, 65, 90, 83]; //So indeksi: 0,1,2,3
			echo $numbers[2];

			for($i=0; $i < count($numbers); $i++){
				echo "<p> $numbers[$i] </p>"; //dokolku ne moze da se pechati se stava vo "<p>{$numbers[$i]}</p>"
			}

			$numbers[1] = 233;
			echo $numbers[1] . "<br>" ;

			$numbers[] = 11; //Ova dodava na kraj na nizata
			for($i=0; $i<count($numbers); $i++){
				echo "<p> $numbers[$i] </p>";
			}

			echo "Before array push <br> ";
			array_push($numbers, 38, 844, 713); //So push moze da dodademe poveke elementi oddednash, za razlika od $numbers[1] = 233;
			for($i=0; $i<count($numbers); $i++){
				echo "<p> $numbers[$i] </p>";
			}





		?>

	</body>
</html>