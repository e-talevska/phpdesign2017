<?php

	session_start();

	//we can have classes with the same name
	class Faculty{
		public $a;
	}

	if(isset($_POST['submit'])){
		require 'faculty.php';
		try{
			$faculty = new \SEDC\Faculty\Faculty($_POST['name']);
			//if there's an error during creating faculty instance, nothing below this will be executed
			$faculty->save();
			header("Location: list_faculties.php");exit;
		}
		// catch(InvalidNameExeption $e){

		// }
		catch(Exception $e){
			$_SESSION['error'] = $e->getMessage();
		}
		//the program continues
	}

	header("Location: index.php");
 ?>