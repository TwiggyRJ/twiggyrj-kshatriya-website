<?php

	require("class.phpmailer.php");

	$mail = new PHPMailer();

	$mail->IsSMTP();  // telling the class to use SMTP
	$mail->Host     = "fan.fanhosted.com"; // SMTP server

	$mail->From     = "kshatriy@kshatriya.co.uk";
	$mail->AddAddress("aaron@kshatriya.co.uk");
	$signature = "This is sent via the automated form";
	$mail->Subject  = $_POST["subject"];
	$mail->Body     = $_POST["message"]. PHP_EOL . $_POST["name"]. PHP_EOL . $_POST["email"]. PHP_EOL . $signature;
	$mail->WordWrap = 50;
	
	header('Location: ../contact.html');
	exit;
	
?>