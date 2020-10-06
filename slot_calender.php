<?php
include 'config.php';
$id=$_POST['id'];
echo $id;

$dept  = $_POST['dept'];
echo $dept;

$date = $_POST['date'];
echo $date;
$hosp = "UPDATE hosp_dept SET selectedDates ='$date' WHERE choose_hosp_id = $id AND dept='$dept' ";
$result1 = mysqli_query($conn,$hosp);
if($result1)
{
    echo "yes";    
}
else
{
    echo "no";
}
?>