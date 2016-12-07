<?php
session_start();
include 'php/header.php';
?>
	
<script type="text/javascript" language="javascript">

	//xhttp = new XMLHttpRequest();
	
	function ezabatu(x){
		alert(x);
		/*if(confirm("Ziur al zaude galdera hau ezabatu nahi duzula?")){
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
	
	function ezabatu(){
		alert("ezabatu!");
	}
	
	function onartu(y){
		alert (y);
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
		
		echo '<table><tr><th> ERABILTZAILE IZENA </th><th> POSTA </th><th> EZABATU </th><th> ONARTU </th></tr>';

		while ($lerroa = $emaitza->fetch_array(MYSQLI_BOTH)){
			$eposta=$lerroa['Email'];
			//echo $eposta;	
			echo ("<tr>");	
				echo ("<td>".$lerroa['Izena']."</td>");
				echo ("<td>".$lerroa['Email']."</td>");
				//echo ("<td style='text-align:center'><input type='button' style='width:100%;' value='Ezabatu' onclick='ezabatu(".$lerroa['Email'].")'></td>");
				//echo ("<td style='text-align:center'> <input name='editatu' type='button' style='width:100%;' value='Editatu' onclick='onartu(".$lerroa['Email'].")'> </td>");
				echo ("<td style='text-align:center'><input type='button' style='width:100%;' value='Ezabatu' onclick='ezabatu(".$lerroa['Email'].")'></td>");
				echo ("<td style='text-align:center'> <input name='editatu' type='button' style='width:100%;' value='Onartu' onclick='onartu(".$lerroa['Email'].")'> </td>");
			echo("</tr>");
		}
		echo '</table>';
		include 'dbkonexioak/dbClose.php';
		?>
	</div>
	

		
</section>

<?php include 'php/footer.php';?>