<?php
	$_GET['orrialdea']="pasahitzaberreskuratu";
	include 'php/header.php';
?>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	
<?php
	echo('</head>');
	echo('<body>');
	include 'php/navigation.php';
?>
    <section class="main" id="s1">
		
		<div id="gorputza">
		 <form id="erregistro" name="erregistro" method="POST" action="pasahitzaBidali.php" enctype="multipart/form-data">
  			Sar ezazu zure posta helbidea:
  			<input type="text" name="eposta" title="Sartu baliozko e-mail bat"><br/><br/>
			<div class="g-recaptcha" data-callback="recaptchaFrogatu" data-sitekey="6LerogsUAAAAACPdBPei-XFB3f_TGJHLXk1A1sMO"></div><br/><br/>
			<input id="botoia" type="submit" name="button" value="Bidali"  onclick="return helbide_formatua(this.form.eposta.value);" disabled><br/>
		</form> 
		
		</div>
		<div id="mezuak">
		</div>
		
    </section>
<?php include 'php/footer.php'; ?>