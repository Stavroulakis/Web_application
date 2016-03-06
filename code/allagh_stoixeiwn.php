
<?php
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

if(!mysqli_select_db($con,"web_project_am5076")){
echo "error στην επιλογή της βάσης";
}
mysqli_query($con, "SET NAMES 'utf8'"  ); 
mysqli_query($con,"SET CHARACTER SET 'utf8'");
$userName = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['pass'];
$phone = $_POST['thlefwno'];

$query =mysqli_query($con,"UPDATE xrhstes SET kwdikos='$password' ,email='$email' ,thlefwno='$phone' WHERE username='$userName' ");

 echo "Τα στοιχεία τροποποιήθικαν";
	include("after_login.php");  

mysqli_close($con);
?>
