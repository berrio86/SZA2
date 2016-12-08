<?php 
session_start();
//izena eta pasahitza ez badaude ezarrita ezingo da ezer egin
if (isset($_GET['izena'])&& isset($_GET['pasahitza'])){
	include 'dbkonexioak/dbOpen.php';
	$izena= $_GET['izena'];
	$pass= $_GET['pasahitza'];
	$eposta=$_GET['eposta'];
	
	//datu basean aktualizazioa egin
	$sqlekintza="UPDATE Erabiltzailea SET Izena='$izena', Pasahitza='$pass' WHERE Email='$eposta'";
	$emaitza=$db->query($sqlekintza);
	//erroreak kudeatu
	if(!$emaitza) {
		$message = "Errore bat egon da datuak eguneratzeko prozesuan: ".$db->error;
		echo "<script type='text/javascript'>alert('$message');</script>";
	} else {
		$_SESSION['izena']=$izena;
	}
	//bukatzean orrialde honetara berbideratu eta datu basea itxi
	header("Location:kontuaKudeatu.php");
	include 'dbkonexioak/dbClose.php';
}
?>