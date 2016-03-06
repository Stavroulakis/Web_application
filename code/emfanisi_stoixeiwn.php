<?php
header('Content-Type: text/html; charset=utf-8');
session_start();
?>
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
    <script  src="registation.js"></script>
 
        <style type="text/css">
                 body { background: url('beach.png') no-repeat   fixed; 
                 -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;   
                }
                
                 #section {
                    width:615px;
                    float:left;
                    padding:10px;    
                    border-style: solid;
                    background :#b0c4de;
                 }
                #section2 {
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
         <li class="active"><a href='logariasmos.html'>ΕΠΙΣΤΡΟΦΗ ΣΤΟΝ ΛΟΓΑΡΙAΣΜΟ</a></li>
        
      </ul>
      
      
    </div>
  </div>
</nav>

 
 <div id="section">   
  
<div class="container" style="float:left" >
    <div class="row">
        <form role="form" method="post" action="allagh_stoixeiwn.php" onsubmit='return formValidation()'>
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="UserName"> UserName(ΙΔΙΟ ΔΕΝ ΑΛΛΑΖΕΙ)</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="user"   required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                   
                    <label for="InputEmail">ΝΕΟ Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control"  name="email"  required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
               
      
                    <label for="Phone">ΝΕΟ ΤΗΛΕΦΩΝΟ</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="thlefwno" >
                    </div>
               
        
                    <label for="InputName">ΝΕΟ Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" name="pass"   required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
               
        
                    <label for="InputPassword">Confirm ΝΕΟ Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control"  name="cpass"  required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <input type="submit" name="submit" id="submit" value="ΤΕΛΟΣ" class="btn btn-primary btn-lg btn-block">
            </div>
        </form>
          
    
    </div>
</div>  
  
</div>

<?php

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

$result = mysqli_query($con,"SELECT * FROM xrhstes  WHERE username='$_SESSION[username]' ");
$row = mysqli_fetch_array($result);
?>
 <div id="section2">   
 <?php   
echo "<font >ΣΤΟΙΧΕΙΑ </font> ";
echo '<br>';
echo "<font color='red'>Ονοματεπώνυμο : </font> ";
echo $row['onomatepwnumo'];
echo '<br>';
echo "<font color='red'>Username :  </font> ";
echo $row['username'];
echo '<br>';
echo "<font color='red'>Password :  </font> ";
echo $row['kwdikos'];
echo '<br>';
echo "<font color='red'>Τηλέφωνο :  </font> ";
echo $row['thlefwno'];
echo '<br>';
echo "<font color='red'>Email :  </font> ";
echo $row['email'];
echo '<br>';

?> 
</div>
</body>
</html>