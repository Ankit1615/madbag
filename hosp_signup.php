<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="HKM">
    <meta name="keyword" content="book bed">
    <title>Hospital Management system</title>    
    <link rel="icon" href="./image/25.gif" type="image/gif" sizes="16x16">  
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
		
        <!--font awosome-->
        <script src="https://kit.fontawesome.com/67412fdba5.js" crossorigin="anonymous"></script>
        <style>
.success {
  color: green;
  font-size: 18px;
  margin-bottom: 15px;
  display: none;
}
   

 .bg-register-image
            {
                background-image: url("./image/doct.jpg");	
				background-repeat:no-repeat;
				background-size:cover;
				
            }
			body
			{
			background-color: #2d54c6;
			}
			.ca
			{
			  border-radius: 5px;
			}
			.form-control-user
			{
			border-radius:60px;
			padding:12px 10px;
			}
			.form-control-user::placeholder
			{
			font-size:12px;						
			color:grey;
			
			}
			 .btn-user 
			 {
			 border-radius:60px;
			 padding:10px 8px;
			background-color:#4e73df;
			color:white;
			font-size:13px;
			 }
			 .btn-user:hover
			 {
			 color:white;
			 background-color:#2d54c6;
			 }
           /* Chrome, Safari, Edge, Opera */
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
            }

            /* Firefox */
            input[type=number] {
            -moz-appearance: textfield;
            }
			
			.ReloadBtn { 
			  background:url('https://cdn3.iconfinder.com/data/icons/basic-interface/100/update-64.png') left top no-repeat;   
			  background-size : 100%;
			  width: 32px; 
			  height: 32px;
			  border: 0px; outline :none;
			  position: absolute; 
			  bottom: 63px;
			  left : 310px;
			  outline: none;
			  cursor: pointer; /**/
			}
			
			.error { 
			  color: red; 
			  font-size: 12px; 
			  display: none; 
			}


		 </style>
