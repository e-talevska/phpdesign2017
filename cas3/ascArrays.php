<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$products = [

		0 => [0 => 'TIR', 1 => 'Tires', 2 => 100],
		1 => ['OIL','Oil',10],
		2 => ['SPK','Spark Plugs',100]

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
			var_dump($infoProducts);
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