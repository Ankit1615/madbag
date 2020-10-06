<?php
session_start();
include 'config.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $middle = $_POST['middle'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $fathername = $_POST['fathername'];
    $pin = $_POST['pin'];
    $mobile = $_POST['mobile'];
    $state = $_POST['state'];
    $birth = $_POST['birth'];
    $intial = $_POST['intial'];
    $gender = $_POST['gender'];
    $token = mt_rand(100000,999999);

       
    $sql = "INSERT INTO patient_details(intial,fname,middle,lname,email,mobile,fathername,pin,state,birthday,gender,address,token_no)
    VALUES ('$intial','$fname','$middle','$lname','$email','$mobile','$fathername','$pin','$state','$birth','$gender','$address',$token)";
    $q = mysqli_query($conn, $sql);
    $last_id = mysqli_insert_id($conn);
    $_SESSION['id'] = $last_id ;
  
    if($q)
    {
        require_once("chooseHos.php");
       
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
            
?>