<?php
error_reporting(E_ALL & ~ E_NOTICE);
include 'config.php';
$name_hosp = $_POST['datavalue'];
echo $name_hosp;
$q = "SELECT * FROM hosp_dept WHERE choose_hosp_id = $name_hosp";
$result = mysqli_query($conn,$q);
echo "<option value='Select Your Hospital' disabled>Select Your Option</option>";
while($row = mysqli_fetch_array($result)){   
    ?>        
   <option value="<?php echo $row['id']; ?>"> <?php echo $row['dept']; ?></option> 
   <?php
}

?>