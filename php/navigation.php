<div id='page-wrap'>
	<header>
		<a href="hasiera.php"><img class="logo" src="irudiak/quiz-logo.png" alt="Aplikazio logo" /></a>	
		<a href="logout.php"><img title="Saioa amaitu" class="botoia"  src="irudiak/logout-icon.png" alt="Log out botoia"/></a>
		<?php
			echo'<a href="#" class="datuak"><span><strong>Izena: </strong>'.$_SESSION['izena'].'<br/><strong>Emaila: </strong>'.$_SESSION['eposta'].'<br/><strong>Mota: </strong>'.$_SESSION['erabiltzaileMota'].'<br/></span></a>'; 
    	?>
    </header>
	<nav>
	<?php
	if($_SESSION['erabiltzaileMota'] == 'Administratzailea') {
		echo ('<a href="hasiera.php"><span id="act-sel" class="act-sel">Datu basea kudeatu<div class="arrow-right"></div></span></a>');
	}else{
		echo ('<a href="hasiera.php"><span id="act-sel" class="act-sel">Kamera<div class="arrow-right"></div></span></a>');
	}
		echo ('<a href="hasiera.php"><span id="act-sel" class="act-sel">Pasahitza aldatu<div class="arrow-right"></div></span></a>');
	?>
	</nav>