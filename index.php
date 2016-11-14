<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Web kamera</title>

</head>

<body>
	<h1>Logeatu zaitez</h1>
	<form id="logeatu" name="logeatu" method="POST" action="index.php" enctype="multipart/form-data">
		<div class="login-form">
  			<h3>Posta-elektronikoa:</h3> 
  			<input type="text" name="eposta" title="Sartu zure emaila." placeholder="E-mail"><br>
			<h3>Pasahitza:</h3>
 			<input type="password" name="pasahitza" title="Sartu zure pasahitza." placeholder="Password"><br><br>
			<input type="submit" class="login-button" name="button" value="Bidali">
			<a class="no-access" href="pasahitzaBerreskuratu.php">Pasahitza ahaztu al duzu??</a>
			</div>
	</form>

</body>
</html>
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
		header("Location:hasiera.php");
    	exit;
	}
	include 'dbkonexioak/dbClose.php';
}	
?>  
