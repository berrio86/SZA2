<?php
$_GET['orrialdea']="erregistratu";
include 'php/header.php';
?>

<?php
echo'</head>';
echo'<body>';
include 'php/navigation.php';
?>
<section class="main" id="s1">
		
	<div>
	 <form id="erregistro" name="erregistro" method="POST" action="eskaeraBidali.php" enctype="multipart/form-data">
		 	<h2>Erregistratu erabiltzaileak</h2><br/><br/>
  			(*) Izen-Abizenak:
  			<input type="text" id="izena" name="izena" title="Idatzi zure erabiltzaile izena"><br/><br/>
			(*) Posta Elektronikoa:
 			<input type="text" id="eposta" name="eposta"  title="Idatzi balizko email bat"><br/><br/>
			(*) Pasahitza:
 			<input type="password" name="pasahitza" id="pasahitza"  title="6 karaktereko luzeera izan behar du gutxienez." onchange="pasahitzaBerdinak();"><br/><br/>
 			(*) Pasahitza errepikatu:
 			<input type="password" name="pasahitza2" id="pasahitza2"  title="6 karaktereko luzeera izan behar du gutxienez." onchange="pasahitzaBerdinak();"><br/><br/>
			
		 	<input id="botoia" type="submit" name="button" value="Bidali" onclick="return balidatu(this.form);" disabled>
			<input type="reset" name="button" value="Ezeztatu"> <br/><br/>
	 </form> 
	</div>
	<div id="mezuak">
		
	</div>
		
</section>

<?php include 'php/footer.php';?>