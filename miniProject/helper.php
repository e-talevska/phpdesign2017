<?php

function sendMail($fromEmail, $fromName, $subject, $message){
    require 'PHPMailer/PHPMailerAutoload.php';
    
    $mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sedc.academy@gmail.com';                 // SMTP username
$mail->Password = 'sedc1234';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('$fromEmail', 'fromName');
$mail->addAddress('sedc.academy@gmail.com', 'Design PHP & MySQL');

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = '$subject';
$mail->Body    = '$message';


if(!$mail->send()) {
    return [
        'error' => true,
        'message' =>  'Message could not be sent.'
    ];
   
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    return [
        'error' => false,
        'message' =>  'Message has been sent'
    ];
   
}
}

function checkLoggedIn(){
    if (!isset($_SESSION['logged_in'])){
    //if not logged in redirect to login page
    if(isset($_COOKIE['user'])){
        $_SESSION['logged_in'] = $_COOKIE['user'];
    }else{
    header('Location:login.php');exit;
    }
}
}

