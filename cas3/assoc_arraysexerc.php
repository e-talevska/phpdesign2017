
<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title>Associative arrays exercise</title>
</head>
<body>


<?php

	$products = [
		['TIR', 'Tires', 100],
		['OIL', 'Oil', 10],
		['SPK', 'Spark Plugs', 4]
		];
?>
	<table>
		<tr>
			<th>Code</th>
			<th>Description</th>
			<th>Price</th>
		</tr>
		<?php 

	foreach ($products as $infoProducts) {
		// za da vidime sto ima vo niza stavame var_dump($infoProducts);
		echo "<tr>";
		foreach ($infoProducts as $value) {
			echo "<td>$value</td>";
		}
		echo "</tr>";
	}

		?>



	</table>

</body>
</html>