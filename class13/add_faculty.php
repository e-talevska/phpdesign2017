<?php

	session_start();
	//primer za toa deka ovaa klasa moze da postoi bidejki e vo globalen namespace//primer
	class Faculty{
		public $a;
	}

	if(isset($_POST['submit'])){
		//ako e setirana formata kreiraj nova istanca od faculty i zacuvaj se.
		require 'faculty.php';
		//kod vo koj moze da ima greska
		try{
			//mora da se navede namespaceot
			$faculty = new \SEDC\Faculty\Faculty($_POST['name']);
			//if there is an error during creating faculty instance, nothing below this (within the try block) will be executed
			$faculty -> save();
			header("Location: list_faculties.php");
			exit;
			//samo mu kazuvame da se zacuva

		}catch(Exception $e){
			//metod za klasa Exception za zemanje tekt, poraka od greska
			$_SESSION['error'] = $e -> getMessage();
		}
		//the program continues
	}	
		
	//ako ne e setirana forma
	header("Location: index.php");

?>