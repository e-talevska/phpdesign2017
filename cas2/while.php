<!DOCTYPE html>
<html>
	<head>
		<title>While loop</title>
		<style>
			div.box{
				width: 50px;
				height: 50px;
				float: left;
				border: 1px solid #ccc;
			}
			.clear{
				clear: both;
			}
		</style>
	</head>
	<body>

	<?php 

		// $x = rand(1,15);
		// while($x < 10){
		// 	echo "$x: Annyeong. <br>";
		// 	$x++;
		// }

		// echo 'After while.'

// \\\\\\\\\ nova zadacha

		$br = 1;
		while($br <= 20){
			echo "<div class='box'> $br </div>";
			if(($br%2)==0){
				echo "<div class='clear'> </div>";
			} 
				
			

			$br++;
		}







	 ?>

	</body>
</html>