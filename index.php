
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
    <link rel="stylesheet" href="main.css"> 
    <link rel="icon" href="./image/25.gif" type="image/gif" sizes="16x16">   
      <!--Import Google Icon Font-->
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
        *{
          margin:0;
          padding:0;
        }
        
         .patt{
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
<?php

include 'nav.php';
?>
    <div class="bg-img ">  
      <div class="container"> 
        <div class="content">
           <p class="first_para "> This is a complete solution that can be deployed and customized for any hospital or health care institution, providing your patients with the service they expect to find in state of the art medical institutions</p>                             
           <nav>
           <!--   <div class="nav-wrapper">
                <form method="post">
                  <div class="input-field z-depth-5">
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                    <input id="search" class="autocomplete" autocomplete="off" type="search" required placeholder="Search for a hospital . . . . ">
                    
                    <i class="material-icons">close</i>
                  </div>
                </form>
              </div>
-->             <div class="nav-wrapper">
              <form method="post">
                <div class="input-field">
                  <input id="search" type="search" required class="autocomplete" autocomplete="off" placeholder="Search for a hospital . . . . ">
                  <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                  <i class="material-icons">close</i>
                </div>
              </form>
            </div>
            </nav>
            <div class="app-btn">
            <a href="appointment.php" class="z-depth-5" style="padding:12px;border-radius:5px;display:flex;background: linear-gradient(to right, #01074c, #1babd7);color:white;font-size:20px;text-decoration:none;font-family:  'Caladea', serif;"> Book Appointment Now</a>
            </div>
        </div>        
        </div>
    </div>
    

    <div class="main">
      <div class="why">            
        <div class="why-content">
          <div class="container">
          <div class="ui horizontal head divider bg-white" style="margin:60px 0 60px 0;font-size:15px">
      Why book a appointment with us?
        </div>
            <div class="row" >
              <div class="col-md-6 col-6 col-sm-6 col-6 col-lg-6" data-aos="zoom-in-up">
                <div class="alert alert-success" role="alert">
                  
                    <div class="row">
                      <div class="col-md-3 col-lg-3 " >
                        <img src="/image/free.png" alt="" >
                      </div>
                      <div class="col-md-9  col-lg-9 ">
                        <h4 class="alert-heading"> Hassle-Free Booking </h4>
                  <p>For your first visit to hospital, registration and appointment with doctor is made simpler. All you have to do is verify yourself using Aadhaar Number, Select Hospital and Department, Select date of Appointment and receive SMS for Appointment.</p>                 
                      </div>
                    </div>
                    
                </div>
              </div>
              <div class="col-md-6 col-6 col-sm-6 col-lg-6" data-aos="zoom-in-up">
                <div class="alert alert-success" role="alert">
                  <div class="row">
                    <div class="col-md-3 col=lg-3">
                      <i class="fas fa-user-md fa-6x" style="color: #0db7c4;"></i>
                    </div>
                    <div class="col-md-9 col-lg-9 pb-4">
                      <h4 class="alert-heading"> The Best Doctor </h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet, rem! Ut fugiat, soluta doloribus, numquam voluptas excepturi sapiente animi iure necessitatibus laudantium, corrupti rem a! Amet saepe modi labore libero.</p>
               
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row r2">
              <div class="col-md-6 col-6 col-sm-6 col-6 col-lg-6" data-aos="zoom-in-up">
                <div class="alert alert-success" role="alert">
                  
                    <div class="row">
                      <div class="col-md-3 col-lg-3">
                        <i class="far fa-hospital fa-6x" style="color: #0db7c4"></i>
                      </div>
                      <div class="col-md-9  col-lg-9 ">
                        <h4 class="alert-heading"> Hospital On Boarding </h4>
                  <p>Hospitals can come on board this platform and provide their appointment slots for online booking by patients. The system facilitates Hospitals to easily manage their registration and appointment process and monitor the flow of patients.</p>                 
                      </div>
                    </div>
                    
                </div>
              </div>
              <div class="col-md-6 col-6 col-sm-6 col-lg-6 " data-aos="zoom-in-up">
                <div class="alert alert-success" role="alert">
                  <div class="row">
                    <div class="col-md-3 col-lg-3">
                      <i class="fas fa-tachometer-alt fa-6x" style="color: #0db7c4"></i>
                    </div>
                    <div class="col-md-9 col-lg-9">
                      <h4 class="alert-heading"> Dashboard Reports </h4>
                <p>Total number of Hospitals for which appointment can be taken through web along with their departments for which online appointment can be taken can be seen in reports. Detail reports showing information about New and Old patients taking appointment through this portal can seen.</p>
               
                    </div>
                  </div>
                </div>
              </div>
            </div>
              </div>
              </div>
              </div>            
      </div>
<!--
      <div class="hospital">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-6 col-sm-12 ">
              <div class="img-container dis">
                <img src="/image/for_login.png" alt="">
                <p > Every Hospital has moved online, why not you?</p>
              </div>          
            </div>
            <div class="col-12 col-md-6 col-lg-6 col-sm-12">
              <div class="hospital_content">
               <p>Every Hospital has moved online, why not you?</p>
               <div class="row">
                 <div class="col-md-6 col-lg-6 col-sm-6 col-6 ">
                  <button ><a href="hosp_signup.php">hospital join here</a></button>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-6 col-6 ">
                  <button><a href="login_hosp.php">hospital Login here</a></button>
                 </div>
               </div>
              
              </div>          
            </div>
          </div>
        </div>
-->
<div class="patt" >
<div class="card container mt-5 mb-5 hosp" style="height: 450px; " data-aos="zoom-out" data-aos-offset="200"  data-aos-duration="800">
  <div class="row">
    <div class="col-12 col-md-4 col-lg-6 col-sm-12 d-none d-lg-block d-md-block" style="background-color: #57c5c7;height: 450px;">
    <img style="padding:80px;" src="./image/for_login.png" alt="">
    </div>
    <div class=" col-md-6 ">
      <div class="card-body hos">       
        <p class="mb-5" style="font-size:20px;padding-top:110px;color: #57c5c7;font-weight:500" >Every Hospital has moved online, why not you?</p>
        <div class="row">
                 <div class="col-md-6 col-lg-6 col-sm-6 col-6">
                  <button class="btn btn-large" style="background-color: #159cde; "><a href="hosp_signup.php" style="color:white;text-decoration:none;">hospital join here</a></button>
                 </div>
                 <div class="col-md-6 col-lg-6 col-sm-6 col-6 ">
                  <button class="btn btn-large" style="background-color: #159cde; "><a href="login_hosp.php" style="color:white;text-decoration:none;">hospital Login here</a></button>
                 </div>
               </div>
      </div>
    </div>
</div>
  </div>
</div>
      </div>
      <div class="dash mb-5 mt-5">
        <div class="container">
        <div class="ui horizontal divider bg-white mb-5 " style="margin:0 0 60px 0;font-size:19px">
            HIGHLIGHTS
        </div>
        <div class="row">
        
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 my-3" data-aos="zoom-out" data-aos-offset="120"  data-aos-delay="200">
            <div class="card  h-100 pt-3" style="border:5px solid #4e73df;border-top:none;border-right:none;border-bottom:none;border-radius:10px;">
              <div class="card-body ">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold  text-uppercase mb-2" style="color:#4e73df;">number of hospital</div>
                    <?php

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$s = 0;
$sql="SELECT * FROM id_proof";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
    $s++;
}
$r = 0;
$sq="SELECT * FROM choose_hosp";
$result1=mysqli_query($conn,$sq);
while($row1=mysqli_fetch_array($result1))
{
    $r++;
}
$l =0;
$today = date("d-m-y");
$sqli="SELECT * FROM id_proof";
$result2=mysqli_query($conn,$sqli);
while($row2=mysqli_fetch_array($result2))
{
    if($today == $row2[4])
    {
        $l++;
    }
   
}

