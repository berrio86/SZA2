<?php
session_start();
include 'php/header.php';
//horrela jarrita dago javascript funtzioak sartu behar badira head atalean.
echo'</head>';
?>
<script type="text/javascript">
	function pasahitzaBerdinak() {
		var mezuak = document.getElementById("mezuak");
		if(document.getElementById('pasahitza').value!=document.getElementById('pasahitza2').value) {
			mezuak.innerHTML="Pasahitzak ezaberdinak dira.";
			mezuak.style.color="darkred";
			mezuak.style.backgroundColor="coral";
		}else{
			mezuak.innerHTML="Pasahitzak berdinak dira.";
			mezuak.style.color="darkgreen";
			mezuak.style.backgroundColor="chartreuse";
			document.getElementById("botoia").disabled=false;
		}
	}
</script>
<?php
echo'<body>';
include 'php/navigation.php';
?>
<section class="main" id="s1">
		
	<div>
	 <form id="erregistro" name="erregistro" method="POST" action="eskaeraBidali.php" enctype="multipart/form-data">
		 	<h2>Erregistratu erabiltzaileak</h2><br/><br/>
  			(*) Izen-Abizenak:
  			<input type="text" id="izena" name="izena" required title="Izen-abizenak letra larriz hasita"><br/><br/>
			(*) Posta Elektronikoa:
 			<input type="email" id="eposta" name="eposta"  title="Idatzi balizko email bat"><br/><br/>
			(*) Pasahitza:
 			<input type="password" name="pasahitza" id="pasahitza"  title="6 karaktereko luzeera izan behar du gutxienez." onchange="pasahitzaBerdinak();"><br/><br/>
 			(*) Pasahitza errepikatu:
 			<input type="password" name="pasahitza2" id="pasahitza2"  title="6 karaktereko luzeera izan behar du gutxienez." onchange="pasahitzaBerdinak();"><br/><br/>
			
		 <input id="botoia" type="submit" name="button" value="Bidali" disabled>
			<input type="reset" name="button" value="Ezeztatu"> <br/><br/>
	 </form> 
	</div>
	<div id="mezuak">
		
	</div>
		
</section>

<?php include 'php/footer.php';?>