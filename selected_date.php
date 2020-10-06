<?php

session_start();
include 'config.php';

$date = $_POST['date'];
$_SESSION['date']=$date;
$last_id = "SELECT id FROM patient_details WHERE id = (SELECT MAX(id) FROM patient_details)";
$result = mysqli_query($conn, $last_id);

if (mysqli_num_rows($result) > 0) {    
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
    }
}
else
{
    echo "error";
}
$q = "INSERT INTO selected_date (patient_id,date)
VALUES ($id, '$date')";

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