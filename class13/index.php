<?php 
	session_start();
	$error = isset($_SESSION['error']) ? $_SESSION['error'] : '';
	unset($_SESSION['error']);
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Faculties</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
</head>
<body>


<h1>Add Faculty</h1>
<form method="post" action="add_faculty.php">
	<div class="add-faculty">
		<label for="name">Name</label>
		<input type="text" name="name" id="name">
		<p><?php echo $error ?></p>
	</div>
	<div>
		<input type="submit" name="submit" id="submit" value="Submit">
	</div>
</form>

</body>
</html>