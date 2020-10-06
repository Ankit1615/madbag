<?php
session_start();
include 'config.php';

$hosp_name = $_POST['hosp_name'];
$_SESSION['name']=$hosp_name;
$hosp_id=$_POST['data'];
$_SESSION['data']=$hosp_id;
$last_id = "SELECT id FROM patient_details WHERE id = (SELECT MAX(id) FROM patient_details)";
$result = mysqli_query($conn, $last_id);


if (mysqli_num_rows($result) > 0) {    
    while($row = mysqli_fetch_assoc($result)) {
        $pid = $row["id"];
    }
}
echo $pid;
$_SESSION['pid']=$pid;

$hosp_dept = $_POST['hosp_dept'];
echo $hosp_dept;
$_SESSION['dep']=$hosp_dept;
$q = "INSERT INTO selected_h (selected_id,id, hosp_name, hosp_dept)
VALUES ($hosp_id,$pid, '$hosp_name', '$hosp_dept')";
$result1 = mysqli_query($conn, $q);
if($result1)
{
    echo "yes";

}
else
{
    echo "no";
}

?>
