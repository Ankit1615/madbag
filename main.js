$(document).ready(function(){
    $('.sidenav').sidenav();
  });

  

  $(document).ready(function(){
    $('.tap-target').tapTarget();
  });
        
  
  $(document).ready(function(){
    $('.fixed-action-btn').floatingActionButton();
  });
      

  var element1 = document.querySelector("label[for=l1]");
  $(element1).css("display", "none");                     //$(selector).hover(inFunction,outFunction)
  $("#l1").hover(function(){                            //remmember
    $(element1).css("display", "block");
    }, function(){
    $(element1).css("display", "none");
  });
  
  var element2 = document.querySelector("label[for=l2]");
  $(element2).css("display", "none");                   //$(selector).hover(inFunction,outFunction)
  $("#l2").hover(function(){                            //remmember
    $(element2).css("display", "block");
    }, function(){
    $(element2).css("display", "none");
  });
  

  var element3 = document.querySelector("label[for=l3]");
  $(element3).css("display", "none");                   //$(selector).hover(inFunction,outFunction)
  $("#l3").hover(function(){                            //remmember
    $(element3).css("display", "block");
    }, function(){
    $(element3).css("display", "none");
  });
  

  var element4 = document.querySelector("label[for=l4]");
  $(element4).css("display", "none");                 //$(selector).hover(inFunction,outFunction)
  $("#l4").hover(function(){                            //remmember
    $(element4).css("display", "block");
    }, function(){
    $(element4).css("display", "none");
  });
  



  
  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
       

  //send otp


document.getElementById('login').click(sendotp);
  function sendotp(){
    $(".alert").html("").hide();
    var number = $("#mobile").val();
    if(number.length == 10 && number != null){
      var input = {
        "mobile_number": number,
        "action" : "sent_otp"      
      };
      $.ajax({
        url : 'otp2.php',
        type : 'POST',
        beforeSend: function(){
          $("#login").html("<img  src='./image/103.gif' width='60'>");
        },       
        data : input,
        success : function (response){
          $(".verify").html(response);
        }
      });      
    }
    else
    {
      $(".error").html('please enter a vaild number!');
      $(".error").show();
    }

  }



  //verify otp

  

 
//patient details


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



