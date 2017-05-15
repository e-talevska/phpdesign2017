<!DOCTYPE html>
<html>
	<head>
		<title> Vezba </title>
		<style type="text/css">
			th, td {
    		border: 0.5px solid black;
    		padding: 2px 5px;
			}
			
		</style>
	</head>
	<body>

	<?php 
	//Indeksna niza, so vgnezdeena druga niza: 
		$products = [
				['TIR', 'Tires', 100],
				['OIL', 'Oil', 10],
				['SPK', 'Spark Plugs', 4]
			];
	?>

		<table>
			<tr>
				<th> Code </th>
				<th> Description </th>
				<th> Price </th>
			</tr>

			<?php 
				foreach ($products as $infoProducts) {
					//var_dump($infoProducts);
					echo "<tr>";
					foreach ($infoProducts as $value) {
						echo "<td> $value </td>";
					}
					echo "</tr>";
				}

			?>
		</table>

	</body>
</html>