<div id='page-wrap'>
	<div id="header">
		<a href="hasiera.php"><img class="logo" src="irudiak/logo.png" alt="Aplikazio logo" /></a>	
		<a href="logout.php"><img title="Saioa amaitu" class="botoia"  src="irudiak/logout-icon.png" alt="Log out botoia"/></a>
		<?php
			//goi ezkerraldeko erabiltzaile datuak ezarri
			if($_SESSION['erabiltzaileMota'] == 'Gonbidatua'){
				echo'<a href="#" class="datuak"><span><strong>Izena: </strong>Gonbidatua<br/><strong>Emaila: </strong>Ez dago logeatuta<br/><strong>Mota: </strong>Gonbidatua<br/></span></a>'; 
			}else{
				echo'<a href="#" class="datuak"><span><strong>Izena: </strong>'.$_SESSION['izena'].'<br/><strong>Emaila: </strong>'.$_SESSION['eposta'].'<br/><strong>Mota: </strong>'.$_SESSION['erabiltzaileMota'].'<br/></span></a>'; 
			}
    	?>
    </div>
	<div id="nav">
	<?php
	//erabiltzaile motaren arabera menu atal batzuk erakutsi edo beste batzuk
	if($_SESSION['erabiltzaileMota'] == 'Administratzailea'||$_SESSION['erabiltzaileMota'] == 'Erabiltzailea'){
		echo ('<a href="hasiera.php"><span id="act-sel" class="act-sel">Hasiera<div class="arrow-right"></div></span></a>');
		if($_SESSION['erabiltzaileMota'] == 'Administratzailea') {
			echo ('<a href="xmldeskargatu.php"><span id="act-sel" class="act-sel">Datu basea kudeatu<div class="arrow-right"></div></span></a>');
			echo ('<a href="kamerakIkusi.php?eposta=admin"><span id="act-sel" class="act-sel">Kamerak ikusi<div class="arrow-right"></div></span></a>');
			echo ('<a href="eskaerakKudeatu.php"><span id="act-sel" class="act-sel">Eskaerak ikusi<div class="arrow-right"></div></span></a>');
			echo ('<a href="kamerakEsleitu.php"><span id="act-sel" class="act-sel">Kamerak esleitu<div class="arrow-right"></div></span></a>');
		}else{
			echo ('<a href="kamerakIkusi.php"><span id="act-sel" class="act-sel">Kamerak ikusi<div class="arrow-right"></div></span></a>');
		}
		echo ('<a href="kontuaKudeatu.php"><span id="act-sel" class="act-sel">Kontua kudeatu<div class="arrow-right"></div></span></a>');
	}
	?>
	</div>
