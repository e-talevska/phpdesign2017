<!DOCTYPE html>
<html>
	<head>
		<title> While Loop </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<?php 
			$x = rand(1,15);
			while ($x < 10){
				echo "Hello<br>" ;
				$x++;
			}

			echo "After while";
		?>

		<h3>
			<?php 
				$y = 1;
				while ($y <= 20) {				
				  	echo "<div class='box'> </div>";
				  	if ($y%2 == 0) {
				  		echo "<div class='clear'> </div>";
				  	}
				  	$y++;
				}
			?>
		</h3>

	</body>
</html>