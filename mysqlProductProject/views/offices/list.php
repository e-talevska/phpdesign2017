<?php
	session_start();

	if(!isset($_SESSION['logged_in'])){
		header('Location: ../users/login.php');
	}

	require '../../models/office.php';
	require '../../models/user.php';
	use SEDC\DB\Office;
	$office = new Office();	
	$offices = $office->readAll();
	//ja zemame vrednosta na logiraniot korisnik
	// $user = new SEDC\DB\User();
	// $user->fetchByEmail($_SESSION['logged_in']); 
	//pogorniot kod ne ni treba bidejki vo sesija go zacuvavme fullname

?>

<!DOCTYPE html>
<html>
<head>
	<title>List Offices</title>
</head>
<body>
	<h1>List Offices</h1>
	<ul>
		<li><?= $_SESSION['fullName']; ?></li>
	</ul>
	<a href="../users/logout.php">Log out</a>
	<?php 

		foreach ($offices as $office) { ?>
			<div>
				<address>
					<?php echo $office->city . ', ' . $office->country; ?>
					<?= "<b>" . $office->fullAddress() . "</b>" ; ?>
				</address>
				<a href="edit.php?id=<?= $office->officeCode ?>">edit</a>
				<a href="delete.php?id=<?= $office->officeCode ?>">delete</a>
			</div>
	<?php	} ?>

</body>
</html>