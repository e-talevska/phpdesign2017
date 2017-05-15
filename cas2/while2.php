<!DOCTYPE html>
<html>
	<head>
		<title>While two</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<style type="text/css">
			.tabela{
				margin: 0 auto;
				padding-left: 100px !important;
			}
		</style>
	</head>
	<body>

	<table class="table table-striped">
		<th>
			<td>fasg</td>
			<td>ehfg</td>
			<td>yrtfghg</td>
		</th>
		<tr>
			<td>rhfth</td>
			<td>fartujgysg</td>
			<td>tfhfh</td>
		</tr>
	</table>

		<table class="table tabela table-bordered">
			<tr>
				<th>Distance</th>
				<th>Cost</th>
			</tr>

			<?php 
				$distance = 50;

				while($distance <= 1550){
					$cost = $distance/10;
					echo "<tr>
							<td>$distance</td>
							<td>$cost</td>

						</tr>";

					$distance += 50;
				}

			 ?>

		 </table>

	</body>
</html>