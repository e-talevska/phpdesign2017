<?php

namespace SEDC\Faculty; // namespaceot i klasata ne morat da bidat isti

require 'file_manipulation.php';
use SEDC\File\FileManipulation; /* as FM; */

class Faculty {
    private $name;
    private $id;
    public static $noFaculties = 0;
    
    function __construct($name) {
        //increment the static variable $noFaculties
        // and add that value as value of property id for the object
        // that is being vreated
        $this->id = ++Faculty::$noFaculties; // Na ovoj nacin pristapuvame do promenlivata
        $this->setName($name);
    }
    function getName(){
        return $this->name;
    }
    function getId() {
        return $this->id;
    }
    function setName($name){
        if(trim($name) == '') {
           throw new \Exception("Name is required");
        } else{
        $this->name = $name;
        }
    }
    function save() {
        $file = new FileManipulation("faculties.csv", 'a');
        $file->write([$this->name]);
    }
    static function read() {
        $file = new FileManipulation("faculties.csv", 'r');
        $faculties = $file->readAll();
        foreach ($faculties as $faculty){
            $result[] = new Faculty($faculty[0]);
        }
        return $result;
    }
}


