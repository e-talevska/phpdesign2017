<?php

session_start();
//we can have classes with the same name
//but they must belong to different namespace
//this one is on the global space
class Faculty {
    public $a;
}
if(isset($_POST['submit'])){
    require 'faculty.php';
    try{
        // and exception occur
        //Faculty class from Faculty.php npt the one aove
         $faculty = new \SEDC\Faculty\Faculty($_POST['name']);
         //if there is an error during creating Faculty instance
         //nothing below this (whith the try block) will be executed
         $faculty->save();
         header("Location: list_faculties.php");exit;
         
    } //catch (InvalidNameException $e) {

   // }
    catch (Exception $e) {
        $_SESSION['error'] = $e->getMessage();
    }
    //the program continue
   
}

header("Location:index.php");

