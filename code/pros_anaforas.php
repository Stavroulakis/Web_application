
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

$thesi= $_POST['thesi'];
$kathgoria= $_POST['kathgoria'];
$lin = $_POST['lin'];
$lon = $_POST['lon'];
$sxolia= $_POST['sxolia'];
$date1 = date('y-m-d h:i:s');


$query = "INSERT INTO anafores(perigrafh,lin,lon,thesi,sxolia,username,katastash,date_eisodou)
VALUES ('$kathgoria','$lon','$lin','$thesi','$sxolia','$_SESSION[username]','ενεργό','$date1')";
 $data = mysqli_query($con,$query);
$result = mysqli_query($con,"SELECT * FROM anafores WHERE thesi='$thesi' ");
  while($row = mysqli_fetch_array($result)){
            $aID = $row['aID'];
   }

//pinakas gia onomata photo
$eikones=array();
//pinakas gia to path twn photo
$path=array();

//dhmiourgia fakeloy gia ayton p katacwrise tn anafora
if(!file_exists("eikones/".$_SESSION['username'])){
            mkdir("eikones/".$_SESSION['username']);
          }
//fakelos gia kathe anafora
mkdir("eikones/".$_SESSION['username']."/".$aID);
//to path
$pa="eikones/".$_SESSION['username']."/".$aID;
//tupos eikonwn pou dexomaste
$epitrepto = array("gif","tif", "tiff", "jif", "jfif", "jp2", "jpx", "j2k", "j2c", "fpx", "pcd", "jpeg", "jpg", "png");

$eikones= array("pic1","pic2","pic3","pic4");

for( $i=0; $i<4 ; $i++){
  $temp = explode(".", $_FILES[$eikones[$i]]["name"]);//xwrizete to arxeio se onoma kai epektash
  $epektash = end($temp);//epektash

//elenxoume to arxeio 
  if ((($_FILES[$eikones[$i]]["type"] == "image/tif")
              || ($_FILES[$eikones[$i]]["type"] == "image/tiff")
              || ($_FILES[$eikones[$i]]["type"] == "image/gif")
              || ($_FILES[$eikones[$i]]["type"] == "image/jpeg")
              || ($_FILES[$eikones[$i]]["type"] == "image/jif")
              || ($_FILES[$eikones[$i]]["type"] == "image/jfif")
              || ($_FILES[$eikones[$i]]["type"] == "image/jp2")
              || ($_FILES[$eikones[$i]]["type"] == "image/jpx")
              || ($_FILES[$eikones[$i]]["type"] == "image/j2k")
              || ($_FILES[$eikones[$i]]["type"] == "image/j2c")
              || ($_FILES[$eikones[$i]]["type"] == "image/fpx")
              || ($_FILES[$eikones[$i]]["type"] == "image/pcd")
              || ($_FILES[$eikones[$i]]["type"] == "image/png"))  
              && in_array($epektash, $epitrepto)) {

              if ($_FILES[$eikones[$i]]["error"][0] > 0) {
              echo "Error: " . $_FILES[$eikones[$i]]["error"][0] . "<br>";
              } 
              else {
                move_uploaded_file($_FILES[$eikones[$i]]["tmp_name"], $pa."/".$_FILES[$eikones[$i]]["name"]);       
              $path[$i] =  $pa."/" . $_FILES[$eikones[$i]]["name"];
              $eikones[$i] = $_FILES[$eikones[$i]]["name"];

              }
 //an dn exoyn anebei 4 photo
  } else if(($_FILES[$eikones[$i]]["name"] == "")){  
              $eikones[$i] = "";
  }
  if($eikones[$i] != ""){
    $p=$path[$i];
    $query = "INSERT INTO photos(filename,user,images_path,aID)
VALUES ('$thesi','$_SESSION[username]','$p','$aID')";
 $data = mysqli_query($con,$query);
    
  }

}

    if($_SESSION['userid']==1){
        header('location:index.php');
    }
    else{
        header('location:index.php');
    }
  

 
  ?>