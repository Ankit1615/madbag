
<?php

session_start();
session_unset();
/*
session_destroy();
if(!isset($_SESSION['date']))
{
  header("location:appointment.php");
}
*/
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
      <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--cdn of semantic ui-->   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.min.css">
       
        <!--cdn for animate css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" integrity="sha256-a2tobsqlbgLsWs7ZVUGgP5IvWZsx8bTNQpzsqCSm5mk=" crossorigin="anonymous" />
        <!--cdn for bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--font awosome-->
        <script src="https://kit.fontawesome.com/67412fdba5.js" crossorigin="anonymous"></script>
        <style>
         *{
          margin:0;
          padding:0;
        }
        .bg-img
    {   
      background-image: linear-gradient(280deg,rgba(0, 0, 0, 0), rgb(1, 58, 76)) ,url('./image/doctor.jpg');
    }
        
         .main{
           background-image:url('./image/pattern.png');
           padding:30px 0 40px 0;
         }
        
         
         .hosp{
            height: 450px;
           
          }
.hosp .hos button:hover{
  background-color: #114dba!important;  

}
@media  (max-width: 576px)
{
  .bg-img
    {   
      background-image: linear-gradient(280deg,rgba(0, 0, 0, 0), rgb(1, 58, 76)) ,url('./image/doctor.jpg');      
    }
    html {
     width:100%!important;
    }
    html{
    overflow: inherit!important;
}

    

}



@media (min-width:576px) and (max-width:768px)
{
  .bg-img
    {   
      background-image: linear-gradient(280deg,rgba(0, 0, 0, 0), rgb(1, 58, 76)) ,url('./image/doctor.jpg');
    }
    


}

@media (min-width:768px) and (max-width:992px)
{
  .bg-img
    {   
      background-image: linear-gradient(280deg,rgba(0, 0, 0, 0), rgb(1, 58, 76)) ,url('./image/doctor.jpg'); 
    }
    
}




