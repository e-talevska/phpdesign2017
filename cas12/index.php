<?php


// function students($name,$surname,$subjects){

// 	return "My name is ".$name." ".$surname.". I am studing the fallowing classes: ".$subjects;
// }

// echo students("Ivana","Dimitrova",["js","php"]);

class Student {
	//definiranje na atributi na objektot
	public $firstName;
	public $lastName;
	public $subjects;
	private $embg;
	private $email;

	function __construct($firstName,$lastName,$subjects){
		echo "Initializinig class: " . __CLASS__ . "<br>";
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->subjects = $subjects;
		$this->embg = rand(1,100);
	}
	
	function whoAmI($parameter){
		echo "Hello $parameter! My name is {$this->firstName} {$this->lastName}<br>";
	}
//getter & setter metodi
	function getEmail(){
		return $this->email;
	}
	function setEmail($email){
		//set email property only if $email is valid
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			
			$this->email= $email;
		}
		
	}

	function __destruct(){
		echo "Desctruction of object <br>";
	}
}

//def.na objekite - instanci od klasata
	$student1 = new Student("Ivana","Dimitrova",["php","JavaScript"]);
	$student1->setEmail('ivana@dimitrova.com');

	echo $student1->getEmail();
	//$student1->embg = ""; - ni dava greska zatoa sto private atribute ne mozeme da go povikame nadvor od klasata

	// $student1->firstName = "Ivana";
	// $student1->lastName = "Dimitrova";
	//$student1->subjects = ["php","JavaScript","html/css"];
	// $student1->id = 56021;


$student1->whoAmI("All");
//$student1 = null; unset($student1); <-se predizvikuva destruction of object
var_dump($student1);

	$student2 = new Student("John","Doe",["html","css","animate"]);
	// $student2->firstName= "John";
	// $student2->lastName = "Doe";
	// $student2->subjects =["html","css","animate"];

$student2->whoAmI("Everybody");


?>