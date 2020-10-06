<?php
include 'config.php';
$value = $_GET['value'];
$q = "SELECT * FROM choose_hosp WHERE hosp_name = '$value'";

$result = mysqli_query($conn, $q);
$row = mysqli_fetch_assoc($result);
if($row['hosp_name'] == $value)
echo json_encode(array("flag"=>"1","hosp"=> $row['hosp_name'])); 
else
    echo json_encode(array("flag"=>"0","hosp"=> $row['hosp_name']));     

?>