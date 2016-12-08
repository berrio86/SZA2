<?php
$_GET['orrialdea']="erregistratu";
include 'php/header.php';
?>

<?php
echo'</head>';
echo'<body>';
include 'php/navigation.php';
?>
<div id="section">
		
	<div>
	 <form id="erregistro" method="post" action="eskaeraBidali.php" enctype="multipart/form-data">
		 	<h2>Egin erregistratzeko eskaria</h2>
  			 <p>Erabiltzaile izena:</p>
  			<p><input type="text" id="izena" name="izena" title="Idatzi zure erabiltzaile izena"/></p>
			 <p>Posta Elektronikoa:</p>
 			<p><input type="text" id="eposta" name="eposta"  title="Idatzi balizko email bat"/></p>
			 <p>Pasahitza:</p>
 			<p><input type="password" name="pasahitza" id="pasahitza"  title="6 karaktereko luzeera izan behar du gutxienez." onchange="pasahitzaBerdinak();"/></p>
 			 <p>Pasahitza errepikatu:</p>
 			<p><input type="password" name="pasahitza2" id="pasahitza2"  title="6 karaktereko luzeera izan behar du gutxienez." onchange="pasahitzaBerdinak();"/></p>
			
		 	<p><input id="botoia" type="submit" name="button" value="Bidali" onclick="return balidatu(this.form);" disabled="disabled" /></p>
			<p><input type="reset" name="button" value="Ezeztatu" /></p>
	 </form> 
	</div>
	<div id="mezuak">
		
	</div>
		
</div>

<?php include 'php/footer.php';?>