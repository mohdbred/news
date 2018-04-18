<?php

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];

if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $status['error'] = "Only letters and white space allowed"; 
  echo json_encode($status); return;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $status['error'] = "Invalid email format"; 
 echo json_encode($status); return;
}


    $to = 'mohdraheem06@gmail.com';
    $subject = 'Mohammad AbdurRaheem Portfolio';
    $message = 'Following person contacted you from your website <br> <b>Name :</b>' . $name . '<br><b>Email : </b>' . $email . '<br><b>Subject :</b>Some One Contacted You From your Portfolio Site<br><b>Message</b> : ' . $msg;
    $header = 'MIME-Version: 1.0' . "\r\n";
    $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $header .= "From: mohammad@newspulses.com \r\n" .
            "Reply-To: mohammad@newspulses.com \r\n" .
            "X-Mailer: PHP/" . phpversion();


  $retval = mail($to,$subject,$message,$header);

 if( $retval == true ) {
           $status['success'] = 'Thanks!. I will be in touch with you shortly.';
	echo json_encode($status); return;
         }else {
            $status['error'] = 'whoops! Looks like something wrong';
	echo json_encode($status); return;
         }

?>