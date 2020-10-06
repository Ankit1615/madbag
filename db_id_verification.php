<?php
session_start();
include 'config.php';
$last_id = "SELECT id FROM patient_details WHERE id = (SELECT MAX(id) FROM patient_details)";
$result = mysqli_query($conn, $last_id);

$id = $_POST['id'];
$no  = $_POST['no'];
$today = date("d-m-y"); 
if (mysqli_num_rows($result) > 0) {    
    while($row = mysqli_fetch_assoc($result)) {
        $pid = $row["id"];
    }
}

$q = "INSERT INTO id_proof (patient_id,id_type,id_no,date)
VALUES ($pid, '$id',$no,'$today')";

$result = mysqli_query($conn, $q); 
if($result)
{
    echo "yes";
}
else
{
    echo "no";
}


?>