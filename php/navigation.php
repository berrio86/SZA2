<div id='page-wrap'>
	<header class='main' id='h1'>
		<a href="hasiera.php"><img class="logo" src="irudiak/quiz-logo.png"></a>	
		<a href="logout.php"><img title="Saioa amaitu" class="botoia"  src="irudiak/logout-icon.png"></a>
		<?php
			echo'<a href="#" class="datuak"><span><strong>Erabiltzailearen datuak</strong><br/>emaila: '.$_SESSION['eposta'].'<br/>erabiltzaile mota: '.$_SESSION['erabiltzaileMota'].'<br/></span></a>'; 
    	?>
    </header>
	<nav class='main desktopSoilik' id='n1' role='navigation'>
	<?php
	if($_SESSION['erabiltzaileMota'] == 'admin') {
		echo ('<a href="hasiera.php"><span id="act-sel" class="act-sel">Datu basea kudeatu<div class="arrow-right"></div></span></a>');
		echo ('<a href="hasiera.php"><span id="act-sel" class="act-sel">Pasahitza aldatu<div class="arrow-right"></div></span></a>');
	}else{
		echo ('<a href="hasiera.php"><span id="act-sel" class="act-sel">Kamera<div class="arrow-right"></div></span></a>');
		echo ('<a href="hasiera.php"><span id="act-sel" class="act-sel">Pasahitza aldatu<div class="arrow-right"></div></span></a>');
	}
	?>
	</nav>