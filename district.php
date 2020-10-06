<?php
include 'config.php';
$id = $_POST['id'];
$q = "SELECT * FROM all_cities WHERE state_code = '$id'";
$result = mysqli_query($conn, $q);
while($row = mysqli_fetch_assoc($result)) {     
    ?>
    <option value="<?php echo $row['city_name'];?>"><?php echo $row['city_name'];?></option>
    <?php
}
?>