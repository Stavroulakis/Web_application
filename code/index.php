 <style>
#section {
    width:350px;
    float:left;
    padding:10px;    
  border-style: solid;
  background :#b0c4de;
}
</style>
<?php
header('Content-Type: text/html; charset=utf-8');
///////////////////////////
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
// Selecting Database
if(!mysqli_select_db($con,"web_project_am5076")){
echo "error στην επιλογή της βάσης";
}

$xml = new SimpleXMLElement('<xml/>');
 $result = mysqli_query($con, "SELECT * FROM anafores WHERE 1");

while ($row = mysqli_fetch_array($result)){
 $markers = $xml->addChild('markers');
 $markers->addAttribute('Name',$row['thesi']);
 $markers->addAttribute('lon',$row['lon']);
 $markers->addAttribute('lin',$row['lin']);
 $markers->addAttribute('perigrafh',$row['perigrafh']);
 $markers->addAttribute('katastash',$row['katastash']);
 $markers->addAttribute('id',$row['aID']);
 $markers->addAttribute('date_eisodou',$row['date_eisodou']);
 $markers->addAttribute('date_lyshs',$row['date_lyshs']);
  }
 $fp = fopen("markers.xml","wb");

fwrite($fp,$xml->asXML());

if(!isset($_SESSION['login'])){
	$_SESSION['userid']=0;

	$_SESSION['login']=0;
}
 if($_SESSION['login']==1){
    if($_SESSION['userid']==1){
        include("after_login.php");
    }
    else{
            include("after_login2.php");
    }
 }   
else{
include( "prwto.php");
}

$sunolo=0;
$lumenes=0;
$alutes=0;
$years=0;
$months=0;
$days=0;
$hours=0;
$minutes=0;
$seconds=0;

$result = mysqli_query($con, "SELECT * FROM anafores ");
while($row = mysqli_fetch_array($result)){
    $sunolo++;
}


$result = mysqli_query($con, "SELECT * FROM anafores WHERE katastash='ενεργό' ");
while($row = mysqli_fetch_array($result)){
        $alutes++;
}

$result = mysqli_query($con, "SELECT * FROM anafores WHERE katastash='μη-ενεργό' ");
while($row = mysqli_fetch_array($result)){
        $lumenes++;
         $a=$row['date_lyshs'];
         $b=$row['date_eisodou'];
         $interval = abs(strtotime($a)-strtotime($b));

            $years1 = floor($interval / (365*60*60*24));
            $months1 = floor(($interval - $years1 * 365*60*60*24) / (30*60*60*24));
            $days1 = floor(($interval - $years1 * 365*60*60*24 - $months1*30*60*60*24) / (60*60*24));
            $hours1 = floor (($interval - $years1 * 365*60*60*24 - $months1*30*60*60*24 - $days1*60*60*24) / (60*60));
            $minutes1 = floor(($interval - $years1 * 365*60*60*24 - $months1*30*60*60*24 - $days1*60*60*24 - $hours1*60*60) / 60);
            $seconds1 = $interval - $years1 * 365*60*60*24 - $months1*30*60*60*24 - $days1*60*60*24 - $hours1*60*60 - $minutes1*60;  

        $years=$years +$years1;
        $months=$months +$months1;
        $days=$days +$days1;
        $hours=$hours+$hours1;
        $minutes=$minutes+$minutes1;
        $seconds=$seconds+$seconds1;
}


$years=floor($years/$lumenes);
$months=floor($months/$lumenes);
$days=floor($days/$lumenes);
$hours=floor($hours/$lumenes);
$minutes=floor($minutes/$lumenes);
$seconds=floor($seconds/$lumenes);


mysqli_close($con);
?>

<div id="section"style="float:right" >
   <div class="form-group" >
        <label ><h1 style="color:red">ΣΤΑΤΙΣΤΙΚΑ</h1></label>
        <br></br>
        <label ><h3>ΣΥΝΟΛΙΚΟΣ ΑΡΙΘΜΟΣ ΑΝΑΦΟΡΩΝ</h3></label>
        <h3 style="color:red"> <script> document.write( <?php echo $sunolo ?>); </script> </h3>
        
        <label ><h3>ΣΥΝΟΛΙΚΟΣ ΑΡΙΘΜΟΣ ΑΝΟΙΚΤΩΝ ΑΝΑΦΟΡΩΝ</h3></label>
        <h3 style="color:red"> <script> document.write(<?php echo $alutes?> ); </script> </h3>
     
        <label ><h3>ΣΥΝΟΛΙΚΟΣ ΑΡΙΘΜΟΣ ΕΠΙΛΥΜΕΝΩΝ ΑΝΑΦΟΡΩΝ</h3></label>
        <h3 style="color:red"> <script> document.write( <?php echo $lumenes?>); </script> </h3>
        
        <label ><h3>ΜΕΣΟΣ ΟΡΟΣ ΕΠΙΛΥΣΗΣ ΑΝΑΦΟΡΩΝ</h3></label>
        <h3 style="color:red"> <script> document.write('Χρόνια: ' +<?php echo $years?>+ '<br>Μήνες: '+<?php echo $months?>+ '<br>Μέρες: '+<?php echo $days?>+ '<br>Ώρες: '+<?php echo $hours?>+'<br>Λεπτά: '+<?php echo $minutes?>+ '<br>Δευτερόλεπτα: '+<?php echo $seconds?>); </script> </h3>



    </div>
</div>

