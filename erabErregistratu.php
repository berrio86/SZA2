<?php
session_start();
include 'php/header.php';
//horrela jarrita dago javascript funtzioak sartu behar badira head atalean.
echo('</head>
		<body>');
include 'php/navigation.php';
?>
<section class="main" id="s1">
		
	 <form id="erregistro" name="erregistro" method="POST" action="" enctype="multipart/form-data">
		 	<h2>Erregistratu erabiltzaileak</h2><br/><br/>
  			(*) Izen-Abizenak:
  			<input type="text" id="izena" name="izena" required title="Izen-abizenak letra larriz hasita"><br/><br/>
			(*) Posta Elektronikoa:
 			<input type="email" id="eposta" name="eposta"  title="Idatzi balizko email bat" onchange="emailaKonprobatu(this.value); paspostaKonprobatu(0);"><br/><br/>
			(*) Pasahitza:
 			<input type="password" name="pasahitza" id="pasahitza"  title="6 karaktereko luzeera izan behar du gutxienez." onchange="pasahitzaKonprobatu(this.value); paspostaKonprobatu(2);"><br/><br/>
 			(*) Pasahitza errepikatu:
 			<input type="password" name="pasahitza2" id="pasahitza2"  title="6 karaktereko luzeera izan behar du gutxienez." onchange="pasahitzaBerdinak();paspostaKonprobatu(3);"><br/><br/>
			
		 <input id="botoia" type="submit" name="button" value="Bidali" disabled>
			<input type="reset" name="button" value="Ezeztatu"> <br/><br/>
		</form> 

		
</section>

<?php include 'php/footer.php';?>
