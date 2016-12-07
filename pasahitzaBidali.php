<?php
	$_GET['orrialdea']="pasahitzabidali";
	include 'php/header.php';
	echo('</head>');
?>
<?php
	echo('<body>');
	include 'php/navigation.php';
?>
<?php
	echo "blablabla";
	if (isset($_POST['eposta'])){
		
		$eposta=$_POST['eposta'];
        $captcha=$_POST['g-recaptcha-response'];
	
		echo $eposta;
		/*include 'dbkonexioak/dbOpen.php';
			
		
        
		$secretKey = "6LerogsUAAAAAHiIYXlWy9QM40UIUnppNhiXi_Dq";
        $ip = $_SERVER['REMOTE_ADDR'];
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
        $responseKeys = json_decode($response,true);
        	
		//emaila datu basean dagoen begiratu
		$erabiltzaileak = "SELECT * FROM Erabiltzailea WHERE Email='$eposta'";
		echo "$emaitza = $db->query($erabiltzaileak)"; 
		$lerroa = $emaitza->fetch_array(MYSQLI_BOTH);
	
		if(empty($lerroa)){
			echo "<div> Barkatu, sartu duzun emaila ez dago datu basean. Sartu ezazu email egokia.</div>";
		}else{
			//pasahitz aleatorioa sortu 8 karaktererekin
    		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    		$pass = array(); //$pass array bat bezala deklaratu
    		$alphaLength = strlen($alphabet) - 1; 
    		for ($i = 0; $i < 8; $i++) {
        		$n = rand(0, $alphaLength);
        		$pass[] = $alphabet[$n];
    		}
    		$berria=implode($pass); //$pass array-a string bat bihurtu
			
			//emaila bidali
			echo $eposta.'<br>';
			echo $berria.'<br>';
				
				
			$to      = $eposta;
			$subject = 'Pasahitz aldaketa';
			$message = 'Kaixo!! 
			Zure emaila aldatzeko eskaera jaso dugu. Zure pasahitz berria honako hau da:
								pasahitza='.$berria;
				$headers = "From: iberriochoa001@ikasle.ehu.eus" . "\r\n" .
							'Reply-To: iberriochoa001@ikasle.ehu.eus' . "\r\n" .
    						'X-Mailer: PHP/' . phpversion();
				if(mail($to, $subject, $message, $headers)){
					//aldaketak datu basean sartu
					
					$emaitza = mysqli_query($db,"UPDATE Erabiltzailea SET Pasahitza='$berria' WHERE Email='$eposta'"); 
					echo "<div>Dena ondo joan da, orain emaila bidaliko dizugu.</br>
					  Denbora gutxi barru emailik jasotzen ez baduzu, saiatu zaitez berriro.</div>";
				}else{
					echo "<div>Errore bat egon da emaila bidaltzean.</div>";
				}
			
				
        	
		}
		
			include 'dbkonexioak/dbClose.php';*/
		
	}
	
?>
<?php include 'php/footer.php'; ?>