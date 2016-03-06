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
 $userName = $_POST['username'];
$password = $_POST['pass'];
$query = mysqli_query($con,"SELECT * FROM xrhstes WHERE username='$userName' AND kwdikos='$password'");
$login = mysqli_num_rows($query);
$_SESSION['login']=$login;
	
 if($login==1)
 {
 	$result = mysqli_query($con,"SELECT * FROM xrhstes WHERE username='$userName' AND kwdikos='$password' ");
 	$row = mysqli_fetch_array($result);
 	$_SESSION['username']=$row['username'];
 	$_SESSION['userid']=$row['userID'];
 	echo "Συνδεθήκατε...";
	 header('location:index.php');

}
 else
 {
 echo "Το Email ή Το Password είναι λάθος...!!!!";
	 include("login.html"); 
 }

?>
