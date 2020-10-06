<?php

include 'config.php';


if(isset($_POST['submit']))
{

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $hospital = $_POST['hospital'];
    $message = $_POST['message'];
    $flag = '';
    if($name == '' || $email == '' || $mobile == '' || $hospital == '' || $message == '')
    {
        $meg = 1;
    }
    else
    {
    $sql = "INSERT INTO feedback(name, mobile, email , hospital,message)
    VALUES ('".$name."','".$mobile."','".$email."','".$hospital."','".$message."')";
    $result = mysqli_query($conn, $sql);
           if ($result)
           { 
               $flag = 1;
            }
            else
            {
                $flag = 0;    
                
            } 
    }      
}
                 ?>

         
                  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="HKM">
    <meta name="keyword" content="book bed">
    <title>Hospital Management system</title>
    <link rel="stylesheet" href="feedback.css">
     
    <link rel="icon" href="./image/25.gif" type="image/gif" sizes="16x16">  
      <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--cdn of semantic ui-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>        
        <!--cdn for bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--font awosome-->
        <script src="https://kit.fontawesome.com/67412fdba5.js" crossorigin="anonymous"></script>
        
        <style>

.icon ul label
{
    font-size:15px;
    color: #ff0066;
    margin-top: -10px;
    text-transform: capitalize;
    margin-left:-7px!important;
    font-family:  'Caladea', serif;
    font-weight: 900;
   
}


.bg-img
{ 
  background-image: linear-gradient(280deg,rgba(0, 0, 0, 0), rgb(0,0,0,0.8)) ,url(./image/hos1.jpg);  

}
        </style>
</head>
<body >
    <!--header-->
        
        <nav>
            <div class="nav-wrapper">
            <a href="index.php" class="brand-logo"><span style="color:blue;">Mad</span><span style="color:red;">Bag+<span></span></a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger "><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
                <li><a href="index.php" style=" text-shadow: 4px 4px 6px #000000;color:white">Home</a></li>
                <li><a href="badges.html">service</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="collapsible.html">emergency</a></li>                                
                <li><button style="background:#01074c;"><a href="login_hosp.php" style="color:white;">Login</a></button></li>
              </ul>
            </div>
          </nav>
      
         <?php
         include 'nav.php';
         ?>
          
          <div class="bg-img ">  
            <div class="container"> 
              <div class="content">
                 <p class="first_para " style="animation-duration: 2s;"> This is a complete solution that can be deployed and customized for any hospital or health care institution, providing your patients with the service they expect to find in state of the art medical institutions</p>                             
                 
              </div>        
              </div>
          </div>
         <div class="py-5 feed " style=" background-image: url(./image/pattern.png);">
           
           <div class="container">
          <div class="card ">
            <div class="card-header text-white " style="background-color: #5cc1e0;">
              <i class="far fa-comments fa-2x"></i><span class="ml-3" style="font-size: 20px;">Your reviews are important to us!</span>
            </div>
            <div class="row">
            <div class="col-md-6">
                <?php 
                if($meg == 1)
                {
                  ?>
                     <div class="alert alert-danger mt-3 ml-2" role="alert">
                            Please fill all the required fields! 
                      </div>
                      <script>
                        $(document).ready(function() {
                        setInterval(function(){
                        $('.alert-danger').hide();
                        },5000);
                        });
                      </script>
                      <?php
                }
                if($flag == 1)
                {
              ?>      
              <div class="alert alert-success mt-3 ml-2" role="alert">
                   Your Response has been Recorded Successfull 
                </div>
                <script>
                        $(document).ready(function() {
                        setInterval(function(){
                        $('.alert-danger').hide();
                        },5000);
                        });
                      </script>
                <?php
                }
            
                ?>
  
          <form action="feedback.php" method="POST" class="my-3 ml-3  form-group">
              Select Hospital <span style="color: red;">*</span>
              <select class="form-control my-2 mb-3 " id="exampleFormControlSelect1" name="hospital" >
              <option value="Select Your Hospital ">Select Your Option</option>
                <option value="AIIMS">AIIMS</option>
                <option value="APPLO">APPLO</option>
                <option value="KIMS">KIMS</option>
                <option value="DPS">DPS</option>
                <option value="Achariya Harihar Reginol Cancer Center,Cuttack,Odisha">Achariya Harihar Reginol Cancer Center,Cuttack,Odisha</option>
              </select>
              Name <span style="color: red;">*</span>
              <input type="text" class="mb-3 " name="name">                   
              Email <span style="color: red;">*</span>              
                <input type="email" class="form-control " name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted mb-3">We'll never share your email with anyone else.</small>          
               Mobile no. <span style="color: red;">*</span>
               <input type="number" class="mb-3 " name="mobile"> 
               Message <span style="color: red;">*</span> 
               <textarea class="form-control mt-3 " name="message" id="exampleFormControlTextarea1" rows="6"></textarea>
               <input type="submit" name="submit" class="btn my-3 " style="background-color:#5cc1e0">                             
          </form>        
            </div>
            <div class="col-md-6 ">
            <img src="./image/feed1.png" height="100%" width="100%" alt="">
            </div>
          </div>
          </div>
         </div>
         </div>
          
      
       <?php
       include 'footer.php';
       ?>
      </div>
      
    
    
  
    <!--unwanted-->
    <!--jquiry cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--cdn of javascript for semantic ui--> 
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.min.js"></script>
    <script src="main.js"></script>
</body>
</html>