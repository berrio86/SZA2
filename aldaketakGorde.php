<?php 
session_start();
if (isset($_POST['izena'])&& isset($_POST['pasahitza'])){
	include 'dbkonexioak/dbOpen.php';
	$izena= $_POST['izena'];
	$pass= $_POST['pasahitza'];
	$eposta=$_POST['eposta'];
	
	$sqlekintza="UPDATE Erabiltzailea SET Izena='$izena', Pasahitza='$pass' WHERE Email='$eposta'";
	$emaitza=$db->query($sqlekintza);
	if(!$emaitza) {
		$message = "Errore bat egon da datuak eguneratzea: ".$db->error;
	} else {
		$_SESSION['izena']=$izena;
		$message = "Zure datuak eguneratuak izan dira. Onartu berbideratzeko";
	}
	echo "<script type='text/javascript'>alert('$message');</script>";
	//header("Location:kontuaKudeatu.php");
	include 'dbkonexioak/dbClose.php';
}
?>