<!DOCTYPE HTML>
<html>
	<head>
		<title>While Loop</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			$x = rand(1,15);
			while ($x < 10) {
				echo "Hello <br />";
				$x++;
			}
			echo "<hr /> After while <br />";

			$num = 1;
			while ($num < 21) {
				echo "$num";
				if($num %2 == 0){
					echo "<br />";
				} else {
					echo " ";
				}
				$num++;
			}

			$num = 1;
			while ($num < 21) {
				if($num %2 == 0){
					echo "<div class='klasa'>$num</div>";
				} else {
					echo "<div class='clear'>$num</div>";
				}
				$num++;
			}
		 ?>
	</body>
</html>