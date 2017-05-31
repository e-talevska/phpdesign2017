<?php

class Student {
    public $firstName;
    public $lastName;
    public $subjects;
    private $embg;
    private $email;
    
    function __construct($firstName, $lastName, $subjects){
        echo "Initializing class: " . __CLASS__ . "<br />";
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->subjects = $subjects;
        $this->embg = rand(1, 100);
    }
    
    function WhoAmI($param){
        echo "Hello $param My name is {$this->firstName} {$this->lastName} <br />";
    }
    
    function getEmail(){
        return $this->email;
    }
    
    function setEmail($email){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->email = $email;
        }
    }
    
    function __destruct() {
        echo "Destruction of object <br />";
    }
}

$student1 = new Student("Roki", "Balboa", ["php", "javascript"]);
$student1->firstName = "Roki";
$student1->setEmail('aasda@fdsfs.com');
echo $student1->getEmail();
//$student1->embg = "asdasd";   Not allowed
//$student1->lastName = "Balboa";
//$student1->subjects = ["php", "javascript"];
var_dump($student1);
$student1->WhoAmI("All");

//Destruction of object
//unset($student1);
//$student1 = null;

$student2 = new Student("John", "Doe", ["Math"]);
//$student2->firstName = "John";
//$student2->lastName = "Doe";
//$student2->subjects = ["Math"];
$student2->WhoAmI("Class");
