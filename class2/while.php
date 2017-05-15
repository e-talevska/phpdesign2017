<!DOCTYPE html>
<html>
<head>
	<title>loops</title>
	<style>
		div{
			float: left;
			width: 50px;
			height: 50px;
			border: 1px solid black;
			background-color: red;
		}

		.clear{
			clear: both;
			background-color: blue;
		}
	</style>
</head>
<body>

<?php 
	
	// $i = rand(1, 15);
	// while ($i < 10) {
	// 	echo "Hellooo <br>";
	// 	$i++;
	// }

	// $x = 1;
	// while ($x <= 20) {
	// 	if (($x%2 == 0)) {
	// 		echo '<div class="odd">' . $x . '</div>';
	// 		echo "<br>";
	// 	}
	// 	else{
	// 		echo $x;
	// 		echo " ";
	// 	}
	// 	$x++;
	// }

	$e = 1;
	while ($e <= 20) {
		echo '<div class="box"></div>';
		if ($e%2 == 0) {
			echo '<div class="clear"></div>';
		}
		$e++;
	}

 ?>

</body>
</html>