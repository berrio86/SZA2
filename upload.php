<?php
$target_dir = "xml/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if (empty($_FILES["fileToUpload"]["name"]))
{header("Location:xmldeskargatu.php");
exit;
}
$bl=simplexml_load_file($_FILES["fileToUpload"]["tmp_name"]);
echo $bl->children()[0]->getName();
if(($bl->getName()!='kamerak')||($bl->children()[0]->getName()!='kamera')||($bl->kamera[0]->children()->getName()!='ip')||($bl->kamera[0]->children()[1]->getName()!='eposta')){
	header("Location:xmldeskargatu.php");
	exit;
}
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

