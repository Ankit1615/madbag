<?php
error_reporting(E_ALL & ~ E_NOTICE);

$servername = "localhost";
$username = "root";
$password = "";
$db = "hkm";

$conn = mysqli_connect($servername, $username, $password, $db);

?>