?>
  

                    
                    <div class="h5 mb-0 font-weight-bold" style="color:grey;font-weight:800"><?php echo $r; ?></div>
                  </div>
                  <div class="col-auto" >
                  <i class="far fa-hospital fa-3x" style="color:grey;font-weight:500"></i>
                  </div> 
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 my-3" data-aos="zoom-out" data-aos-offset="120"  data-aos-delay="400">
            <div class="card h-100 pt-3" style="border:5px solid #1cc88a;border-top:none;border-right:none;border-bottom:none;border-radius:10px;">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold  text-uppercase mb-1" style="color:#1cc88a;">
APPOINTMENTS TAKEN TODAY</div>
                    <div class="h5 mb-0 font-weight-bold " style="color:grey;font-weight:900;border-left-color:red"><?php echo $l; ?></div>
                  </div>
                  <div class="col-auto">
                  <i class="fas fa-check-circle fa-3x" style="color:grey;font-weight:500"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-4 col-lg-4 my-3" data-aos="zoom-out" data-aos-offset="120"  data-aos-delay="600">
            <div class="card  h-100 pt-3" style="border:5px solid #41bcce;border-top:none;border-right:none;border-bottom:none;border-radius:10px;">
              <div class="card-body">
                <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-uppercase " style="color:#41bcce;">TOTAL ONLINE
