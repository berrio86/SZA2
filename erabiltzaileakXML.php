<?php
include "dbkonexioak/dbOpen.php";


$BL_FILE='xml/erabiltzaileak.xml';


		if(!file_exists($BL_FILE))	// Iruzkinak gordetzeko XML fitxategia ez bada existitzen, sortu iruzkinik gabeko XML fitxategia.
		$bl=new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><!DOCTYPE erabiltzaileak SYSTEM "Erabiltzaileak.dtd"><erabiltzaileak></erabiltzaileak>');
	else	// Bestela, kargatu XML fitxategia.
		$bl=simplexml_load_file($BL_FILE);
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
	return $bl->asXML($BL_FILE);	// Gorde aldaketak fitxategian.



include "dbkonexioak/dbClose.php";

//header('Content-Type: application/xml;');
//header('Content-Disposition: attachment; filename=erabiltzaileak.xml;');
//readfile('db/erabiltzaileak.xml');

header("Location:xmldeskargatu.php");
?>
