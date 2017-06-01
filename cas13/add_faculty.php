<?php
session_start();

//we can have classes with same name
//but they must belong to diffrent namespaces
//this one is in the global namespace
class Faculty {
    public $a;
}

if(isset($_POST['submit'])){
    require 'faculty.php';
    try{
        //an exception might occur
        //Faculty class from faculty.php not the one above
        $faculty = new \SEDC\Faculty\Faculty($_POST['name']);
       //if there is an error during creating Faculty instance
       //nothing below this (within the try block) will be executed
        $faculty->save();
        header("Location: list_faculties.php");exit;
    } 
//    catch (InvalidNameException $e) {
//        
//    } 
    catch (Exception $e) {
        $_SESSION['error'] = $e->getMessage();
    }
    //the program continiue
}

header("Location: index.php");