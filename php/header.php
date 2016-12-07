<?php
	session_start();
	//saio bat ezarria badago horrekin lana egin, bestela gonbidatua esleitu
	if(empty($_SESSION['izena'])||empty($_SESSION['eposta'])||empty($_SESSION['erabiltzaileMota'])){
			$_SESSION['erabiltzaileMota']='Gonbidatua';
			$_SESSION['eposta']='Ez dago logeatuta';
			$_SESSION['izena']='Gonbidatua';
	}

	//Erabiltzailea bada, administratzailea den orrietara ezin dela sartu bermatu 
	if($_SESSION['erabiltzaileMota'] == "Erabiltzailea"){
	if($_GET['orrialdea'] == "xmlDeskargatu" || $_GET['orrialdea'] == "eskaerakKudeatu" || $_GET['orrialdea'] == "kamerakEsleitu"){
			header("Location:hasiera.php");
		}
	}

    //Gonbidatua bada, gonbidatua sar daitekeen orrietara sartu daitekeela bermatu
	if($_SESSION['erabiltzaileMota'] == "Gonbidatua"){
	if($_GET['orrialdea'] != "index" && $_GET['orrialdea'] != "erregistratu" && $_GET['orrialdea'] != "pasahitzaberreskuratu" && $_GET['orrialdea'] != "eskaerabidali"){
		
			header("Location:index.php");
		}
	}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Web kamera</title>
<link rel="stylesheet" type="text/css" href="css/orokorra.css"/>
<script src="js/orokorra.js"></script>
