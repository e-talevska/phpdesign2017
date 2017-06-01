<?php

class Student{
    //attributes
    public $firstName; //ili var namesto public
    public $lastName;
    public $subjects;
    private $embg;
    private $email;
    
    
    function __construct($firstName, $lastName, $subjects){
        echo "Initializing class " . __CLASS__ . "<br>";
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->subjects = $subjects;
        $this->embg = rand(1, 100);
    }
    function whoAmI($param){
        echo "Hello $param . My name is {$this->firstName} {$this->lastName} <br>";
    }
    
    function getEmail(){
        return $this->email;
    }
    
    function setEmail($email){
        // SET EMAIL PROPERTY ONLY IF $email is valid
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
             $this->email = $email;
        }
       
    }
    
    function __destruct(){
        echo "Destruction of object <br>";
    }
}

$student1 = new Student("Petko","Petkovski", ["PHP", "JavaScript"]); //moze i bez zagradi
$student1->firstName = "Stanko";
$student1->setEmail('asdds@me.op');
$student1->getEmail();
//$student1->embg = "qwqw"; private not allowed
//$student1->lastName = "Petkovski";
//$student1->subjects = ["PHP", "JavaScript"];

var_dump($student1);
$student1->whoAmI("All");
$student1 = null;
//unset($student1);


$student2 = new Student("John","Doe", ["Math"]);
//$student2->firstName = "John";
//$student2->lastName = "Doe";
//$student2->subjects = ["Math"];
$student2->whoAmI("Class");

