
<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="HKM">
    <meta name="keyword" content="book bed">
    <title>Hospital Management system</title>
    <link rel="stylesheet" href="appoint.css">    
    <link rel="icon" href="./image/25.gif" type="image/gif" sizes="16x16">  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <!--cdn for bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--font awosome-->
        <script src="https://kit.fontawesome.com/67412fdba5.js" crossorigin="anonymous"></script>
        <style>
          .patt{
            background-image:url('./image/pattern.png');
            
          }
          .bg-img
    {   
      background-image: linear-gradient(280deg,rgba(0, 0, 0, 0), rgb(1, 58, 76)) ,url('./image/doctor2.jpg');
    }

          @media  (max-width: 576px)
{
  .bg-img
    {   
      background-image: linear-gradient(280deg,rgba(0, 0, 0, 0), rgb(1, 58, 76)) ,url('./image/doctor.jpg');
    }
    

}



@media (min-width:576px) and (max-width:768px)
{
  .bg-img
    {   
      background-image: linear-gradient(280deg,rgba(0, 0, 0, 0), rgb(1, 58, 76)) ,url('./image/doc3.jpg');
    }
    


}

@media (min-width:768px) and (max-width:992px)
{
  .bg-img
    {   
      background-image: linear-gradient(280deg,rgba(0, 0, 0, 0), rgb(1, 58, 76)) ,url('./image/doctor.jpg');
    }
    
}



        </style>
</head>
<body>
    <!--header-->
        
    <nav>
            <div class="nav-wrapper">
            <a href="#!" class="brand-logo"><span style="color:blue;">Mad</span><span style="color:red;">Bag+<span></span></a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger " style="text-decoration:none;color:white;"><i class="material-icons">menu</i></a>
              <ul class="right hide-on-med-and-down">
              
              <li><a href="index.php" style=" text-shadow: 4px 4px 6px #000000;color:white">Home</a></li>
                <li><a href="badges.html">service</a></li>
                <li><a href="emergency.php">emergency</a></li>
                <li><a href="faq.html">FAQ</a></li>
                <li><a href="feedback.php">Feedback form</a></li>
                <li><button style="background: linear-gradient(to right, #01074c, #1babd7);"><a href="login_hosp.php">Login</a></button></li>
              </ul>
            </div>
          </nav>
      
         
          <ul class="sidenav" id="mobile-demo">
          <li><div class="user-view text-center " style="height:150px;background:url('./image/doctor2.jpg');padding-top:50px;">     
      <a href="index.php" style="text-decoration:none;"><span style="color:blue;font-size:30px;">Mad</span><span style="color:red;font-size:30px;">Bag+<span></span></a>      
    </div></li>
    <div class="container">
    <div class="row">
        <div class="col-6">
        <li><a href="login_hosp.php" style="background: linear-gradient(to right, #01074c, #1babd7);color:white;border-radius:3px;">Login</a></li>
        </div>
        <div class="col-6">
        <li><a href="hosp_signup.php" style="background: linear-gradient(to right, #01074c, #1babd7);color:white;border-radius:3px;">SignUp</a></li>
        </div>
</div>
</div>
                <li class="active"><a href="index.php" ><i class="fas fa-home fa-1x"></i>HOME</a></li>
                <li><a href="badges.html"><i class="fas fa-capsules"></i>SERVICE</a></li>
                <li><a href="emergency.php"><i class="far fa-hospital"></i>EMERGENCY</a></li>
                <li><a href="faq.html"><i class="far fa-question-circle"></i>FAQ</a></li>
                <li><a href="feedback.php"><i class="far fa-comment-alt"></i>FEEDBACK FORM</a></li>
                
          </ul>
          <div class="bg-img" >  
            
              <div class="content">
                 <p class="first_para " > We’re Right Where You Need Us.</p>                             
                 
                     
              </div>
          </div>
          <div class="patt">
          <div class="main">
              <p class="mp pt-5 pb-5">Book Appointment</p>
              <div class="container book">
                  <div class="row">                     
                      <div class="col-12 col-md-5 col-lg-4 col-sm-12 mb-5 z-depth-2 details">
                        <p class="head">Follow the simple steps below and get your appointment fixed online!</p>
                       <p class="p1" >
                            <span>1.</span>                            
                            <i class="fas fa-mobile-alt" style="border:none;"></i>                                                                               
                        Verify yourself using Mobile No.                        
                        </p>
                        <div class="connecter">
                        <i class="fas fa-link" style="border:none;" ></i>
                        </div>
                        <p class="p1">
                            <span>2.</span>                            
                            <i class="far fa-hospital" style="border:none;"></i>                                                                               
                            Choose Hospital / Department
                        </p>
                        <div class="connecter">
                            <i class="fas fa-link" style="border:none;"></i>
                            </div>
                        <p class="p1">
                            <span>3.</span>                            
                            <i class="far fa-calendar-alt" style="border:none;"></i>                                                                               
                            Select date of appointment
                        </p>
                        <div class="connecter">
                            <i class="fas fa-link" style="border:none;"></i>
                            </div>
                        <p class="p1">
                            <span>4.</span>                            
                            <i class="fas fa-user-check" style="border:none;"></i>                                                                               
                            Verification using ID
                        </p>
                        <div class="connecter">
                            <i class="fas fa-link" style="border:none;"></i>
                            </div>
                        <p class="p1">
                            <span>5.</span>                            
                            <i class="far fa-comment-alt" style="border:none;"></i>                                                                              
                            Get confirmation sms
                        </p>
                        .
                     
          </div>

          <div class="col-12 col-md-7 col-lg-8 col-sm-12 container">
            <div class="card">
                <div class="card-header" style="background-color: #5cc1e0;">
                    New Appointment
                </div>
                <br>
                <div class="card-body verify">
                    <div class="error" id="error"></div><br>
                    
                  <h5 class="card-text">Verify yourself using Mobile No.</h5>
                  <hr>
                  <p class="card-text">Please Enter Your Mobile Number.</p>
                  <form>
                      <input type="number"  name="mobile" id="mobile" maxlength="10" placeholder="Enter your number . . .">
                      <input type="button" class="btn mt-4" style="background-color: #5cc1e0;" name="login" id="send_otp"  value="procced" onclick="sendotp()">
                  </form>
                  
                  
                </div>
              </div>
          </div>
        </div>
    </div>
    </div>
</div>
    
      
     <?php
     include 'footer.php';
     ?> 
     
  
    <script src="main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--cdn of javascript for semantic ui--> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.min.js"></script>
  <script>
   
 
  </script>
</body>
</html>