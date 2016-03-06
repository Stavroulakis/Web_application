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
 
        .p{
            border-bottom: 5px solid ;
            color: #FFFFFF;    
          }

      body { background: url('beach.png') no-repeat   fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            }
      #section {
              width:300px;
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
         <li class="active"><a href='diaxeirish.html'>ΕΠΙΣΤΡΟΦΗ ΣΤΗΝ ΔΙΑΧΕΙΡΙΣΗ</a></li>
        
        
      </ul>
      
      
    </div>
  </div>
</nav>

<form  enctype=multipart/form-data class="col-lg-4" method="post" action="allagh_anaforas.php"  style="float:center" >
    <div class="form-group">
          <select class="form-control" name="katastash" >
            <option >ενεργό </option>
            <option >μη-ενεργό</option>
          </select>
    </div>


<div class="form-group">
        <input type="text" class="form-control input-lg" placeholder="Όνομα Αναφοράς" name="name">    
 </div>

<div class="form-group">
  <textarea class="form-control" rows="5" name="sxolia" placeholder="Σχόλια"></textarea>
  <button class="btn btn-primary btn-lg btn-block">Tέλος</button>
</div>

 </form>
  
  
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

$result3 = mysqli_query($con,"SELECT * FROM anafores WHERE katastash='ενεργό' ");
$count=1;
?>
<div id="section">
<?php
while($row3 = mysqli_fetch_array($result3)){
	
  echo "<font color='green'>Αναφορά ($count) : </font> ";
  echo $row3['thesi'];
	echo '<br>';
	echo "<font color='green'>Κατάσταση : </font> ";
  echo $row3['katastash'];
  echo "<div class=\"p\"></div>";
  echo '<br>';
  $count= $count+1;
}

?>

</body>
</html>