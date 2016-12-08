<?php
$_GET['orrialdea']="kontuakKudeatu";
include 'php/header.php';
?>
<?php
echo'</head>';
echo'<body>';
include 'php/navigation.php';
?>
<div id="section">
		
	
	<div>
	<h1>Editatu ezazu zure kontua</h1>
	</div>
	<div id="edizioa">
		<?php
			$izena=$_SESSION['izena'];
			$eposta=$_SESSION['eposta'];
			$mota=$_SESSION['erabiltzaileMota'];
		
			include 'dbkonexioak/dbOpen.php';
			
			//datu baseari galdeketa egin
			$sqlekintza="SELECT Pasahitza FROM Erabiltzailea WHERE Email='$eposta'" ;
			$emaitza=$db->query($sqlekintza);
			if(!$emaitza) {
				echo("Errore bat egon da kontua lortzean: ".$db->error);
			}else{
				$lerroa = $emaitza->fetch_array(MYSQLI_BOTH);
		?>
		
  			<h3>Posta-elektronikoa:</h3>
			<?php 
				//datu baseko datuekin eremuak bete
				echo'<p><input type="text" id="eposta" name="eposta"  title="Zure posta elektronikoa" value="'.$eposta.'" readonly="readonly"/></p>';		
			?>		
			<h3>Mota:</h3>
			<?php 
				echo'<p><input type="text" id="mota" name="mota"  title="Erabiltzaile mota" value="'.$mota.'" readonly="readonly"/></p>';		
			?>		
			<h3>Izen-abizenak:</h3>	
			<?php	
				echo'<p><input type="text" id="izena" name="izena" title="Izen abizenak" value="'.$izena.'"/></p>';	
			?>
			<h3>Pasahitza:</h3>
			<?php
				echo'<p><input type="text" id="pasahitza" name="pasahitza" title="Pasahitza" value="'.$lerroa['Pasahitza'].'"/></p>';	
			?>
  			<?php
			}
			include 'dbkonexioak/dbClose.php';		
		?>
		<p><input type="button" value="Aldaketak gorde" onclick="editatu();"/></p>
			
		
		
	</div>
	

	

		
</div>
<?php include 'php/footer.php';?>
