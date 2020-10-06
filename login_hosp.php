<!DOCTYPE html>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <style>
		
		@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700);
@import url(https://fonts.googleapis.com/css?family=Roboto+Slab:400,100);

body { 
  font-family: 'Open Sans', sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 0;
}

header { 
  background-color: #fff; 
  padding: 5px 15px 0px;
  border-bottom: 1px solid #ccc;
  margin-bottom: 25px;
}

h1 {
  font-size: 28px; 
  font-weight: 700; 
  margin: 0px; 
  padding: 0px 0px 10px 0; 
  border-bottom : 1px solid #ccc;
}
h4 { font-size : 16px; font-weight: 300; margin-top: 5px; line-height: 22px; }
h4 > * { display: inline-block; vertical-align: top; }

section { padding: 0 15px; }

.CaptchaWrap { position: relative; }
.CaptchaTxtField { 
  border-radius: 5px; 
  border: 1px solid #ccc; 
  display: block;  
  box-sizing: border-box;
}


#CaptchaImageCode { 
  text-align:center;
  margin-top: 15px;
  padding: 0px 0;
  width: 300px;
  height:80px;
  overflow: hidden;
}

.capcode { 
  font-size: 46px; 
  display: block; 
  -moz-user-select: none;
  -webkit-user-select: none;
  user-select: none; 
  cursor: default;
  letter-spacing: 1px;
  color: #ccc;
  font-family: 'Roboto Slab', serif;
  font-weight: 100;
  font-style: italic;
}

.ReloadBtn { 
  background:url('https://cdn3.iconfinder.com/data/icons/basic-interface/100/update-64.png') left top no-repeat;   
  background-size : 100%;
  width: 32px; 
  height: 32px;
  border: 0px; outline none;
  position: absolute; 
  bottom: 30px;
  left : 310px;
  outline: none;
  cursor: pointer; /**/
}

.error { 
  color: red; 
  font-size: 12px; 
  display: none; 
}
.success {
  color: green;
  font-size: 18px;
  margin-bottom: 15px;
  display: none;
}
            .bg-login-image
            {
                background-image: url("./image/for_login.png");
				background-color:#57c5c7;
            }
			body
			{
			background-color: #2d54c6;
			}
			.card
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
			 }
			

        </style>
</head>
<body>

<div class="container" >

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
          <div class="col-lg-6">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4  mb-4">Welcome Back!</h1>
              </div>
              <form class="user">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="user" aria-describedby="emailHelp" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-user" id="pass" placeholder="Password"  required="required">
                </div>
				<div class="form-group">              
				

					<span id="SuccessMessage" class="success">Hurray! Your have successfully entered the captcha.</span>
					<input type="text" id="UserCaptchaCode" class="CaptchaTxtField form-control form-control-user" placeholder='Enter Captcha...'>
					<span id="WrongCaptchaError" class="error"></span>
					<div class='CaptchaWrap'>
					  <div id="CaptchaImageCode" class="CaptchaTxtField">
						<canvas id="CapCode" class="capcode" width="300" height="80"></canvas>
					  </div> 					  
					  <input type="button" class="ReloadBtn" onclick='CreateCaptcha();'>
					</div>

			
                </div>
                <div class="form-group">
                  <div class="custom-control custom-checkbox small">
                    <input type="checkbox" class="custom-control-input" id="customCheck">
                    <label class="custom-control-label" for="customCheck">Remember Me</label>
                  </div>
                </div>
                <a href="#" class="btn btn-primary  btn-block btnSubmit btn-user" onclick="CheckCaptcha();">
                  Login
                </a>
                <hr>
                <a href="index.html" class="btn  btn-block  btn-user " style="background-color:#ea4335;color:white">
                  <i class="fab fa-google fa-fw"></i> Login with Google
                </a>
                <a href="index.html" class="btn btn-user btn-block" style="background-color:#3b5998;color:white">
                  <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                </a>
              </form>
              <hr>
              <div class="text-center">
                <a class="small" href="forgot-password.html">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="hosp_signup.php">Create an Account!</a>
              </div>
			  
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>


</body>


 <script>
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
  $('#CaptchaImageCode').empty().append('<canvas id="CapCode" class="capcode" width="300" height="80"></canvas>')
  
  var c = document.getElementById("CapCode"),
      ctx=c.getContext("2d"),
      x = c.width / 2,
      img = new Image();

  img.src = "https://pixelsharing.files.wordpress.com/2010/11/salvage-tileable-and-seamless-pattern.jpg";
  img.onload = function () {
      var pattern = ctx.createPattern(img, "repeat");
      ctx.fillStyle = pattern;
      ctx.fillRect(0, 0, c.width, c.height);
      ctx.font="46px Roboto Slab";
      ctx.fillStyle = '#ccc';
      ctx.textAlign = 'center';
      ctx.setTransform (1, -0.12, 0, 1, 0, 15);
      ctx.fillText(cd,x,55);
  };
  
  
}
function randomString(length, chars) {
    var result = '';
    for (var i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
    return result;
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
function CheckCaptcha() {
  var result = ValidateCaptcha();
  if( $("#UserCaptchaCode").val() == "" || $("#UserCaptchaCode").val() == null || $("#UserCaptchaCode").val() == "undefined") {
    $('#WrongCaptchaError').text('Please enter code given below in a picture.').show();
    $('#UserCaptchaCode').focus();
    $('#WrongCaptchaError').delay(5000).fadeOut(500);
  } else {
    if(result == false) { 
      $('#WrongCaptchaError').text('Invalid Captcha! Please try again.').show();
      CreateCaptcha();
      $('#UserCaptchaCode').focus().select();
      $('#WrongCaptchaError').delay(5000).fadeOut(500);
    }
    else { 
      $('#UserCaptchaCode').val('').attr('place-holder','Enter Captcha - Case Sensitive');
      CreateCaptcha();
      $('#WrongCaptchaError').fadeOut(100);

      

      var user = $('#user').val();
      var pass = $('#pass').val();

     if( user == "" || pass == "")
  {
      alert("please fill the required feild!");
  }
  else
  {   
    var input = {
        "user" : user,
        "pass" : pass      
      };      
        $.ajax({
        url : 'login_config.php',
        type : 'POST',                
        data : input,              
        beforeSend: function(){
          $("#verify").html("<img  src='./image/103.gif' width='60'>");
        },             
        success: function(response){    
          console.log(response);  
                    
         if(response.flag == '1')
           {             
             window.location.href = "hosp_department.php?hospital=" + response.id + "&id=" + response.rand;                       
           }
           else
           {
             alert("Please Enter Correct Username And Password!");
           }  
    }
    });   
}  

    }
  }  
}
 </script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>
</html>
