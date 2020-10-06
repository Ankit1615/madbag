     <?php
        session_start();
     ?>
          
          
          <div class="main  container">
                <div class="card">
            <div class="card-header" style="background-color: #5cc1e0;">
                PATIENT DETAILS
            </div>
            <form class="container patient">   
            <div class="row">
            <div class="error" id="error"></div>
            <br><br>
                <div class="col-md-6 col-3 col-sm-3 col-lg-2 mt-2">
                 <div class="form-group ">
                Initials<span style="color: red;"> *</span>
                <select class="form-control mt-2" name="intial" id="intial" required="required">
                <option>-select--</option>  
                <option value="Mr" >Mr.</option>
                <option value="Mrs">Mrs.</option>
                <option value="Shri">Shri</option>
                              
                </select>  
                           
            </div>
            
            </div>
            <div class="col-md-6 mt-2 col-9 col-sm-9 col-lg-4">
            First Name<span style="color: red;"> *</span>
            <input type="text" class="form-control" required="required" name="firstname" id="firstname">
            </div>
            <div class="col-md-6 mt-2 col-6 col-sm-6 col-lg-3 ">
           Middle Name
            <input type="text" class=" form-control" id="middlename" name="middlename" >
            </div>
            <div class="col-md-6 mt-2 col-6 col-sm-6 col-lg-3">
            Last Name<span style="color: red;"> *</span>
            <input type="text" class="form-control" required="required" name="lastname" id="lastname">          
            </div>           
            </div>  


             <div class="row">
                <div class="col-md-6 col-6 col-sm-6 col-lg-3">
                 <div class="form-group " required="required">
                Gender<span style="color: red;" class="mt-2"> *</span>
                 <p>
                <label>
                    <input class="with-gap" type="radio" value="male" name="gender"/>
                    <span>Male</span>
                </label>
                
                <label>
                    <input class="with-gap" type="radio" value="female" name="gender"/>
                    <span>Female</span>
                </label>
               
                <label>
                    <input class="with-gap" type="radio" value="other" name="gender"/>
                    <span>Other</span>
                </label>
                </p>  
            </div>
            
            </div>
            <div class="col-md-6 mt-2 col-6 col-sm-6 col-lg-3">
            Date of birth<span style="color: red;"> *</span>
            
            <input type="date" id="birthday"  class="form-control" name="dob">
        
            </div>
            <div class="col-md-6 mt-2 col-12 col-sm-12 col-lg-6 ">
             Father name <span style="color: red;"> *</span>
            <input type="text" class="form-control" required="required" name="fathername" id="fathername">
            </div>
                  
            
                   
            </div> 
            <div class="row mt-3">
            <div class="col-md-6 col-12 col-sm-12 col-lg-6 ">
             Email<span style="color: red;"> *</span>
            <input type="email" class="form-control" required="required" placeholder="abc@gmail.com" name="email" id="email">          
            </div>   
            <div class="col-md-6  col-12 col-sm-12 col-lg-6">
           Address<span style="color: red;"> *</span>            
            <input type="text"  required="required" class="form-control" name="address" id="address"/>        
            </div>
</div>
            <div class="row mt-3">
            <div class="col-md-6 col-6 col-sm-6 col-lg-3 container">
            State <span style="color: red;"> *</span>
            <select name="state" id="state" class="form-control mt-2">
                <option value="Delhi">Delhi</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Goa">Goa</option>
                <option value="Gujarat">Gujarat </option>
                <option value="Haryana">Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Odisha ">Odisha </option>
                <option value="Punjab">Punjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura ">Tripura </option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal </option>
            </select>
            </div>
            <div class="col-md-6  col-6 col-sm-6 col-lg-3">
             Pin code<span style="color: red;"> *</span>
            <input type="number" class="form-control" required="required" name="pin" id="pin">          
            </div> 
            <div class="col-md-6  col-6 col-sm-6 col-lg-6">
            <div class="form-group " required="required">
                    Mobile <span style="color: red;"> *</span>
                    <input type="text" value="<?php  echo $_SESSION['mobile'];?>" class="form-control" name="mobile" id="mobile" disabled>
                </div>             
            </div> 
                </div> 
                <input type="button" id="submit" name="submit" class="btn mb-3" style="background-color: #5cc1e0;" value="Procced" onclick="patient()" >                 
                </div>
            </form>
            </div>
          </div>
  <script>
  
function patient(){  
  var gender = $("input[name='gender']:checked").val();
  var intial = $("#intial").find("option:selected").val();  
  var fname = $('#firstname').val(); 
  var lname = $('#lastname').val(); 
  var middle = $('#middlename').val(); 
  var birth = $('#birthday').val();
  var email = $('#email').val();
  var address = $('#address').val();
  var fathername = $('#fathername').val(); 
  var state = $("#state").find("option:selected").val();
  var pin = $("#pin").val();
  var mobile = $("#mobile").val();  
  var input = {
    "fname": fname,
    "lname" : lname,
    "middle" : middle,
    "email" : email,
    "address" : address,
    "fathername" : fathername,
    "pin" : pin,
    "mobile" : mobile,
    "state" : state,  
    "birth" : birth,
    "intial" : intial,
    "gender" :gender
  };
if(fname == "" || lname == "" || email == "" || address =="" || fathername == "" || pin == "" || mobile == "" || gender == "" || intial == "" || state == "" || pin == "" || birth == "" )
  {
      alert("please fill the required feild!");
  }
  else
  {
    $.ajax({
      type: "POST",
      url: "patient.php",    
      cache: false,
      data : input,
      beforeSend: function(){
        $("#submit").text("Loading...");
      },
      success: function(response){
        $(".book").html(response);
      }
  });
}
}


  </script>