APPOINTMENTS</div>
                    <div class="h5 mb-0 font-weight-bold " style="color:grey;font-weight:800"><?php echo $s; ?></div>
                  </div>
                  <div class="col-auto">
                    <i class="fas fa-calendar fa-3x" style="color:grey;font-weight:500"></i>
                  </div>
                </div>
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
      </div>

      
    
    
  
    <!--unwanted-->
    <!--jquiry cdn-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 
    <script>

  $(document).ready(function(){
  	$('input.autocomplete').autocomplete({
        data: {

          <?php
          /*
            include 'config.php';
            $r = "SELECT * FROM choose_hosp";                        
            $result = mysqli_query($conn, $q);       
            $img = "SELECT * FROM tbl_images";
            $result1 = mysqli_query($conn, $img);  
            $row1 = mysqli_fetch_array($result1) ;
            */
            $q = "SELECT *
            FROM choose_hosp
            LEFT JOIN tbl_images
            ON choose_hosp.id = tbl_images.id";            
            $result = mysqli_query($conn, $q); 
          while($row = mysqli_fetch_assoc($result)){
              ?>
              "<?php echo $row['hosp_name']; ?>" : "<?php if(empty($row['name'])) 
                                                          echo null; 
                                                          else 
                                                           echo 'data:image/jpeg;base64,'.base64_encode($row['name'] ).'';?>",
              <?php
            }
          ?>
          "Apple": null,
          "Google": null,
          "Microsoft":'./image/doc2.jpg',
        },
        onAutocomplete: function(val) {
          // Callback function when value is autcompleted.
          var value = $('#search').val().toLowerCase();
          var link = window.open('hospital_details.php?hospital='+ value, '_blank');
          		link.location;
          /*console.log(value);
          $.ajax({
      type: "POST",
      url: "search.php?value="+value, 
      dataType: "json",                  
      success: function(response){    
       console.log(response);       
       if(response.flag == '1')
          {
            window.location.href = "hospital_details.php?hospital=" + response.hosp;                       
          }
          else
          {
            window.location.href = "hosp_signup.php";
          }    
    }

    });
    /*
          if(value == "apple"){
          		var link = window.open('http://google.com', '_blank');
          		link.location;
          }
          */
        },
		});
 
   
    
});


   
    </script>
    <script src="main.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      offset: 150,
      duration: 600,
    });
  </script>
</body>
</html>