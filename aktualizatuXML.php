<?php
include "dbkonexioak/dbOpen.php";


$BL_FILE='xml/erabiltzaileak.xml'; //.xml berriaren izena, aurrekoaren berdina da berri hau gainezartzeko

		//.xml berria sortu
		$bl=new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE erabiltzaileak SYSTEM "Erabiltzaileak.dtd"> <erabiltzaileak> </erabiltzaileak>');
	if(!$bl)
		return false;
	

	$erabiltzaileak = "SELECT * FROM Erabiltzailea WHERE Mota='Erabiltzailea'" ;
	$result = $db->query($erabiltzaileak);
	while( $row = $result->fetch_array(MYSQLI_BOTH)) {		
		$berria=$bl->addChild('erabiltzailea');	// Sortu 'erabiltzailea' etiketa.
		$berria->addChild('eposta',$row['Email']);	// Sortu 'erabiltzailea' etiketa barruko etiketak.
		$berria->addChild('izena',$row['Izena']);
		$berria->addChild('pasahitza',$row['Pasahitza']);
	}
	$bl->asXML($BL_FILE);	// Gorde aldaketak fitxategian.


$BL_FILE2='xml/kamerak.xml'; //.xml berriaren izena, aurrekoaren berdina da berri hau gainezartzeko

		//.xml berria sortu
		$bl2=new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE kamerak SYSTEM "Kamerak.dtd"> <kamerak> </kamerak>');
	if(!$bl2)
		return false;
	

	$kamerak = "SELECT * FROM Kamera" ;
	$result = $db->query($kamerak);
	while( $row = $result->fetch_array(MYSQLI_BOTH)) {		
		$berria=$bl2->addChild('kamera');	// Sortu 'kamera' etiketa.
		$berria->addChild('ip',$row['IP']);
		$berria->addChild('eposta',$row['Emaila']);	// Sortu 'kamera' etiketa barruko etiketak.
	}
	$bl2->asXML($BL_FILE2);	// Gorde aldaketak fitxategian.



include "dbkonexioak/dbClose.php";

?>
