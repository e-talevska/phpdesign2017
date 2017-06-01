<?php

	session_start();

	$error = (isset($_SESSION['error'])) ? $_SESSION['error'] : '';

	//var_dump($_SESSION);
	unset($_SESSION['error']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>OOP Faculties</title>
</head>
<body>
	<h1>Add Faculty</h1>
	<form method="POST" action="add_faculty.php">
		<div>
			<label for="name">Name: </label>
			<input type="text" name="name" id="name" />
			<p><?= $error; ?></p>
		</div>
		<div>
			<button type="submit" name="submit">Submit</button>
		</div>
	</form>
</body>
</html>