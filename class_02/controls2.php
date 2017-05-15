<!DOCTYPE html>
<html>
<head>
	<title>Controls</title>
</head>
<body>
<h3>
	<?php 
		$year = 1998;
		$zodiak = (($year-4)/12);
		switch ($zodiak) {
			case 0:
				echo "$year is the year of Rat";
			case 1:
				echo "$year is the year of Ox";
				break;
			case 2:
				echo "$year is the year of Tiger";
				break;
			case 3:
				echo "$year is the year of Rabbit";
				break;
			case 4:
				echo "$year is the year of Dragon";
				break;
			case 5:
				echo "$year is the year of Snake";
				break;
			case 6:
				echo "$year is the year of Horse";
				break;
			case 7:
				echo "$year is the year of Goat";
				break;
			case 8:
				echo "$year is the year of Monkey";
				break;
			case 9:
				echo "$year is the year of Rooster";
				break;
			case 10:
				echo "$year is the year of Dog";
				break;
			case 11:
				echo "$year is the year of pig";
				break;
			default:
				echo "Error";
		}
	 ?>
 </h3>

</body>
</html>