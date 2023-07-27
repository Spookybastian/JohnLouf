<?php

// Check that all variables are set
if (
	!isset($_POST['name'])
	|| !isset($_POST['email']) 
	|| $_POST['email'] == '' 
	|| !isset($_POST['subject'])
	|| !isset($_POST['message'])
) {
	header("Location: ../fail.php");
	exit();
}
// Sanitize & validate email
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
if (
	$email != $_POST['email'] 
	|| !filter_var($email, FILTER_VALIDATE_EMAIL)
) {
	header("Location: ../fail.php");
	exit();
}
// Sanitize all strings
$submittedName = htmlspecialchars($_POST['name']);
$submittedEmail = htmlspecialchars($email);
$submittedSubject = htmlspecialchars($_POST['subject']);
$submittedMessage = htmlspecialchars($_POST['message']);
	
$to = "contact@loufjohn.com";
$subject = "Someone just submitted your form!";
$body = "From: {$submittedName} ({$submittedEmail})\r\n";
$body .= "Subject: {$submittedSubject}\r\n";
$body .= "Message: {$submittedMessage}\r\n";

if (mail($to, $subject, $body))
	header("Location: ../success.php");
else
	header("Location: ../fail.php");
?>