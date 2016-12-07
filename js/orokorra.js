function balidatu(f){
	// Formularioko balioak irakurri
	var izena = f.izena.value;
	var eposta = f.eposta.value;
	var pasahitza1 = f.pasahitza.value;
	var pasahitza2 = f.pasahitza2.value;

	// Ziurtatu beteta egon behar diren eremuak beteta daudela.
	var errorea = "";
	if(izena=="" || eposta=="" || pasahitza1=="")
		errorea += "\tEremu guztiak bete behar dira.\n";
	
	// Ziurtatu eposta helbidearen formatua zuzena dela.
	if(eposta != "" && !helbide_formatua(eposta))
		errorea += "\tEposta helbidearen formatua ez da zuzena.\n";
	
	//Pasahitza berdinak direla frogatu
	if(pasahitza1 != pasahitza2)
		errorea += "\tPasahitzak ez dira berdinak.\n";
	
	//Pasahitza 6 baina karaktere gehiago dauzkala frogatu
	if(pasahitza1.length<6)
		errorea += "\Pasahitzak gutxienez 6 karakteretakoa izan behar du.\n";
	
	// Errorerik badago, mezua erakutsi.
	if(errorea != ""){
		alert("Formularioa ez duzu ondo bete:\n" + errorea);
		return false;
	}
	else
	return true;
}
	
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
	
function helbide_formatua(helbidea){
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


//frogak
/*
function ezabatu(x){
	alert(x);
}
	
function ikusi(y){
	alert(y);
}


function ezabatu(){
	alert("ezabatu!");
}
	
function onartu(y){
	alert (y);
}
*/
//pasahitza berreskuratzeko

function recaptchaFrogatu(){
	document.getElementById("botoia").disabled=false;
}
		
/*function helbide_formatua(){
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
}*/	

//kamerak esleitu (martxan)

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
	
function IpFormatua(f){	
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