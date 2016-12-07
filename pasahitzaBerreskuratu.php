<?php
	$_GET['orrialdea']="pasahitzaberreskuratu";
	include 'php/header.php';
?>
	<script src='https://www.google.com/recaptcha/api.js' type="text/javascript"></script>
	
<?php
	echo('</head>');
	echo('<body>');
	include 'php/navigation.php';
?>
    <div id="section">
		
		<div id="gorputza">
		 <form id="erregistro" method="post" action="pasahitzaBidali.php" enctype="multipart/form-data">
  			<p>Sar ezazu zure posta helbidea:</p>
  			<p><input type="text" name="eposta" id="eposta" title="Sartu baliozko e-mail bat"/></p>
			<div class="g-recaptcha" data-callback="recaptchaFrogatu" data-sitekey="6LerogsUAAAAACPdBPei-XFB3f_TGJHLXk1A1sMO"></div>
			<p><input id="botoia" type="submit" name="button" value="Bidali"  onclick="return helbide_formatua(this.form.eposta.value);" disabled="disabled"/></p>
		</form> 
		
		</div>
		<div id="mezuak">
		</div>
		
    </div>
<?php include 'php/footer.php'; ?>