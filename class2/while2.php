<!DOCTYPE html>
<html>
<head>
	<title>While 2</title>
	<style>
		table, td, th{
			border: 1px solid black;
		}
		th{
			padding: 5px 10px;
			background-color: #e4e2e2;
		}
	</style>
</head>
<body>


<table>
	<tr>
		<th>Distance</th>
		<th>Cost</th>
	</tr>
<?php 

	$distance = 50;
	while ($distance <= 1250) {
		echo '<tr>
			 	<td>'.$distance.'</td>
			 	<td>'.($distance/10).'</td>
			 </tr>';
		$distance += 50;
	}


 ?>
 </table>


</body>
</html>