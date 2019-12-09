<?php 

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require './vendor/autoload.php';

// Begin session
session_start();

// Check if email is correct format
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

	// Store error message
	$_SESSION["error"] = "Invalid email format";

	// Go to contact.php to show error message
	header('Location: contact.php#form');

}

else {
	session_destroy();

	echo "{$_POST['text']} <br>";
	echo "{$_POST['email']} <br>";
	echo "{$_POST['lastName']} <br>";

	// ---------------------------------------------------------------------------
	// Send email

	$mail = new PHPMailer;

	// Set mailer to use SMTP
	$mail->isSMTP();

	// Specify main and backup SMTP servers                       
	$mail->Host = 'smtp.gmail.com';

	// Enable SMTP authentication
	$mail->SMTPAuth = true;

	// SMTP username - gmail
	$mail->Username = 'hungrywebatal@gmail.com';

	// SMTP password - password of gmail
	$mail->Password = 'HungryWeb2019';

	// Enable TLS encryption, `ssl` also accepted
	$mail->SMTPSecure = 'tls';  

	// TCP port to connect to    
	$mail->Port = 587;

	// Who is the sender and their name
	$mail->setFrom($_POST['email'], 'ATAL Website');

	// Who is receiving the email
	$mail->addAddress('atalsociety15@gmail.com');

	// Set email format to HTML
	$mail->isHTML(true);

	// Body Content
	$bodyContent = "<h1>Email from: {$_POST['email']}</h1>";
	$bodyContent .= "<h2>Sender's name: {$_POST['firstName']} {$_POST['lastName']}</h2>";
	$bodyContent .= "<p>{$_POST['text']}</p>";

	// Email's subject
	$mail->Subject = 'Question from webiste';

	// Attach body content to $mail 
	$mail->Body = $bodyContent;

	// Email was sent
	if (!$mail->send()) {

		$_SESSION['isSent'] = true;

		// Go to contact.php to display success status
		header('Location: contact.php#form');
	}

	// Email was not sent
	else {

		$_SESSION['isSent'] = false;

		// Go to contact.php to display unsuccessful status
		header('Location: contact.php#form');

	}

}


 ?>