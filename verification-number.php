
                    <div class="error" id="error"></div>
                    <div class="success" id="success"></div>                                    
                  <p class="card-text"> PLEASE ENTER ONE TIME PASSWORD SENT ON YOUR MOBILE NUMBER <?php echo $_SESSION['num']; ?></p>                  
                      <input type="text"  maxlength="6" name="verifyotp" id="verifyotp" placeholder="Enter your OTP . . .">
                      <button class="btn mt-4" style="background-color: #5cc1e0;" name="verify" id="verify"  onclick="verifyOTP()">Submit</button>              
                      
                <script>

                 function verifyOTP(){
                    $(".error").html("").hide();
                    $(".success").html("").hide();
                    var otp = $("#verifyotp").val();
                    var getOtp = sessionStorage.getItem("getOtp");
                    if(otp.length == 6 && otp != ""){
                      var input = {
                        "otp": otp,
                        "action" : "verify_otp" ,
                        "getOtp" : getOtp     
                      };
                      $.ajax({
                        // url : 'otp-ver.php',
                        // type : 'POST',                       
                        // data : input,  
                        // beforeSend: function(){
                        //   $("#verify").html("<img  src='./image/103.gif' width='60'>");
                        // },             
                        url : 'otp-ver.php',
                          type : 'POST',                
                          data : input,                              
                          beforeSend: function(){
                            $("#verify").html("<img  src='./image/103.gif' width='60'>");
                          },             
                          success: function(response){    
                          console.log(response);   
                          $(".success").text(response);                                                            
                          if(response == 0)
                          {
                            $(".error").html(response.message);
                            $(".error").show();                              
                          }
                          else
                          {
                            $(".book").load("book.php");
                          }
                        }   
                      });      
                    }
                    else
                    {
                      $(".error").html('you have entered wrong OTP.');
                      $(".error").show();
                    }
                    console.log(otp);

  }

                </script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>