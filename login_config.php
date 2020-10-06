<?php
include 'config.php';
$user = $_POST['user'];
$pass = $_POST['pass'];
$q = "SELECT * FROM choose_hosp WHERE username='$user' AND password='$pass'";
$result = mysqli_query($conn,$q);
$row = mysqli_fetch_array($result) ;                 
$id = $row['id'];
 $rand = $row['auto_id'];
 $_SESSION['rand'] = $rand;
 $userdb = $row['username'];
 $passdb = $row['password'];
 if($user == $userdb && $pass == $passdb){
    $query_string =  urlencode($id);        

     echo json_encode(array("flag"=>"1","id"=> htmlentities($query_string),"rand" => $rand)); 
 }
 else{
     echo json_encode(array("flag"=>"0","id"=> 0)); 
 }

?>