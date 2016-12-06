<?php
	include 'php/header.php';
	echo('</head>');
?>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript">
	function recaptchaFrogatu(){
		document.getElementById("botoia").disabled=false;
	}
		
	function helbide_formatua()
	{
		var helbidea = document.getElementById("eposta");
		// Ziurtatu '@' karakterea behin, eta behin bakarrik, agertzen dela.
		if(helbidea.split("@").length != 2)
			return false;
		// Ziurtatu '@' karakterea ez dela lehena.
		if(helbidea.indexOf("@") == 0)
			return false;
		// Ziurtatu '@' karakterearen ondoren '.' karaktereren bat badagoela.
		if(helbidea.lastIndexOf(".") < helbidea.lastIndexOf("@"))
			return false;
		// Ziurtatu azkeneko puntuaren atzetik gutxienez beste 2 karaktere daudela.
		if(helbidea.lastIndexOf(".") + 2 > helbidea.length - 1)
			return false;
	
		return true;
	}	
	</script>
<?php
	echo('<body>');
	include 'php/navigation.php';
?>
    <section class="main" id="s1">
		
		<div id="gorputza">
		 <form id="erregistro" name="erregistro" method="POST" action="pasahitzaBidali.php" enctype="multipart/form-data">
  			Sar ezazu zure posta helbidea:
  			<input type="text" name="eposta" title="Sartu baliozko e-mail bat"><br/><br/>
			<div class="g-recaptcha" data-callback="recaptchaFrogatu" data-sitekey="6LerogsUAAAAACPdBPei-XFB3f_TGJHLXk1A1sMO"></div><br/><br/>
			<input id="botoia" type="submit" name="button" value="Bidali"  onclick="return helbide_formatua();" disabled><br/>
		</form> 
		
		</div>
		<div id="mezuak">
		</div>
		
    </section>
<?php include 'php/footer.php'; ?>