<?php
include 'config.php';
$id = $_GET['hospital'];
$_SESSION['id']=$id;
$rand = $_GET['id'];
$hosp = "SELECT * FROM choose_hosp WHERE id =$id";
$result1 = mysqli_query($conn,$hosp);
$row1 = mysqli_fetch_assoc($result1);

$q = "SELECT * FROM hosp_dept WHERE choose_hosp_id = $id";
$result8 = mysqli_query($conn,$q);

     
?>