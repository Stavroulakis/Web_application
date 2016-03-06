<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CleanBeach</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <script src="js/bootstrap.min.js"></script>
     <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>

      <style type="text/css">
 
           body { background: url('beach.png') no-repeat   fixed; 
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                   -o-background-size: cover;
                  background-size: cover;
                }
          
          #section {
               width:450px;
                float:left;
                 padding:10px;    
                border-style: solid;
                background :#b0c4de;
            }

        #map-container { height: 300px }
    
    </style>
	
</head>
<body>


    
<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
   
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CleanBeach</a>
    </div>

   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href='index.php'>ΕΠΙΣΤΡΟΦΗ ΣΤΗΝ ΑΡΧΙΚΗ</a></li> 
      </ul>
      
      
    </div>
  </div>
</nav>

  
<div id="map-container" class="col-md-4"></div>
 
<p id="demo" style="float:right"></p>

<button onclick="getLocation()" style="float:right">GPS</button>
<script>
var map;
function init_map() {
        
        var var_location = new google.maps.LatLng(35.517357,23.907951);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map-container"),var_mapoptions);
        google.maps.event.addListener(map, 'click', function(event) {
        
        placeMarker(event.latLng);
         });
}

function placeMarker(location) {
  var $latitude = document.getElementById('Latitude');
  var $longitude = document.getElementById('Longitude');
  var marker = new google.maps.Marker({
   draggable:true,
    position: location,
  
  });
  
  google.maps.event.addListener(marker, 'dragend', function(marker){
      var latLng = marker.latLng;
      $latitude.value = latLng.lat();
      $longitude.value = latLng.lng();
    });



  
  marker.setMap(map);
}


google.maps.event.addDomListener(window, 'load', init_map);



 </script>

<?php
header('Content-Type: text/html; charset=utf-8');

session_start();
$con=mysqli_connect("localhost","root","","web_project_am5076");
if(mysqli_connect_error())
{
  echo "errooooor!!!!!!!!!";
  die('Connect Eroor (' . mysqli_connect_errno() . ') '.
  mysqli_connect_error());
}

if (!mysqli_set_charset($con, "utf8")) {
    printf("Error loading character set utf8: %s\n", mysqli_error($con));
}

if(!mysqli_select_db($con,"web_project_am5076")){
echo "error στην επιλογή της βάσης";
}

$counter=0;
  
$result = mysqli_query($con, "SELECT * FROM kathgoria WHERE 1");
while ($row = mysqli_fetch_array($result)){
  $kat[$counter]=$row['katname'];
  
  $counter++;
}
$i=0;
?>


<div id="section">
<form  enctype=multipart/form-data class="col-lg-4" method="post" action="pros_anaforas.php" >
    <div class="form-group">
        <label for="kathgoria">Επιλογή κατηγορίας:</label>
          <select class="form-control" name="kathgoria">
            <?php for($i; $i<$counter ; $i++){ ?>
            <option ><?php echo $kat[$i]; ?> </option>
            <?php } ?>
          </select>
    </div>

    <div class="form-group">
                    <label for="InputEmail">Όνομα</label>
                    <div class="input-group">
                        <input type="text" class="form-control"  name="thesi" >

                    <label for="InputName">Latitude</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="lin" id="Latitude"     >
                       
                    </div>
                    <label for="InputEmail">Longitude</label>
                    <div class="input-group">
                        <input type="text" class="form-control"  name="lon" id="Longitude"  >
                       
                    </div>
                    <label for="InputEmail">Περιγραφή</label>
                    <div class="input-group">
                        <input type="text" class="form-control"  name="sxolia" >
                       
                    </div>
                    <input type="file" name="pic1" capture="camera" >
                    <input type="file" name="pic2" capture="camera" >
                    <input type="file" name="pic3" capture="camera" >
                    <input type="file" name="pic4" capture="camera" >                  
                    <input type="submit" name="submit" id="submit" value="Προσθηκη Αναφοράς" class="btn btn-primary btn-lg btn-block" >


</form>
<div>
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
    x.innerHTML="Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude;  
$latitude.value = latLng.lat();
      $longitude.value = latLng.lng();
}
</script>


  </body>
</html>



