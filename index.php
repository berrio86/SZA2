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
			<a class="no-access" href="pasahitzaBerreskuratu.php">Pasahitza ahaztu al duzu??</a>
			</div>
	</form>
	<img src="irudiak/88568.gif" alt="kamera gif" class="image-kamera"/>
</div>
	<?php 

if (isset($_POST['eposta'])){
	include 'dbkonexioak/dbOpen.php';
	session_start();
	if($_SERVER['REQUEST_METHOD'] == 'GET')  { //get eskaera landu
			null;
		} else { //post eskaera landu	
			$eposta= $_POST['eposta'];
			$pass= $_POST['pasahitza'];
	}
	//errore mezuak sortu
	/*$hasiera="<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
				<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
			<div class='error-page'>
				<div class='try-again'>";
	
	$bukaera="Errorea: Saiatu berriro?
				</div>
			</div>
			<script src='js/signIn.js'></script>";*/
	
	
	
	$administratzaileak = "SELECT * FROM Administratzailea WHERE Emaila='$eposta' AND Pasahitza=$pass";
	$emaitza = $db->query($administratzaileak); 
	
	
	if(empty($emaitza)){
		//begiratu pasahitza bat datorren ala ez
		$erabiltzaileak = "SELECT * FROM Erabiltzailea WHERE Emaila='$eposta' AND Pasahitza=$pass";
		$emaitza = $db->query($erabiltzaileak); 
		//$user = $emaitza->fetch_array(MYSQLI_BOTH);
		if(empty($emaitza)){
			//guest ezarri erabiltzaile bezala
			echo ("Erabiltzaile edo pasahitz okerra"); 
		}else{
			//konexioaren emaila ezarri
			$_SESSION['eposta']= $eposta;
			$_SESSION['erabiltzaileMota']= 'user';
			header("Location:hasiera.php");
	    	exit;
		}
	}else{
		//konexioaren emaila ezarri administratzaile bezala
		$_SESSION['eposta']= $eposta;
		$_SESSION['erabiltzaileMota']= 'admin';
		header("Location:hasiera.php");
    		exit;
	}
	
	include 'dbkonexioak/dbClose.php';
}	
?>  


</body>
</html>
