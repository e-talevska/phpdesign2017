<?php
	//Za da rabotime so sesii, mora najprvo da ja startuvame!!
	session_start();
	session_destroy();
	header("Location: login.php");



?>