</head>
<body class="bg-gradient-primary">

    <div class="container">
  
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
            <div class="col-lg-7">
              <div class="p-md-5 p-3">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4" style="font-weight:400 ;">Create an Account!</h1>
                </div>
                <form class="user">
                    <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true" style="font-weight: 600;">Hospital Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false" style="font-weight: 600;">Nodal Officer Details</a>                         
                        </li>
                        </ul>
                   
                      <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active mt-4" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            
                                <div class="row">
                                    <div class="col-sm-12"><span style="font-weight: 500;font-size:14px;">Name Of Hospital :<span style="color: red;"> *</span></span>
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="far fa-hospital"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="hosp_name" placeholder="Hospital Name" aria-describedby="validationTooltipUsernamePrepend" required>
                                            
                                          </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                    <div class="col-sm-12 mt-3"><span style="font-weight: 500;font-size:14px;">Username :<span style="color: red;"> *</span></span>
                                        <div class="input-group mt-2">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                                            </div>
                                            <input type="text" class="form-control" id="username" placeholder="AKY1234" aria-describedby="validationTooltipUsernamePrepend" required>
                                            
                                          </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                            <div class="col-12 mt-3">
                                                <span style="font-weight: 500;font-size:14px;">Password :<span style="color: red;"> *</span></span>                                                                                    
                                                <input type="text" class="form-control mt-2" id="password" placeholder="Ajs@537">
                                              </div>
                                          </div>
                                    <div class="row">
                                        <div class="col-6  mt-3">
                                            <span style="font-weight: 500;font-size:14px;">Hospital Type :<span style="color: red;"> *</span></span>                                                                                    
                                            <div class="form-group mt-2">                                            
                                                <select class="form-control" id="hosp_type" required>
                                                  <option readonly>--Select Hospital Type--</option>
                                                  <option>General Hospital</option>
                                                  <option>Civil Hospital</option>
                                                  <option>Supar Specilist</option>
                                                  <option>Specialised Hospital</option>
                                                  <option>Medical College</option>
                                                  <option>District Hospital</option>
                                                  <option>PHC</option>
                                                  <option>CHC</option>
                                                </select>
                                              </div>
                                            
                                          </div>
                                       
                                          <div class="col-6  mt-3">
                                            <span style="font-weight: 500;font-size:14px;">Category :<span style="color: red;"> *</span></span>                                                                                    
                                            <div class="form-group mt-2">                                            
                                                <select class="form-control" id="hosp_cat" required>
                                                  <option readonly>--Select Category--</option>
                                                  <option>central</option>
                                                  <option>State</option>
                                                  <option>Society</option>
                                                  <option>Cooprative</option>
                                                  <option>Autonomous Body</option>                                                
                                                </select>
                                              </div>
                                            
                                          </div>
                                          </div>
                                          <div class="row">  
                                              <div class="col-12">
                                            <span style="font-weight: 500;font-size:14px;">Hospital Address :<span style="color: red;"> *</span></span>                                                                                    
                                                <textarea class="form-control mt-2" id="hosp_add" placeholder="Hospital Address ...." rows="3" cols="80" required></textarea>                                              
                                          </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-6  mt-3">
                                         
                                          <span style="font-weight: 500;font-size:14px;">State in which hospital located :<span style="color: red;"> *</span></span>   
                                          <select name="state" id="state" class="  state form-control mt-2" >
                                           <option value="none" readonly="readonly">--Select State--</option>
                                           <?php
                                            include 'config.php';
                                            $q = "SELECT * FROM state_list";                                            
                                            $result = mysqli_query($conn, $q);
                                            while($row = mysqli_fetch_assoc($result)){
                                                ?>
                                              <option value="<?php echo $row['id'];?>"><?php echo $row['state'];?></option>  
                                                <?php
                                            }


                                           ?>
                                        </select>
                                            </div>
                                            <div class="col-6  mt-3">
                                                <span style="font-weight: 500;font-size:14px;">District in which hospital Located :<span style="color: red;"> *</span></span>   
                                                <select name=" district" id="district" class="form-control mt-2">
                                                 <option value="none">--Select District--</option>
                                              </select>

                                            </div>
                                        </div>
                                          <div class="row">
                                            <div class="col-12 mt-3">
                                                <span style="font-weight: 500;font-size:14px;"> Website Of Hospital</span>                                                                                    
                                                <input type="text" class="form-control mt-2" id="website" placeholder="https://example.com/">
                                              </div>
                                          </div>
                                          <a class="btn mt-3 text-white" style="background-color: #3c8dbc;" id="btnNext">Next</a>
                                      </div>
       
                            
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> 
                            <div class="row">
                                <div class="col-12 mt-4">
                                    <span style="font-weight: 500;font-size:14px;"> Nodal Officer Name :<span style="color: red;"> *</span></span>                                                                                    
                                    <input type="text" class="form-control mt-2" id="nodal_name" placeholder="Name" required>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-12 mt-3">
                                    <span style="font-weight: 500;font-size:14px;">Designation :<span style="color: red;"> *</span></span>                                                                                    
                                    <input type="text" class="form-control mt-2" id="desig" placeholder="Designation" required>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-12 mt-3">
                                    <span style="font-weight: 500;font-size:14px;">Mobile Number :<span style="color: red;"> *</span></span>                                                                                    
                                    <input type="number" class="form-control mt-2" id="mobile" placeholder="e.g-8236621101"  required>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-12 mt-3">
                                    <span style="font-weight: 500;font-size:14px;">Land Line Number</span>                                                                                    
                                    <input type="number" class="form-control mt-2" id="land_line" placeholder="e.g-8236-224-2524">
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-12 mt-3">
                                    <span style="font-weight: 500;font-size:14px;">E-mail Address :<span style="color: red;"> *</span></span>                                                                                    
                                    <input type="text" class="form-control mt-2" id="email" placeholder="example@domainname.com" required>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-12 mt-3">
                                    <span style="font-weight: 500;font-size:14px;">Name of Hospital Head</span>                                                                                    
                                    <input type="text" class="form-control mt-2" id="hosp_head" placeholder="Hospital Head">
                                  </div>
                              </div> 
							   <div class="row">
                                <div class="col-12 mt-3 ">
                                    <span style="font-weight: 500;font-size:14px;">Enter the code exactly as it appears :<span style="color: red;"> *</span></span>									
					<br>
					<span id="WrongCaptchaError" class="error"></span>
					<div class='CaptchaWrap mt-3'>					
					  <div id="CaptchaImageCode" class="CaptchaTxtField">
						<canvas id="CapCode" class="capcode" width="300" height="80"></canvas>						 
					  </div> 					  
					 <input type="button" class="ReloadBtn" onclick='CreateCaptcha();' value="reload">
					</div>     
						
                                    <input type="text" class="form-control mt-2 CaptchaTxtField" id="UserCaptchaCode" placeholder='Enter Captcha...'>
                                  </div>
                              </div>
							  
                            <a class="btn mt-3 text-white" style="background-color: #3c8dbc;" id="btnPrevious">Previous</a>
                            <a class="btn mt-3 text-white" style="background-color: #3c8dbc;" id="submit"onclick="CheckCaptcha();">Submit</a>
                        </div>                       
                      </div>
                      <hr class="mt-4">
                      <div class="text-center">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                      </div>
                      <div class="text-center">
                        <a class="small" href="login_hosp.php">Already have an account? Login!</a>
                      </div>
                    </div>
                     
                                  
                </form>               
                
              </div>
            </div>
          </div>
        </div>
      </div>
  
    </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script>
$(document).ready(function(){
$("#state").on("change", function() {
    var x = document.getElementById("state").value;
  console.log(x);
  $.ajax({
      type: "POST",
      url: "district.php",         
      data : { id : x },      
      success: function(response){
        $('#district').html(response);
      }
      
  });
   
});
});          
    
  $('#btnNext').click(function(){
  $('form li').next('li').find('a').trigger('click');
});

