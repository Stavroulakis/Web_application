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
        <li class="active"><a href="index.php">ΑΡΧΙΚΗ</a></li>
      </ul> 
    </div>
  </div>
</nav>

<?php
header('Content-Type: text/html; charset=utf-8');
$id=$_GET['id'];
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
 

$result = mysqli_query($con,"SELECT * FROM anafores  WHERE aID=$id ");
$row = mysqli_fetch_array($result);
?>
<div id="section">
<?php  


echo '<h4>'."<font color='red'>Όνομα :  </font> ".'</h4>';
echo  '<h4>'.$row['thesi'].'</h4>';
echo '<br>';
echo '<h4>'."<font color='red'>Όνομα Χρήστη:  </font> ".'</h4>';
echo  '<h4>'.$row['username'].'</h4>';
echo '<br>';
echo '<h4>'."<font color='red'>Περιγραφή :   </font> ".'</h4>';
echo '<h4>'.$row['perigrafh'].'</h4>';
echo '<br>';
echo '<h4>'."<font color='red'>Κατάσταση :   </font> ".'</h4>';
echo '<h4>'.$row['katastash'].'</h4>';
echo '<br>';
echo '<h4>'."<font color='red'>Σχόλια :   </font> ".'</h4>';
echo '<h4>'.$row['sxolia'].'</h4>';
?>
</div>
<?php  

$result = mysqli_query($con,"SELECT * FROM photos  WHERE aID=$id ");
$counter=0;
while($row = mysqli_fetch_array($result)){
$image[$counter]=$row['images_path'];
$counter++;

}

if( $counter!=0){

?>


<div style="float:right" id="carousel-example-generic" class="carousel slide col-md-5" data-ride="carousel"  >
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    
    <div class="item active">
      <img  src="<?php echo $image[0] ?>" class="img-responsive" alt="Responsive image">
    </div>
      <?php for($i=1 ; $i<$counter ; $i++){ ?>
    <div class="item ">
      <img  src="<?php echo $image[$i] ?>" class="img-responsive" alt="Responsive image">
    </div>
  
      <?php } ?>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div>


<?php } ?>

  
  </body>
</html>



