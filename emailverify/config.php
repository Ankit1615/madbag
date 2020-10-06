<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "email_verification";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>