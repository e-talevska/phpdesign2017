<?php
namespace SEDC\Faculty;

require 'file_manipulation.php';
use \SEDC\File\FileManipulation; //as FM; //ili so FM da ja povikame dolu instancata

class Faculty {
    private $name;
    private $id;
    public static $noFaculties = 0;
    function __construct($name){
        $this->id = ++Faculty::$noFaculties; //increment the static variable $noFaculties and add that value as value of property $id for the object that is being created
        $this->setName($name);
    }
    function getName(){
        return $this->name;
    }
    function getId(){
        return $this->id;
    }
    
    function setName($name){
        if(trim($name) == ''){
          throw new \Exception("Name is required");  
        }else{
        $this->name = $name; 
        }
    }
    
    
    function save(){
        $file = new FileManipulation('faculties.csv', 'a');
        $file->write([$this->name]);
    }
    
    static function read(){ //ne mozeme this da go koristime bidejki e static
        $file = new FileManipulation('faculties.csv', 'r');
        $faculties = $file->readAll();
        $result = [];
        foreach($faculties as $faculty){
            $result[] = new FAculty ($faculty[0]);
        }
        var_dump($result);
        return $result;
    }
}