@media  (max-width:768px)
{
  .hosp {
    background: linear-gradient(to right, #01074c, #1babd7);
    
  }
  .hosp {
   
    height: 300px!important;

  }
  .hosp .hos p{
    font-size:19px!important;
    padding-top:40px!important;
    color:White!important;

  }
  
}
        </style>
</head>
<body>
    <!--header-->
    <nav>
    <div class="nav-wrapper">
    <a href="index.php" class="brand-logo"><span style="color:blue;">Mad</span><span style="color:red;">Bag+<span></span></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger " style="text-decoration:none;color:white;"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      
        <li><a href="index.php" style=" text-shadow: 4px 4px 6px #000000;color:white">Home</a></li>
        <li><a href="badges.html">service</a></li>
        <li><a href="emergency.php">Emergency</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="feedback.php">Feedback form</a></li>
        <li><button style="background: linear-gradient(to right, #01074c, #1babd7);"><a href="login_hosp.php" style="color:white;">Login</a></button></li>
      </ul>
    </div>    
  </nav>
        
       <?php include 'nav.php'; ?>
          <div class="bg-img" >  
            <div class="container"> 
              <div class="content">
                 <p class="first_para " > This is a complete solution that can be deployed and customized for any hospital or health care institution, providing your patients with the service they expect to find in state of the art medical institutions</p>                             
                 
              </div>        
              </div>
          </div>
          <div class="main">
              <p class="mp mt-5 mb-5">Verify ID</p>
              <div class="container book">
                  <div class="row">
                      <div class="col-12 col-md-5 col-lg-4 col-sm-12 mb-5 z-depth-2 details">
                        <p class="head">Follow the simple steps below and get your appointment fixed online!</p>
                        <p class="p1" >
                            <span>1.</span>                            
                            <i class="fas fa-mobile-alt" style="color:green;border:none;" ></i>                                                                               
                        Verify yourself using Mobile No.                        
                        </p>
                        <div class="connecter">
                        <i class="fas fa-link" style="color:green;border:none;"></i>
                        </div>
                        <p class="p1">
                            <span>2.</span>                            
                            <i class="far fa-hospital" style="color:green;border:none;"></i>                                                                               
                            Choose Hospital / Department
                        </p>
                        <div class="connecter">
                            <i class="fas fa-link" style="color:green;border:none;"></i>
                            </div>
                        <p class="p1">
                            <span>3.</span>                            
                            <i class="far fa-calendar-alt" style="color:green;border:none;"></i>                                                                               
                            Select date of appointment
                        </p>
                        <div class="connecter">
                            <i class="fas fa-link" style="color:green;border:none;"></i>
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
                     
          </div>

          <div class="col-12 col-md-7 col-lg-8 col-sm-12 container">
            <div class="card">
                <div class="card-header" style="background-color: #5cc1e0;">
                <i class="fas fa-user-check" style="border:none;"></i> ID Verification
                </div>
                <br>
                <div class="card-body ">
                <div class="error" style="color:red;"></div>
                <p class="card-text">Please Select the of your document</p>                                           
          <form  class="my-3   form-group">
              Select Verification type <span style="color: red;">*</span>
              <select class="form-control my-2 mb-4 " id="id" >            
              <option value="Adhaar(UID)">Adhaar(UID)</option> 
              <option value="Passport">Passport</option> 
              <option value="Driving License">Driving License</option> 
              <option value="Election Commission ID Card">Election Commission ID Card</option> 
              <option value="Income Tax PAN Card">Income Tax PAN Card</option> 
              </select>    
                                                                  
                      <input type="number"  name="mobile" id="id_no" maxlength="10" required="required" placeholder="Enter your ID number . . .">
                      <input type="button" class="btn " style="background-color: #5cc1e0;"  value="procced" onclick="ver()">
                  </form>
                  
                </div>
              </div>
          </div>
        </div>
    </div>
    </div>
    
      
 <?php include 'footer.php'; ?>
    
    
    
    
  
    <!--unwanted-->
    <!--jquiry cdn-->
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--cdn of javascript for semantic ui--> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.14/semantic.min.js"></script>
    <script src="main.js"></script>
    <script>
    function ver()
    {
    var id = $("#id").find("option:selected").val();   
    var no = $("#id_no").val();
    $(".error").html("").hide();
    
         
        if(id == "Adhaar(UID)" && no.length == 12)
        {
            
   
        var input = {
        "id": id,
        "no" : no      
      };
      $.ajax({
        url : 'db_id_verification.php',
        type : 'POST',        
        beforeSend: function(){
          $("#verify").text("Loading...");
        },      
        data : input,
        success : function (response){                                  
       $('.book').load('complete.php');
    }
});

        }
        else if( id == "Passport" && no.length == 9)
        {
            
   
        var input = {
        "id": id,
        "no" : no      
      };
      $.ajax({
        url : 'db_id_verification.php',
        type : 'POST',        
        beforeSend: function(){
          $("#verify").text("Loading...");
        },      
        data : input,
        success : function (response){                   
          $('.book').load('complete.php');
    }
});

        }
        else if( id == "Driving License" && no.length == 13)
        {
            
   
        var input = {
        "id": id,
        "no" : no      
      };
      $.ajax({
        url : 'db_id_verification.php',
        type : 'POST',        
        beforeSend: function(){
          $("#verify").text("Loading...");
        },      
        data : input,
        success : function (response){                   
          $('.book').load('complete.php');
    }
});


        }
        else if( id == "Income Tax PAN Card" && no.length == 10)
        {
            
   
        var input = {
        "id": id,
        "no" : no      
      };
      $.ajax({
        url : 'db_id_verification.php',
        type : 'POST',        
        beforeSend: function(){
          $("#verify").text("Loading...");
        },      
        data : input,
        success : function (response){                   
          $('.book').load('complete.php');
    }
});

        }
        else if( id == "Election Commission ID Card")
        {
            
   
        var input = {
        "id": id,
        "no" : no      
      };
      $.ajax({
        url : 'db_id_verification.php',
        type : 'POST',        
        beforeSend: function(){
          $("#verify").text("Loading...");
        },      
        data : input,
        success : function (response){                   
          $('.book').load('complete.php');
    }
});

        }
       else
       {
        $(".error").html("Please enter valid number!");
         $(".error").show();
       }
      
       
    }

    </script>
