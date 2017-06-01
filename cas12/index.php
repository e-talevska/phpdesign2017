<?php

class Student {
    //attributes
    public $firstName;
    public $lastName;
    public $subjects;
    private $embg;
    private $email;
            
    function __construct($firstName, $lastName, $subjects) {
        echo "Initializing class: " . __CLASS__ . "<br>";
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->subjects = $subjects;
        $this->embg = rand(1, 100);
    }
            
    function whoAmI($param) {
        echo "Hello $param. My name is {$this->firstName} {$this->lastName}<br>";
    }
    
    function getEmail() {
        return $this->email;
    }
    
    function setEmail($email) {
        //set email property only if $email is valid
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email = $email;
        }
    }
            
    function __destruct() {
        echo "Desctruction of object <br>";
    }
}

$student1 = new Student("Petko", "Petkovski", ["PHP", "JavaScript"]);
$student1->firstName = "Stanko";
$student1->setEmail('e.talevska@hotmail.com');
echo $student1->getEmail();
//$student1->embg = "dffsdf"; //not allowed
//$student1->lastName = "Petkovski";
//$student1->subjects = ["PHP", "JavaScript"];
var_dump($student1);
$student1->whoAmI("All");

//Desctruction of object
//$student1 = null;
//unset($student1);


$student2 = new Student("John", "Doe", ["Math"]);
//$student2->firstName = "John";
//$student2->lastName = "Doe";
//$student2->subjects = ["Math"];
$student2->whoAmI("Class");