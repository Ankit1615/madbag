 <!--header-->
        

         
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
                <li><a href="appointment.php"><i class="far fa-calendar-check"></i>BOOK APPOINTMENT</a></li>
                
          </ul>    

          <div class="icon">
    <div class="fixed-action-btn">
  <a class="btn-floating btn-large " style="background-color:  #005ce6;">
    <i class="large material-icons">mode_edit</i>
  </a>
  <ul >
   
    <li id="l1" data-interval="5000"><a class="btn-floating red" href="emergency.php"><i class="material-icons">notifications_active</i></a></li>
    <label for="l1" data-interval="5000" style="color:red;">emergency</label>
    
    <li id="l3"><a class="btn-floating green"><i class="fas fa-pills"></i></a></li>
    <label for="l3">Pharma</label>


    

    <li id="l2"><a class="btn-floating yellow" href="#"  ><i class="fas fa-search-location"></i></a></li>
    <label for="l2">Location</label>
    <li id="l4" ><a class="btn-floating blue "><i class="far fa-hospital"></i></a></li>
    <label for="l4">hospital</label>
  </ul>
    </div>  
    </div>


    <script>
      $("#l2").click(function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }

function showPosition(position) {
    var lat = position.coords.latitude ;
  var lon = position.coords.longitude;
  var settings = {
  "async": true,
  "crossDomain": true,
  "url": "https://eu1.locationiq.com/v1/reverse.php?key=708c6966d676d7&lat=" + lat + "&lon=" + lon + "&format=json",
  "method": "GET"
  

};
$.ajax(settings).done(function (response) 
{  
  var city = response.address.county;
  var country = response.address.country;
  var state = response.address.state;
  window.open('https://www.google.com/maps?ll='+ lat +','+ lon + '&z=17&t=m&hl=en-US&gl=US&mapclient=embed&q='+city+','+state+','+country,'_blank' );
});
}
});
/*
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function showPosition(position) {
    var lat = position.coords.latitude ;
  var lon = position.coords.longitude;
  var settings = {
  "async": true,
  "crossDomain": true,
  "url": "https://us1.locationiq.com/v1/reverse.php?key=708c6966d676d7&lat=" + lat + "&lon=" + lon + "&format=json",
  "method": "GET"
};
$.ajax(settings).done(function (response) 
{
  
  response.preventDefault();
  console.log(response);
});
window.open('https://www.google.com/maps?ll='+ lat+","+lon+"&z=15&t=m&hl=en-US&gl=US&mapclient=embed&q=+bihar", '_blank');

}

/*
function showPosition(position) {
  var lat = position.coords.latitude ;
  var lon = position.coords.longitude;
}
*/

</script>
