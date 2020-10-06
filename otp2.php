
<?php
// session_start();
// error_reporting(E_ALL & ~ E_NOTICE);
// if($_POST['action'] == 'sent_otp')
// {
// $username = "sonuyadav06157@gmail.com";
// $hash = "99a475934905a040cd56f56696f518e4ae94628b013c679d492b930836ee4eaf";
// $test = "0";
// $sender = "TXTLCL"; 
// $mobile = '+91'.$_POST['mobile_number'];
// $_SESSION['mobile'] = $mobile ;
// $otp=mt_rand(100000,999999);
// $_SESSION['otp']=$otp;
// $message = $otp." is your OTP for Mobile no verification ";
// $message = urlencode($message);
// $data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$mobile."&test=".$test;
// $ch = curl_init('http://api.textlocal.in/send/?');
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $result = curl_exec($ch);
// curl_close($ch);
// $num =substr($mobile,8);
// $num = "******$num.";
// $_SESSION['num']=$num;
// include 'verification-number.php';


// }

// if($_POST['action'] == 'verify_otp')
// {
//     $verotp=$_POST['otp'];
//     if($verotp == $_SESSION['otp'])
//     {
//         unset($_SESSION['otp']);    
//         $Success = true;
//         echo json_encode(array("type"=> $Success,"message"=>"succesfull")); 
//     }
//     else
//     {      
//         $error = false;  
//         echo json_encode(array("type"=>$error ,"message"=>"Please enter the correct OTP!"));      
        
//     }        
// }
session_start();
 error_reporting(E_ALL & ~ E_NOTICE);
if($_POST['action'] == 'sent_otp')
 {    $mobile = $_POST['mobile_number'];
    $otp=mt_rand(100000,999999);       
    echo "
    <script>
    sessionStorage.setItem('getOtp', $otp);
    </script>
    ";
    $field = array(
        "sender_id" => "FSTSMS",
        "language" => "english",
        "route" => "p",
        "numbers" => $mobile,
        "message" => $otp." is your OTP for Mobile no verification for MadBag+ ",
        "variables" => "{#AA#}|{#CC#}",
        "variables_values" => "12345|asdaswdx"
    );
    $_SESSION['mobile'] = $mobile ;
    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_SSL_VERIFYHOST => 0,
      CURLOPT_SSL_VERIFYPEER => 0,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => json_encode($field),
      CURLOPT_HTTPHEADER => array(
        "authorization: duIp8R4h5o7ZrDTwXnEbUQK3LGHS26yAiNMVBzFkcvafxWYlsg84uWy9bN5ths7dEvP3ZIwaU1SxqHgX",
        "cache-control: no-cache",
        "accept: */*",
        "content-type: application/json"
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
    
    curl_close($curl);
    
    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }
     $num =substr($mobile,6);
     $num = "******$num.";
     $_SESSION['num']=$num;
     
     include 'verification-number.php';


 }  
 


?>
