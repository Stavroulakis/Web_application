<?php
header('Content-Type: text/html; charset=utf-8');
//session_start();
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
		
$fullname = $_POST['name'];
$userName = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['pass'];
$phone = $_POST['thlefwno'];

$query = "INSERT INTO xrhstes(onomatepwnumo,username,kwdikos,thlefwno,email)
VALUES ('$fullname','$userName','$password','$phone','$email')";
 $data = mysqli_query($con,$query);
if($data)
 {
 echo "Η εγγραφή ολοκληρώθηκε...";
 	include("index.php");
 }
 
else{
echo "error στην εγγραφή";} 

?>



