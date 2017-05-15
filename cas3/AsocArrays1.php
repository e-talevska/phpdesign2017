<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
			
			echo "<pre>";
			print_r($info);
			echo "<pre>";

			$name = "Jane";
			var_dump($info, $name);

			$info['subjects'] = [
				"UX/UI" => 10,
				"JS" => 7,
				"PHP" => 9
			];


?>

</body>
</html>