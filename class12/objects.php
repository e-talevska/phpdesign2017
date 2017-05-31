<?php

	// function student($name, $surname, $list){
	// 	$subject = implode($list,"<li></li>");
	// 	echo "Name : $name <br />Surname: $surname<br/> <ul>Subjects:</ul> $subject <br /> My name is $name $surname.";
	// }	

	// student("Marija", "Shakleva", ["Math", "Science", "Art"]);

	class Student{

		//koga ima var, attributes are public
		var $firstName;
		var $lastName;
		var $subjects;
		private $embg;
		private $email;

		function __construct($firstName, $lastName, $subjects){
			echo "Initializing class " . __CLASS__ . "<br />";
			$this -> firstName = $firstName;
			$this -> lastName = $lastName;
			$this -> subjects = $subjects;
			$this -> embg = rand(1, 100) ;
		}

		function whoAmI($param){
			echo "Hello $param <br /> My name is $this->firstName and my surname is $this->lastName. <br />";
		}

		//doaganje do definiran private atribut, vikame deka ne moze da pristapi direktno do atributot tuku treba da pristapi do funkcijata sto ke ja vrati vrednosta na atributot
		function getEmail (){
			return $this->email;
		}

		//setiranje vrednost vo definirana private atribut
		function setEmail($email){
			//proveruvame dali e validna
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				return $this->email = $email;
			}
		}

		//dadena clasa(objekt) prestavuva konekcija so neso, falj i vo destruktorot se kazuva sto ke se sluci so objektot, vo moment na unistuvanje se zatvora konekcija
		function __destruct(){
			echo "Destruction of object.<br />";
		}

	}

	$student01 = new Student("Petko", "Petkovski", ["PHP", "JavaScript"]);
	// $student01 -> firstName = "Petko";
	// $student01 -> lastName = "Petkovski";
	// $student01 -> subjects = ["PHP", "JavaScript"];
	$student01 -> whoAmI("All");
	$student01 -> setEmail("dsfsdf");//not valid, no value
	
	//****not allowed out of class ***///
	//$student01 -> embg; 
	var_dump($student01);
	//**********
	//unistuvanje na objekt
	$student01 = null; //ili unset($student01);

	$student02 = new Student("John", "Doe", ["Math"]);
	// $student02 -> firstName = "John";
	// $student02 -> lastName = "Doe";
	// $student02 -> subjects = ["Math"];
	$student02 -> whoAmI("Class");
	$student02 -> setEmail("maria.sakleva@gmail.com");
	var_dump($student02);

	
 ?>