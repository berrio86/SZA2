<?php
session_start();
include 'php/header.php';?>
	<script type="text/javascript" language="javascript">

	//xhttp = new XMLHttpRequest();
	
	function ezabatu(x){
		alert("Ezabatu!!");
		/*if(confirm("Ziur al zaude erabiltzailea honen eskaria atzera bota nahi duzula?")){
			xhttp.onreadystatechange = function(){
				if((xhttp.readyState==4) && (xhttp.status==200)){		
					document.getElementById("taula").innerHTML=xhttp.responseText;
				}	
			}
		xhttp.open("GET","galderaEzabatu.php?galderaZenb="+x, true);
		xhttp.send();
		}else{
			alert("Galdera ez da ezabatua izango.");
		}*/
	}
	
	function onartu(y){
		alert("Onartu!!");
		/*if(confirm("Ziur al zaude erabiltzaile honen eskaera onartu nahi duzula?")){
			window.location.href= ("galderaEditatu.php?zenbakia="+y);
		}*/
	}

</script>
<?php
echo('</head>
		<body>');
include 'php/navigation.php';
?>
<section class="main" id="s1">
		
	
	<div >
		<?php 
		include 'dbkonexioak/dbOpen.php';

		$erabiltzaileak = "SELECT * FROM ErabiltzaileBerria";
		$emaitza = $db->query($erabiltzaileak); 
		
		echo '<table><tr><th> IZEN-ABIZENAK </th><th> POSTA </th><th> EZABATU </th><th> ONARTU </th>';

		while ($lerroa = $emaitza->fetch_array(MYSQLI_BOTH)){
			echo '<tr><td>'.$lerroa['Izena'].'</td><td>'.$lerroa['Email'].'</td>';
			echo ("<td style='text-align:center'><input type='button' style='width:100%;' value='Ezabatu' onclick='ezabatu(".$lerroa['Email'].");'></td>");
			echo ("<td style='text-align:center'><input name='editatu' type='button' style='width:100%;' value='Onartu' onclick='onartu(".	$lerroa['Email'].");'> </td></tr>");
		}
		echo '</table>';
		include 'dbkonexioak/dbClose.php';
		?>
	</div>
	

		
</section>

<?php include 'php/footer.php';?>