<!DOCTYPE html>
<html>
	<head>
		<title> Chas 2, Controls </title>
	</head>
	<body>

		<h3>
			<?php
				switch(rand(1,5)){
					case 1:
						echo "You didn't pass the exam";
						break;
					case 2:
						echo "You can do a lot better";
						break;
					case 3:
						echo "You can do better";
						break;
					case 4:
						echo "Good";
						break;
					case 5:
						echo "Excellent";
						break;
				}

			?>
		</h3>

		<h4>
			<?php
				$year = 1993;
				switch(($year-4) % 12){
					case 0:
						echo "$year is the year of the Rat";
						break;
					case 1:
						echo "$year is the year of the Ox";
						break;
					case 2:
						echo "$year is the year of the Tiger";
						break;
					case 3:
						echo "$year is the year of the Rabbit";
						break;
					case 4:
						echo "$year is the year of the Dragon";
						break;
					case 5:
						echo "$year is the year of the Snake";
						break;
					case 6:
						echo "$year is the year of the Horse";
						break;
					case 7:
						echo "$year is the year of the Goat";
						break;
					case 8:
						echo "$year is the year of the Monkey";
						break;
					case 9:
						echo "$year is the year of the Rooster";
						break;
					case 10:
						echo "$year is the year of the Dog";
						break;
					case 11:
						echo "$year is the year of the Pig";
						break;
			}
			?>
		</h4>

	</body>
</html>