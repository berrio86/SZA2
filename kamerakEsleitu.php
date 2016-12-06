<?php
session_start();
include 'php/header.php';
?>
<script type="text/javascript">
	
	xhttp = new XMLHttpRequest();
		
	function gorde(ip,email){
		xhttp.onreadystatechange = function(){
			if((xhttp.readyState==4) && (xhttp.status==200)){
				var mezua=xhttp.responseText;
				document.getElementById("mezuak").innerHTML=xhttp.responseText;
				//koloreaAldatu(mezua);
			}	
		}
		xhttp.open("GET","kamerakGorde.php?iphelbidea="+ip+"&emaila="+email, true);
		xhttp.send();
	}
	
	/*function koloreaAldatu(x){
		var div = document.getElementById("mezuak");
		var mezua = x.split(" ");
		alert(mezua[0]);
		if (mezua[0].compare("Akats")){
			div.style.color="darkred";
			div.style.backgroundColor="coral";
		}else{
			div.style.color="darkgreen";
			div.style.backgroundColor="chartreuse";
		}
	}*/
	
	function IpFormatua(f)
	{
		
		var ip = f.iphelbidea.value;
		var eposta = f.emaila.value;
		var emaitza=true;
		alert(ip);
		
		//beteta dagoela ziurtatu
		if(ip==""){
			alert("Bete ezazu IP helbide.");
			emaitza=false;
		}
		
		// Ziurtatu '.' karakterea hiru aldiz agertzen dela
		if(ip.split(".").length != 4){
			alert("3 puntu baina gehiago ditu.");
			emaitza=false;
		}
		
		// Ziurtatu '.'-en artean gehienez hiru zenbaki daudela
		var res2 = ip.split(".");
		for (var i=0; i<res2.length; i++){
			if (res2[i].length>3){
				alert("IP helbidea ez da egokia");
				emaitza=false;
			}
		}
		
		// Ziurtatu karaktere guztiak zenbakiak direla
		var res = ip.split(".");
		for (var i=0; i<res.length; i++){
			if(isNaN(res[i])){
				alert("IP helbide egokia sartu mesedez.");
				emaitza=false;
			}
		}
		
		if(emaitza==true){
			gorde(ip, eposta);
		}
	}
	
</script>
<?php
	echo('</head>
		<body>');
include 'php/navigation.php';
?>
<section class="main" id="s1">
		
	
	<div>
	<form id="esleipena" name="esleipena" method="POST" action="" enctype="multipart/form-data">
		 	<h2>Erregistratu erabiltzaileak</h2><br/><br/>
  			(*) IP helbidea:
  			<input type="text" id="iphelbidea" name="iphelbidea" title="xxx.xxx.xxx.xxx" maxlenght="15"><br/><br/>
			(*) Posta Elektronikoa:
			<select name="emaila">
			<?php
				include"dbkonexioak/dbOpen.php";
				$galdera="SELECT Email FROM Erabiltzailea";
				$emaitza = $db->query($galdera); 
				while ($lerroa = $emaitza->fetch_assoc()){
					echo "<option value='{$lerroa['Email']}'>{$lerroa['Email']}</option>";
				}
				include "dbkonexioak/dbClose.php";
			?>
			</select><br/><br/>
 			
			
		 	<input id="botoia" type="button" name="button" value="Bidali" onclick="IpFormatua(this.form);">
	 </form> 
	</div>
	<div id = "mezuak">
	</div>
</section>

<?php include 'php/footer.php';?>
