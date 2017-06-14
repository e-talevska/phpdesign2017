<?php
session_start();
//Ako ne postoi sesiska promenliva so vrednost logged in, togash prenasochi go
if(!isset($_SESSION['logged_in'])) {
	header("Location: ../users/login.php");
}
	use SEDC\DB\office;
	//use SEDC\DB\User;
	require '../../models/office.php';
	require '../../models/user.php';
	$office = new Office();
	$offices = $office->readAll();
	$user = new \SEDC\DB\User();
	$user->fetchByEmail($_SESSION['logged_in']);


?>

<!DOCTYPE html>
<html>
	<head>
		<title> List Offices </title>
	</head>
	<body>
		<h1> List Offices </h1>
		<ul>
			 <?=$user->fullName; ?> 
			 <!-- Koga ke se odlogiram i logiram pak, da go dava full name na soodvetniot korisnik -->
			<li><?=$_SESSION['fullName'] ?> </li>
			<li> <a href="../users/logout.php"> Log Out </a> </li>
		</ul>
		
		<?php foreach ($offices as $office) { ?>
			<div> 
			<address>
				<?php echo $office->fullAddress(); ?>
			</address>
			<a href="edit.php?id=<?=$office->officeCode ?>"> Edit </a>
			<a href="delete.php?id=<?=$office->officeCode ?>"> Delete </a>
			</div>
		<?php } ?>
	</body>	
</html>

<!-- Moze kako miniProject, ako ne sakam so objekti, no treba i da znam kako da insertiram vo baza, so query da ispratam so pomosh na php do baza -->

