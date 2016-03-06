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

 $name = $_POST['name'];
 $query= mysqli_query($con,"DELETE FROM anafores WHERE thesi='$name'");
 echo "Η διαγραφή αναφοράς έγινε";
 include('diaxeirish.html');

 ?>