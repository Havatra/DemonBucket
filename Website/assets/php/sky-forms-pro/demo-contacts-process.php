<?php
session_start();
if( isset($_POST['name']) && strtoupper($_POST['captcha']) == $_SESSION['captcha_id'] )
{
	$to = 'osteth@gmail.com'; // Replace with your email	
	$subject = 'Message from DemonBucket.com'; // Replace with your $subject
	$headers = 'From: ' . $_POST['serveraddress'] . "\r\n" . 'Reply-To: ' . $_POST['serveraddress'];	
	
	$message = 'Name: ' . $_POST['servername'] . "\n" .
	           'E-mail: ' . $_POST['serveraddress'] . "\n" .;
	
	mail($to, $subject, $message, $headers);	
	if( $_POST['copy'] == 'on' )
	{
		mail($_POST['email'], $subject, $message, $headers);
	}
}
?>