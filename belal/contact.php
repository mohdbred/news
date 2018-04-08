<?php

$sender_name = stripslashes($_POST["name"]);

$sender_email = stripslashes($_POST["email"]);

$sender_subject = stripslashes($_POST["subject"]);

$sender_message = stripslashes($_POST["message"]);

$capcha = stripslashes($_POST["capcha"]);

$secret = '6Lf5s1EUAAAAAK1bTBO33JzzSBCducXvxIk-GEHB';
//$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => '6Lf5s1EUAAAAAI92qIqrwz0fcxXaFtPcqNQBvnv4',
    'response' => $capcha
);


$verify = curl_init();
curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($verify, CURLOPT_POST, true);
curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
$res = curl_exec($verify);

$captcha = json_decode($res);


if ($captcha->success == false) {
    echo "0";
    exit;
} else if ($captcha->success == 1) {
    echo "0";
    exit;
    
    
    // Now sending the mail
    
}