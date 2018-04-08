<?php

$sender_name = stripslashes($_POST["name"]);
echo $sender_name;

$sender_email = stripslashes($_POST["email"]);

echo $sender_email;

$sender_subject = stripslashes($_POST["subject"]);

echo $sender_subject;

$sender_message = stripslashes($_POST["message"]);

echo $sender_message;

$capcha = stripslashes($_POST["capcha"]);

echo $capcha;




//$response = $_POST["g-recaptcha-response"];
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