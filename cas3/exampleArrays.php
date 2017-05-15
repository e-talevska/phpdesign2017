<?php 

	$products = [
		['TIR','Tires',100],
		['Oil','Oil',10],
		['SPK','Spark Plugs',4]
	];

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
		<tr>
			<th>Code</th>
			<th>Description</th>
			<th>Price</th>
		</tr>

		<?php 
			foreach ($products as $infoProducts) {
				
				echo "<tr>";

				// var_dump($infoProducts);exit; - za proverka(exit,samo za prvata iteracija)
				foreach ($infoProducts as $value) {
					echo"<td>$value</td>";
				}

				echo "</tr>";
			}

			
		?>
	</table>

</body>
</html>