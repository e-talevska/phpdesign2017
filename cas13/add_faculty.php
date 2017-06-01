<?php
session_start();

class Faculty{
    public $a;
}

if(isset($_POST['submit'])){
    require 'faculty.php';
    try{
        $faculty = new \SEDC\Faculty\Faculty($_POST['name']);
        $faculty->save();
        header('location: list_faculties.php');exit;
    } catch (Exception $e){
        $_SESSION['error'] = $e->getMessage();
    }
}

header('location: index.php');

