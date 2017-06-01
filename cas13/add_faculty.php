<?php
session_start();
class Faculty{
	public $a;
}

if (isset($_POST['submit'])) {
	require 'faculty.php';
	
	try{
		//an exception might occure
		//faculty class from faculty.php ,  not the one above
		$faculty = new \SEDC\Faculty\Faculty($_POST['name']); //prvoto e namespace-ot, vtoroto e imeto na klasata
	//if there is an error during creating Faculty Instances,nothing below this (within the try block) will be executed
		$faculty->save();
		header("Location: list_faculties.php"); exit;
	}
	// catch(InvalidNameException $e){

	// }
	catch(Exception $e){
		$_SESSION['error'] = $e->getMessage();
	} 
	//after this the program continues
}

header("Location: index.php");

?>