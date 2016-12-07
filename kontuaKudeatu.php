<?php
$_GET['orrialdea']="kontuakKudeatu";
include 'php/header.php';
?>
<script type="text/javascript" language="javascript">
function editatu(){
		if(confirm("Ziur al zaude zure datuak editatu nahi dituzula?")){
			window.location.href= ("aldaketakGorde.php?izena="+document.getElementById('izena').value+"&pasahitza="+document.getElementById('pasahitza').value+"&eposta="+document.getElementById('eposta').value);
		} else {
			alert("Aldaketak ez dira gordeko.");
		}
	}
</script>
<?php
echo'</head>';
echo'<body>';
include 'php/navigation.php';
?>
<section class="main" id="s1">
		
	
	<div>
	<h1>Editatu ezazu zure kontua</h1>
	</div>
	<div id="edizioa">
		<?php
			$izena=$_SESSION['izena'];
			$eposta=$_SESSION['eposta'];
			$mota=$_SESSION['erabiltzaileMota'];
		
			include 'dbkonexioak/dbOpen.php';
			
		
			$sqlekintza="SELECT Pasahitza FROM Erabiltzailea WHERE Email='$eposta'" ;
			$emaitza=$db->query($sqlekintza);
			if(!$emaitza) {
				echo("Errore bat egon da kontua lortzean: ".$db->error);
			}else{
				$lerroa = $emaitza->fetch_array(MYSQLI_BOTH);
		?>
		<!--<form id="logeatu" method="post" action="aldaketakGorde.php" enctype="multipart/form-data">-->
  			<h3>Posta-elektronikoa:</h3>
			<?php 
				echo'<input type="text" id="eposta" name="eposta"  title="Zure posta elektronikoa" value="'.$eposta.'" readonly><br/><br/>';		
			?>		
			<h3>Mota:</h3>
			<?php 
				echo'<input type="text" id="mota" name="mota"  title="Erabiltzaile mota" value="'.$mota.'" readonly><br/><br/>';		
			?>		
			<h3>Izen-abizenak:</h3>	
			<?php	
				echo'<input type="text" id="izena" name="izena" title="Izen abizenak" value="'.$izena.'"><br/><br/>';	
			?>
			<h3>Pasahitza:</h3>
			<?php
				echo'<input type="text" id="pasahitza" name="pasahitza" title="Pasahitza" value="'.$lerroa['Pasahitza'].'"><br/><br/>';	
			?>
  			<?php
			}
			include 'dbkonexioak/dbClose.php';		
		?>
		<input type="button" value="Aldaketak gorde" onclick="editatu();">
			
		<!--</form>-->
		
	</div>
	

	

		
</section>
<?php include 'php/footer.php';?>
