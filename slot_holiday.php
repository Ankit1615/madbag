<?php
session_start();
include 'config.php';
$id=$_SESSION['id'];
echo $id;
$date = $_POST['date'];
echo $date;
$q = "SELECT * FROM hosp_holiday WHERE hosp_id=$id";
$result = mysqli_query($conn, $q); 
if (mysqli_num_rows($result) == 0){
$holiday = "INSERT INTO hosp_holiday (hosp_id,holiday)
VALUES ($id,'$date')";  
$result = mysqli_query($conn, $holiday);  
}
else{            
    $q1 = "SELECT holiday FROM hosp_holiday WHERE hosp_id=$id";
    $result = mysqli_query($conn, $q1);
    $row = mysqli_fetch_assoc($result); 
    $date .= ", ".$row['holiday'];
$holiday1="UPDATE hosp_holiday SET  holiday='$date' WHERE hosp_id = $id ";
$result1 = mysqli_query($conn, $holiday1);   
}                               

?>
