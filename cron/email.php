<?php

require(dirname(__FILE__) . '../vendor/autoload.php');

function sendmail($subject = null, $to = null, $cc = null, $bcc = null, $body = null) {
    //PHPMailer Object
    $mail = new PHPMailer\PHPMailer\PHPMailer();

//From email address and name
    $mail->From = "info@newspulses.com";
    $mail->FromName = "Newspulses";

//To address and name
    $mail->addAddress($to);
//    $mail->addAddress("belal@newspulses.com");
//CC and BCC
    if (!empty($cc)) {
        $mail->addCC($cc);
    }

    if (!empty($bcc)) {
        $mail->addBCC($bcc);
    }


//Send HTML or Plain Text email
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body = $body;

    if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        //echo "Message has been sent successfully";
    }
}
