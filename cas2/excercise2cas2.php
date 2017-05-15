<!DOCTYPE html>
<html>
<head>
	<title>Chinese Zodiac</title>
</head>
<body>

<?php 

$year = 2000;

$input = (($year - 4) % 12);

switch (($input)%12) {
			case 0:
			echo "Rat";
				break;
			case 1:
			echo "Ox";
				break;
			case 2:
			echo "Tiger";
				break;
			case 3:
			echo "Rabiit";
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
		
			break;
	}



?>



</body>
</html>