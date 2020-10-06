<?php
session_start();
include 'config.php';
$rand = $_SESSION['rand'];
echo $rand;

?>
