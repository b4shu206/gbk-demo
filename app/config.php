<?php
$servername = "db";
$username = "user";
$password = "password";
$dbname = "vulnerable_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("gbk"); 
?>
