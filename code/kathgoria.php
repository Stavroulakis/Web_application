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

 $energia = $_POST['energia'];
 $katname= $_POST['katname'];
 $katname2= $_POST['katname2'];
 
if($energia=='Εισαγωγή'){
	$query = "INSERT INTO kathgoria(katname)VALUES ('$katname')";
 	$data = mysqli_query($con,$query);
	if($data)
 	{
 		echo "Η εισαγωγή κατηγορίας έγινε";
 		
 		include("index.php");
 	} 
}
if($energia=='Διαγραφή'){
	$query= mysqli_query($con,"DELETE FROM kathgoria WHERE katname='$katname'");
	echo "Η διαγραφή κατηγορίας έγινε";
 		
 		include("index.php");
}	

if($energia=='Τροποποίηση'){
		$query =mysqli_query($con,"UPDATE kathgoria SET katname='$katname2'  WHERE katname='$katname' ");
 		echo "H κατηγορία τροποποιήθικε";
		include("index.php"); 
}


 ?>