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
// Selecting Database
if(!mysqli_select_db($con,"web_project_am5076")){
echo "error στην επιλογή της βάσης";
}

$name= $_POST['name'];
$katastash = $_POST['katastash'];
$sxolia = $_POST['sxolia'];
$date2 = date('y-m-d h:i:s');
$query= mysqli_query($con,"UPDATE anafores SET katastash='$katastash',sxolia='$sxolia',luths='$_SESSION[username]',date_lyshs='$date2' WHERE thesi= '$name'");

if($query)
 {
 echo "H Αναφορά Τροποποιήθηκε";
 	
 	header('location:index.php');
 }
 
else{
echo "H Αναφορά   ΔΕΝ Τροποποιήθηκε!!!!!!!!";} 

 ?>