$('#btnPrevious').click(function(){
  $('form li').prev('li').find('a').trigger('click');
});



var cd;

$(function(){
  CreateCaptcha();
});

// Create Captcha
function CreateCaptcha() {
  //$('#InvalidCapthcaError').hide();
  var alpha = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
                    
  var i;
  for (i = 0; i < 6; i++) {
    var a = alpha[Math.floor(Math.random() * alpha.length)];
    var b = alpha[Math.floor(Math.random() * alpha.length)];
    var c = alpha[Math.floor(Math.random() * alpha.length)];
    var d = alpha[Math.floor(Math.random() * alpha.length)];
    var e = alpha[Math.floor(Math.random() * alpha.length)];
    var f = alpha[Math.floor(Math.random() * alpha.length)];
  }
  cd = a + ' ' + b + ' ' + c + ' ' + d + ' ' + e + ' ' + f;
  $('#CaptchaImageCode').empty().append('<canvas id="CapCode" class="capcode" width="220" height="66"></canvas>')
  
  var c = document.getElementById("CapCode"),
      ctx=c.getContext("2d"),
	  
      x = 40,
      img = new Image();

  img.src = "./image/img.png";
  img.onload = function () {
      var pattern = ctx.createPattern(img, "repeat");
      ctx.fillStyle = pattern;
      ctx.fillRect(0, 0, c.width, c.height);
      ctx.font="30px Roboto Slab";
      ctx.fillStyle = 'green';
	 
    
      ctx.setTransform (1, -0.12, 0, 1, 0, 15);
      ctx.fillText(cd,x,33);
  };
  
  
}

// Validate Captcha
function ValidateCaptcha() {
  var string1 = removeSpaces(cd);
  var string2 = removeSpaces($('#UserCaptchaCode').val());
  if (string1 == string2) {
    return true;
  }
  else {
    return false;
  }
}

// Remove Spaces
function removeSpaces(string) {
  return string.split(' ').join('');
}

// Check Captcha
function CheckCaptcha()
 {
  var result = ValidateCaptcha();
  if( $("#UserCaptchaCode").val() == "" || $("#UserCaptchaCode").val() == null || $("#UserCaptchaCode").val() == "undefined") {
    $('#WrongCaptchaError').text('Please enter code given below .').show();
	 $('#WrongCaptchaError').delay(5000).fadeOut(500);
    $('#UserCaptchaCode').focus();
  } else {
    if(result == false) { 
      $('#WrongCaptchaError').text('Invalid Captcha! Please try again.').show();
	   $('#WrongCaptchaError').delay(5000).fadeOut(500);
      CreateCaptcha();
      $('#UserCaptchaCode').focus().select();
    }
    else { 
      $('#UserCaptchaCode').val('').attr('place-holder','Enter Captcha - Case Sensitive');
      CreateCaptcha();
      $('#WrongCaptchaError').fadeOut(5000);


      
  var hosp_type = $("#hosp_type").find("option:selected").val(); 
  var hosp_cat = $("#hosp_cat").find("option:selected").val(); 

  var state = $("#state").find("option:selected").text(); 
  var district = $("#district").find("option:selected").val();  
  var hosp_name = $('#hosp_name').val(); 
  var hosp_add = $('#hosp_add').val(); 
  var website = $('#website').val(); 
  var nodal_name = $('#nodal_name').val();
  var desig = $('#desig').val();
  var email = $('#email').val();
  var address = $('#address').val();
  var mobile = $('#mobile').val();
  var land_line = $('#land_line').val();
  var hosp_head = $('#hosp_head').val();
  var username = $('#username').val();
  var password = $('#password').val();
  
  if( hosp_type == "" || hosp_cat == "" || state == "" || district =="" || hosp_name == "" || hosp_add == "" || nodal_name == "" || desig == "" || email == "" || mobile == "" || username == "" || password == "")
  {
      alert("please fill the required feild!");
  }
  else
  {
    function randomString(length, chars) {
    var result = '';
    for (var i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
    return result;
}
var rString = randomString(32, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

      var input = {
        "hosp_type": hosp_type,
        "hosp_cat": hosp_cat,
        "state": state,
        "district": district,
        "hosp_name": hosp_name,
        "hosp_add": hosp_add,
        "website": website,
        "nodal_name": nodal_name,
        "desig": desig,
        "email": email,
        "mobile": mobile,    
        "land_line": land_line,
        "username": username,
        "password": password,
        "hosp_head": hosp_head ,
        "rString" : rString      
      };
      $.ajax({
      type: "POST",
      url: "signup.php?id=" + rString, 
      dataType: "json",        
      data : input,
     
      beforeSend: function(){
        $("#submit").html("loading..");
      },
      success: function(response){    
       console.log(response);
       if(response.flag == '1')
          {
            window.location.href = "hosp_department.php?hospital=" + response.id + "&id=" + rString;                       
          }
          else
          {
            window.location.href = "hosp_signup.php";
          }    
    }
    });

      }
      
  }
    }
  }  

  </script>

</body>

</html>
