<?php
//var_dump($_POST);
session_start();
if(isset($_POST['submit'])){
    
    $fileErrors = [
        UPLOAD_ERR_INI_SIZE => "Please upload smaller file",
        UPLOAD_ERR_FORM_SIZE => "Please upload smaller file",
        UPLOAD_ERR_PARTIAL => 'Error occured, please try again',
        UPLOAD_ERR_NO_FILE => 'Please select file',
        UPLOAD_ERR_NO_TMP_DIR => 'No tmp dir',
        UPLOAD_ERR_CANT_WRITE => 'Cannot write to folder',
        UPLOAD_ERR_EXTENSION => 'Please check your file extension'
        ];
    
    $title = $_POST['title'];
    $text = $_POST['text'];
    $errors=FALSE;
    
    if(trim($title) == ''){
        $errors = TRUE;
        $_SESSION['error_title'] = 'Title is required';
    }
    if(trim($text) == ''){
        $errors = TRUE;
        $_SESSION['error_text'] = 'Content is required';
    }
//    var_dump($_FILES);exit;
//    var_dump($fileErrors);exit;
    
    $image = $_FILES['image'];
    
    if(isset($fileErrors[$image['error']])){
        //image error
        $errors = TRUE;
        $_SESSION['error_image'] = $fileErrors[$image['error']];
    }
 
    if($errors){
        $_SESSION['title'] = $title;
        $_SESSION['text'] = $text;
        header('Location: admin.php');
        exit;
    }else{
        if(move_uploaded_file($image['tmp_name'], 'uploads/'.$image['name'])){
            $handle = fopen('portfolios.csv', 'a');
            $writeContent = trim($title) . ';' . trim($text) . ';' . $image['name'] .PHP_EOL;
            fwrite($handle , $writeContent);
            fclose($handle);
            header("Location: index.php");
            exit;
    }else{
        $_SESSION['error_image'] ='Upoad failed. Please try again';
        header('Location: admin.php');
        exit;
    }
    }
}
   
