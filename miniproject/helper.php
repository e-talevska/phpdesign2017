<?php 

	function sendMail($fromEmail, $fromName, $subject, $message){
		require 'PHPMailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP- 
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'sedc.academy@gmail.com';                 // SMTP username
		$mail->Password = 'sedc1234';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom( $fromEmail, $fromName);
		$mail->addAddress('sedc.academy@gmail.com', 'Design PHP & Mysql');     // Add a recipient
		// $mail->addAddress('ellen@example.com');               // Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');

		// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = $subject;
		$mail->Body    = $message;
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		if(!$mail->send()) {
		    return  [

		    	'error' => true,
		    	'message' => 'Message could not be sent.'

		    ];
		    // echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
		    return  [

		    	'error' => false,
		    	'message' => 'Message has been sent.'

		    ];
		}
	}
		
	//ovaa logika treba da ja ima na sekoja strana za da moze da funkcionira cookie na sekoja strana za logiraniot user
	function checkLoggedIn(){
		//ovaa logika treba da ja ima na sekoja strana za da moze da funkcionira cookie na sekoja strana za logiraniot user
	if(!isset($_SESSION['logged_in'])){
		if(isset($_COOKIE['user'])){
			$_SESSION['logged_in'] = $_COOKIE['user'];
		}else{
			header('Loaction: login.php'); exit;
		//if the user is not logged in, redirect him to login.php
		}		
	}
	
};	

	

 ?>