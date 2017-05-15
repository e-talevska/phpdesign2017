<!DOCTYPE html>
<html>
<head>
	<title>controls2</title>
</head>
<body>
<h3>
<?php 
	switch (rand(1,5)) {
			case 1:
			echo "You didn't pass the test";
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
		
		default:
		
			break;
	}
?>
</h3>
</body>
</html>