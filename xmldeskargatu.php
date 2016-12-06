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
	<form id="aukeratu" method="post" enctype="multipart/form-data">
		<input type="button" id="b1" onclick="location.href='ikusierabiltzaileak.php';" value="erabiltzailea ezabatu"/>
		<input type="button" id="b2" onclick="location.href='ikusikamerak.php';" value="kamera ezabatu"/><br/><br/>
		<input type="button" id="b3" onclick="location.href='erabiltzaileakXML.php';" value="erabiltzaileak.xml deskargatu"/>
		<input type="button" id="b4" onclick="location.href='kamerakXML.php';" value="kamerak.xml deskargatu"/>
	</form>
	
	Xml deskargatzeko aukera emango da
	</div>

		
</section>

<?php include 'php/footer.php';?>
