<?php
session_start();
$verotp=$_POST['otp'];
$getOtp = $_POST['getOtp'];
if($verotp == $getOtp)
{       
   echo '1';
}
else
{      
    echo '0';
   
}        

?>