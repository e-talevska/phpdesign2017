<?php
namespace SEDC\Faculty;
require 'faculty.php';
$faculties = Faculty::read();
?>
<!DOCTYPE html>
<html>
<head>
	<title>List Faculties</title>
</head>
<body>
	
	<h1>List Faculties</h1>
	<ul>
	<?php foreach ($faculties as $faculty) {

		echo "<li>{$faculty->getId()}. {$faculty->getName()}</li>";

	} ?>
	</ul>
</body>
</html>