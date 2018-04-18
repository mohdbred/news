<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myblog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


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


$sql = "INSERT INTO users (name, email,message,createdAt)
VALUES ('$name', '$email', '$msg',CURRENT_TIMESTAMP)";


if ($conn->query($sql) === TRUE) {
	$status['success'] = 'Thanks!. I will be in touch with you shortly.';
	echo json_encode($status); return;
} else {
   $status['error'] = 'whoops! Looks like something wrong';
	echo json_encode($status); return;
}

$conn->close();
?>