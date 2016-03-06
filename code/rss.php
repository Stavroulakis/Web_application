<?xml version="1.0"?>
<rss version="2.0">
  <channel>
    <title>CLEANBEACH</title>
    <link> http://localhost/newproject</link>
    


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
$result = mysqli_query($con,"SELECT * FROM anafores  ORDER BY aID  DESC LIMIT 20");

$counter=1;
while($row = mysqli_fetch_array($result)){

   echo " <item>";
          echo "\n"."<title>".$counter.".".$row['thesi']. "</title>";
          echo "\n"."<link>"." http://localhost/newproject/anafora.php?id=".$row['aID']."</link>";
         
  echo "</item>";
$counter++;

}

  ?>

  </channel>
</rss>






  



















