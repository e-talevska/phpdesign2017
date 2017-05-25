<?php  
	
	session_start();
	unset($_SESSION['logged_in']);
	//go briseme cookiteo
	setcookie("user", null);
	header('Location: login.php');
	exit;


?>