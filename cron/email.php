<?php

require_once " /home/u551018196/public_html/vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
$mail->From = "info@newspulses.com";
$mail->FromName = "Email Check";

//To address and name
$mail->addAddress("link.belal@gmail.com", "Mohd Belal");
$mail->addAddress("belal@newspulses.com");
//Address to which recipient will reply
$mail->addReplyTo("info@newspulses.com", "Reply");

//CC and BCC
//$mail->addCC("cc@example.com");
//$mail->addBCC("bcc@example.com");

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message has been sent successfully";
}