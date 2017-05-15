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
		$distance = 1500;

		while($distance <= 1250) {
			$cost = $distance/10;
			// echo "<tr>
			// 		<td>$distance</td>
			// 		<td>".($distance/10)."</td>
			// 	  </tr>";

			// echo "<tr>
			// 		<td>$distance</td>
			// 		<td>$cost</td>
			// 	  </tr>";
			?>
			<tr>
				<td><?php echo $distance; ?></td>
				<td><?php echo $distance/10; ?></td>
			</tr>
			<?php
			$distance += 50;
		}
	?>
	</table>
	</body>
</html>