<?php date_default_timezone_set('Europe/Skopje'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Control Structures</title>
</head>
<body>

<?php echo date('Y-m-d H:i:s');?>
<?php if(date('H') >= 17) {
	echo "<h3>Good Evening</h3>";
	} else if(date('H') <=10 && date('H') >= 06){
		echo "<h3>Good Morning</h3>";

	} else {
		echo "<h3>Good Afternoon</h3>";
	}


?>
</body>
</html>