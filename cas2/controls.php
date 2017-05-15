<?php date_default_timezone_set('Europe/Skopje'); ?> 

<!DOCTYPE html>
<html>
	<head>
		<title> Chas 2, PHP - Control Structures </title>
	</head>
	<body>

	<?php  echo date('Y-m-d H:i:s'); ?>

	<?php if(date('H') >= 17 ){
			echo "<h3> Good evening </h3>";
		}

		else if(date('H') <= 10 && date('H')) >= 06{
			echo "<h3> Good morning </h3>";
		}

		else {
			echo "<h3> Good afternoon </h3>";
		}
	?>

	</body>
</html>

