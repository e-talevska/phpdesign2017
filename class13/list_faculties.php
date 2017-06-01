<?php

	namespace SEDC\Faculty;

	require 'faculty.php';
	//nema potreba da kreirame instanca bidejki sme vo ist namespace , samo se povikuv funkcija
	$faculties = Faculty::read();


?>
<!DOCTYPE html>
<html>
<head>
	<title>List_Faculties</title>
</head>
<body>
	<h1>List Faculties</h1>
	<ul>
	<?php foreach ($faculties as $faculty) {
		//bidejki faculty e objekt 
		echo "<li>{$faculty->getId()} . {$faculty->getName()}</li>";
	} ?>
	</ul>
</body>
</html>