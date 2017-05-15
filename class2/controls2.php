<!DOCTYPE html>
<html>
<head>
	<title>Controls 2</title>
</head>
<body>
<!-- ($year - 4) % 12 -->
<?php 

	switch (rand(1, 5)) {
		case 1:
			echo "1";
			break;
		case 2:
			echo "2";
			break;
		case 3:
			echo "3";
			break;
		case 4:
			echo "4";
			break;
		case 5:
			echo "5";
			break;
		default:
			# code...
			break;
	}

	echo "<br>";

	$year = 1994;

	switch (($year-4)%12) {
		case 0:
			echo "Rat";
			break;
		case 1:
			echo "Ox";
			break;
		case 2:
			echo "Tigar";
			break;
		case 3:
			echo "Rabit";
			break;
		case 4:
			echo "Dragon";
			break;
		case 5:
			echo "Snake";
			break;
		case 6:
			echo "Horse";
			break;
		case 7:
			echo "Goat";
			break;
		case 8:
			echo "Monkey";
			break;
		case 9:
			echo "Rooster";
			break;
		case 10:
			echo "Dog";
			break;
		case 11:
			echo "Pig";
			break;
		
		default:
			echo "Are you even born?";
			break;
	}


 ?>

</body>
</html>