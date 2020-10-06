<?php
include_once("config.php");
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$status=0;
$activationcode=md5($email.time());
$query=mysqli_query($con,"insert into userregistration(name,email,password,activationcode,status) values('$name','$email','$password','$activationcode','$status')");
	if($query)
	{
	$to=$email;
	$msg= "Thanks for new Registration.";   
	$subject="Email verification (https://moviehill.000webhostapp.com.com)";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html\r\n";
		$headers .= 'From: from@example.com' . "\r\n" .
		'Reply-To: reply@example.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		$ms ="";			
		$ms .="<html>
			</body>
			<div>
			<div>Dear .$name.</div></br></br>";
		$ms.="<div style='padding-top:8px;'>
			Please click The following link For verifying and activation of your account
			</div>
			<div style='padding-top:10px;'>
			<a href='https://moviehill.000webhostapp.com/email_verification.php?code=$activationcode'>Click Here</a>
			</div>
			<div style='padding-top:4px;'>
			Powered by <a href='https://moviehill.000webhostapp.com.com'>CodeWithSuneja.com</a>
			</div>
			</div>
			</body>
			</html>";
	mail($to,$subject,$ms,$headers);
	echo "<script>alert('Registration successful, please verify in the registered Email-Id');</script>";
	echo "<script>window.location = 'login.php';</script>";
	}
	else
	{
	echo "<script>alert('Data not inserted');</script>";
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>CodeWithSuneja | PHP Email Verification Script </title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">		
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="navbar-header">
        <a class="navbar-brand" rel="home" href="https://moviehill.000webhostapp.com">Home</a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="https://moviehill.000webhostapp.com">All Demos</a></li>			
			<li><a href="https://moviehill.000webhostapp.com">Contact</a></li>
			
		</ul>
		
	</div>
</nav>

<div class="container-fluid">
  
      
     
 
  <div class="col-sm-6">
    <div class="row">
      <div class="col-xs-12">
        <h3>PHP Email Verification Script </h3>
		<hr >
		<form name="insert" action="" method="post">
     <table width="100%"  border="0">
    <tr>
    <th height="62" scope="row">Name </th>
    <td width="71%"><input type="text" name="name" id="name" value=""  class="form-control" required /></td>
  </tr>  
  <tr>
    <th height="62" scope="row">Email id </th>
    <td width="71%"><input type="email" name="email" id="email" value=""  class="form-control" required /></td>
  </tr>
  <tr>
    <th height="62" scope="row">Password </th>
    <td width="71%"><input type="password" name="password" id="password" value=""  class="form-control" required /></td>
  </tr>
 <tr>
    <th height="62" scope="row"></th>
    <td width="71%"><input type="submit" name="submit" value="Submit" class="btn-group-sm" /> </td>
  </tr>
</table>
 </form>
 
      </div>
    </div>
  
        
   
  </div>

</div>
	
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>