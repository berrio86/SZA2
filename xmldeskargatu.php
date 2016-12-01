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
		<input type="button" id="b2" onclick="location.href='ikusikamerak.php';" value="kamera ezabatu"/>
	</form>
	
	Xml deskargatzeko aukera emango da
	</div>

		
</section>

<?php include 'php/footer.php';?>
