<!DOCTYPE html>
<html>
<head>
	<title>While loop</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>



	<?php 

		$i = 1;
		while ($i <= 20) {
			
			echo "<div class='box'></div>";

			if($i % 2 == 0){
				echo "<div class='clear'></div>";
			}

			$i++;
		}


	?>

	

</body>
</html>