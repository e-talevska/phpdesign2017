<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 

	class Student {
		public $firstName;
		public $lastName;
		public $subjects;
		private $email;

		function __construct($firstName, $lastName, $subjects)
		{
			echo "Initializing class: " . __CLASS__ . "<br>";
			$this->firstName = $firstName;
			$this->lastName = $lastName;
			$this->subjects = $subjects;

		}

		function whoAmI($param)
		{
			echo "Hello $param. My name is $this->firstName  $this->lastName.";
		}

		function getEmail()
		{
			return $this->email;
		}

		function setEmail($email)
		{
			if (filter_var($email), FILTER_VALIDATE_EMAIL) {
				$this->email = $email;
			}
		}
	}

	$student1 = new Student("Petko", "Petkoski", ["HTML", "CSS", "PHP"]);
	$student1->email = "elenaPelena@gmail.com"
	// $student1->firstName = "Petko";
	// $student1->lastName = "Petkoski";
	// $student1->subjects = ["HTML", "CSS", "PHP"];
	$student1->whoAmI("All");


	$student2 = new Student("John", "Doe", ["JS", "Photoshop", "Illustrator"]);
	// $student2->firstName = "John";
	// $student2->lastName = "Doe";
	// $student2->subjects = ["JS", "Photoshop", "Illustrator"];
	$student2->whoAmI("All");

	// var_dump($student1, $student2);

	function __desctruct(){
		echo "Destruction of object <br>";
	}

?>

</body>
</html>