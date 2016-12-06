<?php
$target_dir = "xml/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$bl=simplexml_load_file($_FILES["fileToUpload"]["tmp_name"]);
//echo $bl->getName() . "<br>";

include "dbkonexioak/dbOpen.php";
$kamerataulaborratu = "DELETE FROM Kamera" ;
$result = $db->query($kamerataulaborratu);

foreach($bl->children() as $child)
  {
$ip = $child->ip;
$eposta = $child->eposta;
$kamerasartu = "INSERT INTO Kamera VALUES ('$ip','$eposta')" ;
$result = $db->query($kamerasartu);

  }
header("Location:xmldeskargatu.php");

include "dbkonexioak/dbClose.php";
?>

