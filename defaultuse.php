<!DOCTYPE html>
<html>
<head>
    
</head>
<body>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>

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
  console.log(response);
});
}
/*
function showPosition(position) {
  var lat = position.coords.latitude ;
  var lon = position.coords.longitude;
}
*/

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
