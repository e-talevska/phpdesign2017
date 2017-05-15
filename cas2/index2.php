<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Distance</th>
		<th>Cost</th>
	</tr>
	<?php 

		$distance = 50;

		while($distance <= 250){
			$cost = $distance/10;
			// echo "<tr>
			// 		<td>$distance</td>
			// 		<td>".($distance/10)."</td>
			// 	</tr>"

				echo "<tr>
					<td>$distance</td>
					<td>$cost</td> 
				</tr>" //vo dvojni navodnici prepoznava varijabli;
			$distance +=50;
		}


	 ?>
 </table>
</body>
</html>