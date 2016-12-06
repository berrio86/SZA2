
<?php
if (isset($_GET['iphelbidea'])){
	include 'dbkonexioak/dbOpen.php';
	
	
	$ip= $_GET['iphelbidea'];
	$eposta= $_GET['emaila'];
	
	
	//begiratu eposta hori datu basean dagoen ala ez
	$query = "INSERT INTO Kamera VALUES ('$ip','$eposta')";
	$result = $db->query($query); 
	if($result){
		echo $eposta." duen erabiltzaileari ".$ip." IP-dun kamera esleitu zaio</br>";
		echo "Datu baseko sarrera egoki egin da.";
	}else{
		echo "Akats bat egon da datu basera sarrera egitean.</br>";
		echo "Ezin izan da $ip IP helbidea duen kamera $eposta duen erabiltzaileari esleitu.</br>";
		echo "Begiratu ea datu basean IP zenbaki bereko kamerarik dagoen.";
	}

	include 'dbkonexioak/dbClose.php';
	
}

?>  