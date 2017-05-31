<?php

class Student {
    //attributes
    var $firstName;
    var $lastName;
    var $subjects;
    
    function __construct($firstName, $lastName, $subjects) {
        echo "Initializing class: " . __CLASS__ . "<br>";
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->subjects = $subjects;
    }
            
    function whoAmI($param) {
        echo "Hello $param. My name is {$this->firstName} {$this->lastName}<br>";
    }
}

$student1 = new Student("Petko", "Petkovski", ["PHP", "JavaScript"]);
//$student1->firstName = "Petko";
//$student1->lastName = "Petkovski";
//$student1->subjects = ["PHP", "JavaScript"];
//var_dump($student1);
$student1->whoAmI("All");


$student2 = new Student("John", "Doe", ["Math"]);
//$student2->firstName = "John";
//$student2->lastName = "Doe";
//$student2->subjects = ["Math"];
$student2->whoAmI("Class");