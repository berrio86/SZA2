<?php
session_start();
include 'php/header.php';
//horrela jarrita dago javascript funtzioak sartu behar badira head atalean.
echo('</head>
		<body>');
include 'php/navigation.php';
?>
<section class="main" id="s1">
		
	
	<div>
	<form id="aukeratu" method="post" onload="<?php include 'aktualizatuXML.php';?>" enctype="multipart/form-data">
		<h3>Erabiltzaile edo kamera borratu nahi duzun aukeratu:</h3>
		<input type="button" id="b1" onclick="location.href='ikusierabiltzaileak.php';" value="erabiltzailea ezabatu"/>
		<input type="button" id="b2" onclick="location.href='ikusikamerak.php';" value="kamera ezabatu"/><br/><br/><br/>
		<h3>Erabiltzaile edo kameraren xml-a deskargatu nahi duzun aukeratu:</h3>
		<input type="button" id="b3" onclick="location.href='erabiltzaileakXML.php';" value="erabiltzaileak.xml deskargatu"/>
		<input type="button" id="b4" onclick="location.href='kamerakXML.php';" value="kamerak.xml deskargatu"/>
	</form><br/><br/><br/>

	<form action="upload.php" method="post" enctype="multipart/form-data">
	    <h3>Igo ezazu kamerak taula aktualizatzeko xml-a:</h3>
	    <input type="file" name="fileToUpload" id="fileToUpload">
	    <input type="submit" value="Upload XML" name="kamerak.xmligo">
	</form>
	

	</div>

		
</section>

<?php include 'php/footer.php';?>
