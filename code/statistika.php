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

?>

