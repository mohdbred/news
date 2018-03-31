<?php

$servername = "localhost";
$username = "u551018196_bred";
$password = "bred@007";
$dbname = "u551018196_news";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

