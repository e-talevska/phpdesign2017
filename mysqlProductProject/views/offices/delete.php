<?php
	require '../../models/office.php';
	if (isset($_GET['id'])) {
		$office = new \SEDC\DB\Office();
		$office->delete($_GET['id']);
	}
	//var_dump($office);
	header('Location:list.php');exit;

?>
