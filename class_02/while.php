<!DOCTYPE html>
<html>
<head>
	<title>While loop</title>

	<style>
		div.box{
	float: left;
	width: 50px;
	height: 50px;
	border-radius: 1px solid #ccc;
}

.clear{
	clear: both;
}
	</style>
</head>
<body>

<!-- <?php 
	$x = rand(1,15);
	while ($x <= 10) {
		echo "$x Hello<br/>";
		$x++;
	}

	echo "After while";
 ?>

<?php 
 	$n = 1;
 	while (i <= 20) {
 		if($i%2 == 0){
 			echo "$i<br>";
 		}
 		else(echo $i);
 	}
  ?>

<?php 
	$i = 1;
	while ($i <= 20) {
		echo "<div class='box'></div>";
		if ($i) {
		}
		$i++;

	}
 ?> -->
<table>
	<tr>
		<th>Distance</th>
		<th>Cost</th>
	</tr>


 <?php 
 	$distance = 50;
 	while($distance <= 1250){
 		echo "<tr>
 				<td>$distance</td>
 				<td>".($distance/10)."</td>
 			</tr>";
 		$distance += 50;
 	}
  ?>
</table>
</body>
</html>