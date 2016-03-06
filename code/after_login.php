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
   
   
    <script type="text/javascript">// <![CDATA[
      $(document).ready(function() {
      $.ajaxSetup({ cache: false }); // This part addresses an IE bug.  without it, IE will only load the first number and will never refresh
      setInterval(function() {
      $('#refresh').load('statistika.php');
      }, 3000); // the "3000" here refers to the time to refresh the div.  it is in milliseconds. 
      });
      // ]]></script>

   
    
  <style>
      #map-container { height: 300px }
   
      body { background: url('beach.png') no-repeat   ; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
     }
    </style>
 
    
    
 </head>
<body>


<nav class="navbar navbar-default" role="navigation"  position="top">
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
        <li class="active"><a href='index.php'>ΑΡΧΙΚΗ</a></li>
         <li><a href='pros_anaforas1.php'>ΠΡΟΣΘΗΚΗ ΑΝΑΦΟΡΑΣ</a></li>
           <li><a href='diaxeirish.html'>ΔΙΑΧΕΙΡΙΣΗ</a></li>
      </ul>
      <div class="nav navbar-nav navbar-right">
        <li><a href='logariasmos.html'>ΛΟΓΑΡΙΑΣΜΟΣ</a></li>
        <li><a href='logout.php'>ΑΠΟΣΥΝΔΕΣΗ</a></li>
      </div>
    
            
    </div>   
  </div>
</nav>


<div class="notif_container" position="right"></div>  
            <div style="float:right" id="share-buttons">
              <a href='rss.php' target="_blank"><img src="feed.jpeg" alt="RSS feed"></a>  
            </div>
 <div id="map-container" class="col-md-4"></div>
  
<div id="refresh"> </div>
    
   
     


<script>    
 
      function loadXMLDoc(filename)
      {
        if (window.XMLHttpRequest)
        {
          xhttp=new XMLHttpRequest();
        }
        else // code for IE5 and IE6
        {
          xhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xhttp.open("GET",filename,false);
        xhttp.send();
        return xhttp.responseXML;
      }

     xmlDoc=loadXMLDoc("markers.xml");
     var x=xmlDoc.getElementsByTagName("markers");
     len=x.length;
     
      function init_map() {
        var var_location = new google.maps.LatLng(35.517357,23.907951);
 
        var var_mapoptions = {
          center: var_location,
          zoom: 14,
          mapTypeId:google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map-container"),var_mapoptions);
         for(i=(len-1) ; i>(len-22) ; i--){
            var point = new google.maps.LatLng(parseFloat(x[i].getAttribute("lon")),parseFloat(x[i].getAttribute("lin")));
              if( x[i].getAttribute("katastash")=='ενεργό'){
                if(i==len-1){
                      var marker = new google.maps.Marker({
                      position:point, 
                      animation:google.maps.Animation.BOUNCE
                      });
                  }
                else{
              
                  var marker = new google.maps.Marker({
                  position:point, 
                  
                  });
                }
              }
              else{
                var marker = new google.maps.Marker({
                position:point, 
                icon:  new google.maps.MarkerImage("http://www.googlemapsmarkers.com/v1/009900/"),     
                      
                });
              }
            
              var infoWindow = new google.maps.InfoWindow;
              name=x[i].getAttribute("Name");
              perigrafh=x[i].getAttribute("perigrafh");
              katastash=x[i].getAttribute("katastash");
              id=x[i].getAttribute("id");
              
              var inf ="<b>" +'Ονομά: ' +"</b>" +name +  "<br>"+ "<b>"+ 'Πρόβλημα : ' +  "</b>" +perigrafh + "<br>"+ "<b>"+ 'Κατάσταση : ' + "</b>" + katastash +"<br><a href=anafora.php?id="+id+">Αναφορά</a>" 
              bindInfoWindow(marker, map, infoWindow, inf);
               marker.setMap(map);
          }
      }
      

      function bindInfoWindow(marker, map, infoWindow,inf) {
        google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(inf);
        infoWindow.open(map, marker);
        });
      }
 
      google.maps.event.addDomListener(window, 'load', init_map);
 
   </script>
  
  </body>
</html>