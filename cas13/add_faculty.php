<?php
session_start();
// we can have classes with same name but they must belong to different name spaces
//this one is in the global namesapce
class Faculty{
    public $a;
}

    if(isset($_POST['submit'])){
        require 'faculty.php';
        try{
            //an exception migh occure
            //Faculty from faculty.php not the one above
        $faculty = new \SEDC\Faculty\Faculty($_POST['name']);
        //if there is an error durion the creation of faculty instance nothing below this(withing the try block) will be executed
        
        $faculty->save();
        header("Location: list_faculties.php");exit;
        
        }
//        catch(InvalidNameException $e){
//            
//        }
         catch(Exception $e){
            $_SESSION['error'] = $e->getMessage();
        }
        
        //the program continues
    }
    
    header("Location: index.php");