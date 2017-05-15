<!DOCTYPE html>
<html>
<head>
	<title>Associative array</title>
</head>
<body>
	<table>
		<tr>
			<th>Description:</th>
			<th>Value:</th>
		</tr>

		<?php 
			foreach($info as $key => $value){
				echo "<tr>";
				echo "<td>$key:</td><td>$value</td>";
				echo "</tr>";
			}
		?>
	</table>
	
	<?php

		
		$info['subjects'] = [
			'UI/UX' => 10,
			'JS' => 7,
			'PHP' => 9
		];

		echo $info['subjects']["JS"] . "<br>";
	?>
	<table>
		<tr>
			<th>Description:</th>
			<th>Value:</th>
		</tr>

		<?php 
			foreach($info as $key => $value){
				echo "<tr>";
				echo "<td>$key</td>";

				if($key == 'subjects'){
					echo "<td><ul>";
						foreach($value as $subject => $mark){
							echo "<li>$subject: $mark</li>";
						}
					
					// for($i=0;$i<count($value);$i++){
					// 	echo "<li>{$value[$i]}</li>";
					// }

					echo "</ul></td>";
				} else {
					echo "<td>$value</td>";
				}
				
				echo "</tr>";
			}
		?>
	</table>

</body>
</html>