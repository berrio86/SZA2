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