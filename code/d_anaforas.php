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
          body { background: url('beach.png') no-repeat  fixed ; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
          }

          .p{
              border-bottom: 5px solid ;
              color: #FFFFFF;
     
            }

          #section2 { 
                width:500px;
                float:left;
                padding:10px;    
                border-style: solid;
                background :#b0c4de;
          }
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
         <li class="active"><a href='logariasmos.html'>ΕΠΙΣΤΡΟΦΗ ΣΤΟΝ ΛΟΓΑΡΙAΣΜΟ</a></li>
        
      </ul>
    </div>
  </div>
</nav>


<?php

session_start();
header('Content-Type: text/html; charset=utf-8');
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
// Selecting Database
if(!mysqli_select_db($con,"web_project_am5076")){
  echo "error στην επιλογή της βάσης";
}

$result2 = mysqli_query($con,"SELECT *  FROM anafores  WHERE username='$_SESSION[username]' ORDER BY aID  DESC  ");

$counter=1;
?>
<div id="section2">   
<?php 

while($row2 = mysqli_fetch_array($result2)){
 
echo   '<h4>' ."<a href=anafora.php?id=".$row2['aID']." >AΝΑΦΟΡΑ($counter)</a>" . "</font>".'</h4>' ;
echo '<h4>'."<font color='green '>Τοποθεσία : </font>".'</h4>';
echo '<h4>'.$row2['thesi'].'</h4>';
echo'<h4>'. "<font color='green'>Περιγραφή : </font>".'</h4>';
echo'<h4>'. $row2['perigrafh'].'</h4>';
echo '<h4>'."<font color='green'>Κατάσταση : </font>".'</h4>';
echo '<h4>'.$row2['katastash'].'</h4>';
echo'<h4>'. "<font color='green'>Σχόλια : </font>".'</h4>';
echo '<h4>'.$row2['sxolia'].'</h4>';
echo "<div class=\"p\"></div>";

	$counter=$counter+1;
}

?>
<div>
</body>
</html>
