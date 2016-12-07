<?php
session_start();
if(!isset($_SESSION['erabiltzaileMota'])){
	echo 'Ez zaude logeatuta!';
	header("Location:index.php");
	exit;
}elseif($_SESSION['erabiltzaileMota']=='Erabiltzailea'){
	echo 'Erabiltzailea zara ez Administratzailea, beraz ezin duzu erabiltzaileak.xml deskargatu';
	header("Location:index.php");
	exit;
}elseif($_SESSION['erabiltzaileMota']=='Administratzailea'){

header('Content-Type: application/xml;');
header('Content-Disposition: attachment; filename=erabiltzaileak.xml;');
readfile('db/erabiltzaileak.xml');
}else{
	header("Location:index.php");
	exit;
}
?>
