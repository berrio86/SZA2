<?php
	$_GET['orrialdea']="eskaerabidali";
	include 'php/header.php';
	echo('</head>
		<body>');
	include 'php/navigation.php';
?>

<?php 
	include 'dbkonexioak/dbOpen.php';
		
	echo '<div id="section">';

		$izena= $_POST['izena'];
		$mota = "Erabiltzailea";
		$eposta= $_POST['eposta'];
		$pass= $_POST['pasahitza'];
		
		

		$emaitza = mysqli_query($db,"SELECT * FROM Erabiltzailea WHERE Email='$eposta'"); //ikusi ea erabiltzailea existitzen den
		if (mysqli_num_rows($emaitza) > 0) {
			echo "<div>Dagoeneko existitzen da $eposta duen erabiltzaile bat. Mesedez, sartu ezazu beste posta-elektroniko helbide bat.</div> </br></br>";
		} else { //ez da erabiltzailerik aurkitu email horrekin

			//ikusi ea REGEXP pasatzen duen
			$esp_izena= filter_var($izena, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/([A-Z]{1}[a-z ]{1,})*/")));
			$esp_mota = filter_var($mota, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^(Erabiltzailea|Administratzailea)$/")));
			$esp_email= filter_var($eposta, FILTER_VALIDATE_EMAIL); 
			$esp_pass= filter_var($pass, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/.{6,}$/")));
			
		
			if((!$esp_izena==false) && (!$esp_mota==false) && (!$esp_email==false) && (!$esp_pass==false)) {
		
				//tauletan datuak gordetzea
				$query="INSERT INTO ErabiltzaileBerria (Izena, Mota, Email, Pasahitza) VALUES ('$izena', '$mota', '$eposta','$pass')";
				if(mysqli_query($db,$query)){
					echo "<div>Kaixo $izena, hurrengo datuak gordeko dira datubasean:</br></br>
					Izena: $izena </br>
					Eposta: $eposta</br>
					Pasahitza: $pass </br>";
					
					echo'Zure eskaria egoki burutu da.</br>'; 
					echo'Administratzaileak ahalik eta azkarren onartu edo ukatuko du zure eskaria.</br></div>';
					
					//emaila bidali
					$to      = 'iberriochoa001@ikasle.ehu.eus';
					$subject = 'Eskari berria';
					$message = 'Kaixo administratzaile jauna,
					Kamera aplikazioan eskari berri bat duzu. Prozesatu ezazu lehen bait lehen, mesedez.';
								
					$headers = "From: $eposta" . "\r\n" .
						'Reply-To: iberriochoa001@ikasle.ehu.eus' . "\r\n" .
    					'X-Mailer: PHP/' . phpversion();
					
					if(mail($to, $subject, $message, $headers)){
						echo'<div>Email bat bidali zaio administratzaileari eta ahal bezain azkarren prozesatuko da zure eskaria.</div>';
					}else{
						echo "<div>Errore bat egon da administratzaileari emaila bidaltzean.</br>";
						echo"Hala ere zure eskaria gauzatu da eta ahal bezain laster prozesatuko da.</div>";
					}	
					
				}else{
					//Errorea datua datuak basean sartzean
					echo '<div>Akatsen bat egon da zure eskaera prozesuan.</br>';
					echo 'Mesedez, jar zaitez administratzailearekin harremanetan.</br></div>';
				}
				
			}else{
				echo "Datuak jasotzean errorea(k):</br>";
				if($esp_izena==false)
					echo "- Izena letra larriz hasi behar da eta ondoren letra xehez jarraitu. </br>"; 
				if($esp_email==false)
					echo "- Balizko email helbide bat izan behar da. </br>"; 
				if($esp_pass==false)
					echo "Pasahitzak gutxienez 6 letrako luzeera izan behar du.</br></br>";
				
				echo "Jasotako datuak ez dira zuzenak. Mesedez, saiatu berriro.";
			}
			
		}
		
	
	echo'</div>';
	include 'dbkonexioak/dbClose.php';
?>
<?php include 'php/footer.php'; ?>