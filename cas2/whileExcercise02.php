<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<table>
		<tr>
			<th>Distance: </th>
			<th>Cost: </th>
		</tr>
<!-- while loop -->
	<?php 

		$distance = 50;
		

		while ($distance <= 250) {
			
			// $cost = ($distance/10); - lokalno za da ja presmetuva sekoja nova vrednost		
				echo "<tr>
						<td>$distance</td>
						<td>".($distance/10)."</td>
					</tr>";
				
				$distance += 50;
			}
	?>
<!-- do while loop -->
	<?php 

		$distance = 1500;
		

		do {
			
			// $cost = ($distance/10);		
				echo "<tr>
						<td>$distance</td>
						<td>".($distance/10)."</td>
					</tr>";
				
				$distance += 50;
			}
		while ($distance <= 1250) {
			
		}
	?>
	</table>

</body>
</html>