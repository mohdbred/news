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
//$options = array(
//    'http' => array(
//        'method' => 'POST',
//        'content' => http_build_query($data)
//    )
//);
//$context = stream_context_create($options);
//$verify = file_get_contents($url, false, $context);
//$captcha_success = json_decode($verify);



//$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$capcha);
//        $responseData = json_decode($verifyResponse);
        
        
        $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($verify);

    $captcha = json_decode($res);

        
        print_r($captcha);exit;
if ($captcha_success->success == false) {
    echo "<p>You are a bot! Go away!</p>";
} else if ($captcha_success->success == true) {
    echo "<p>You are not not a bot!</p>";
}