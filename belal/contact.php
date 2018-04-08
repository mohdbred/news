<?php

$sender_name = stripslashes($_POST["name"]);

$sender_email = stripslashes($_POST["email"]);

$sender_subject = stripslashes($_POST["subject"]);

$sender_message = stripslashes($_POST["message"]);

$capcha = stripslashes($_POST["capcha"]);
var_dump($capcha);

exit;


$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => '6Lf5s1EUAAAAAK1bTBO33JzzSBCducXvxIk-GEHB',
    'response' => $capcha
);
$options = array(
    'http' => array(
        'method' => 'POST',
        'content' => http_build_query($data)
    )
);
$context = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success = json_decode($verify);
if ($captcha_success->success == false) {
    echo "<p>You are a bot! Go away!</p>";
} else if ($captcha_success->success == true) {
    echo "<p>You are not not a bot!</p>";
}