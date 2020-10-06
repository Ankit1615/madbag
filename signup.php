<?php
session_start();
include 'config.php';

$hosp_type = $_POST['hosp_type'];
$hosp_cat = $_POST['hosp_cat'];
$hosp_state = $_POST['state'];
$hosp_dist = $_POST['district'];
$hosp_name = $_POST['hosp_name'];
$hosp_add = $_POST['hosp_add'];
$website = $_POST['website'];
$nodal_name = $_POST['nodal_name'];
$desig = $_POST['desig'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];  
$land_line = $_POST['land_line'];
$hosp_head = $_POST['hosp_head'] ;
$username = $_POST['username'] ; 
$password = $_POST['password'] ;
$rand = $_POST['rString'];
$rString = $_GET['id'];


if($rand == $rString){
    $q = "INSERT INTO choose_hosp (hosp_name, username ,password,hosp_type, hosp_address, hosp_state, hosp_dist, hosp_website, hosp_category, nodal_name, email, mobile, land_line, hosp_head, disignation, enable, auto_id)
 VALUES ('$hosp_name','$username','$password','$hosp_type','$hosp_add','$hosp_state','$hosp_dist','$website','$hosp_cat','$nodal_name','$email','$mobile','$land_line','$hosp_head','$desig','yes','$rString')";

$result = mysqli_query($conn, $q);

$id = mysqli_insert_id($conn);
$_SESSION['id'] = $id;
echo json_encode(array("flag"=>"1","id"=> $id)); 

}
else
{
    echo json_encode(array("flag"=>"0","id"=>"0"));     
}

$qu  = "INSERT INTO tbl_images (id,name)
        values($id,'$hosp_name')";
  $result1 = mysqli_query($conn, $qu);      

?>