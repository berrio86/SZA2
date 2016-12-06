<?php 
session_start();
if (isset($_GET['izena'])&& isset($_GET['pasahitza'])){
	include 'dbkonexioak/dbOpen.php';
	$izena= $_GET['izena'];
	$pass= $_GET['pasahitza'];
	$eposta=$_GET['eposta'];
	
	$sqlekintza="UPDATE Erabiltzailea SET Izena='$izena', Pasahitza='$pass' WHERE Email='$eposta'";
	$emaitza=$db->query($sqlekintza);
	if(!$emaitza) {
		$message = "Errore bat egon da datuak eguneratzeko prozesuan: ".$db->error;
		echo "<script type='text/javascript'>alert('$message');</script>";
	} else {
		$_SESSION['izena']=$izena;
	}
	header("Location:kontuaKudeatu.php");
	include 'dbkonexioak/dbClose.php';
}
?>