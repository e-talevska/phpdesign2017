<!DOCTYPE HTML>
<html>
	<head>
		<title>While Loop 2</title>
		<style>
			.td{
				border: 1px solid #ccc;
				height: 30px;
				text-align: center;
			}
			.th{
				border: 1px solid #000;
				height: 30px;
				text-align: center;
			}
			table{
				border: 1px solid #ccc;
			}
		</style>
	</head>
	<body>
		<table>
			<tr>
				<th class="th">Distance</th>
				<th class="th">Cost</th>
			</tr>
			<?php
				$distance = 50;

				while($distance <= 250) {
					$cost = $distance / 10;
					echo "<tr>
							<td class='td'>$distance</td>
							<td class='td'>$cost</td>
						</tr>";
					$distance += 50;
				}
			 ?>
		</table>

	</body>
</html>