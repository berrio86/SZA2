<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Web kamera</title>
<link rel="stylesheet" type="text/css" href="css/login.css"/>	

</head>

<body>
<div class='login'>
	<div class="login-header">
		<h1>Logeatu zaitez</h1>
	</div>
	
	<form id="logeatu" method="post" action="index.php" enctype="multipart/form-data">
		<div class="login-form">
  			<h3>Posta-elektronikoa:</h3> 
  			<input type="text" name="eposta" title="Sartu zure emaila."/><br/>
			<h3>Pasahitza:</h3>
 			<input type="password" name="pasahitza" title="Sartu zure pasahitza."/><br/><br/>
			<input type="submit" class="login-button" name="button" value="Sartu"/>
			<a class="no-access" href="erregistratu.php">Erregistratu</a><br/>
			<a class="no-access" href="pasahitzaBerreskuratu.php">Pasahitza ahaztu al duzu??</a>
			</div>
	</form>
	<img src="irudiak/88568.gif" alt="kamera gif" class="image-kamera"/>
</div>
<?php 

if (isset($_POST['eposta'])){
	include 'dbkonexioak/dbOpen.php';
	session_start();
	
	$eposta= $_POST['eposta'];
	$pass= $_POST['pasahitza'];
	
	//datu basera galdeketa egin	
	$erabiltzaileak = "SELECT * FROM Erabiltzailea WHERE Email='$eposta' AND Pasahitza='$pass'";
	$emaitza = $db->query($erabiltzaileak); 
	$lerroa = $emaitza->fetch_array(MYSQLI_BOTH);
	
	//erantzuna hutsa al den frogatu
	if(empty($lerroa)){
		//errore stringa sortu JQuery inportatu
		$hasiera="<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
				<div class='error-page'>
				<div class='try-again'>";
	
		//errore stringaren amaiera sortu eta script bati erreferentzia gehitu bukaeran
		$bukaera="Errorea: Saiatu berriro?
				</div>
			</div>
			<script src='js/login.js'></script>";
		//errorea pantailaratu
		echo($hasiera."Pasahitza edo erabiltzaile izen okerra.</br>".$bukaera);
		
	}else{
		//dena ondo badoa saio aldagaiei beharrezko balioak eman
		$izena=$lerroa['Izena'];
		$mota=$lerroa['Mota'];
		
		$_SESSION['izena']=$izena;
		$_SESSION['eposta']=$eposta;
		$_SESSION['erabiltzaileMota']=$mota;
		header("Location:hasiera.php");
	}
	
	include 'dbkonexioak/dbClose.php';
}	
?>  


</body>
</html>
