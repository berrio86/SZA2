<?php
$_GET['orrialdea']="kamerakEsleitu";
include 'php/header.php';
?>

<?php
	echo('</head>
		<body>');
include 'php/navigation.php';
?>
<div id="section">
		
	
	<div>
	<form id="esleipena" name="esleipena" method="POST" action="" enctype="multipart/form-data">
		 	<h2>Kamerak erabiltzaileei esleitu</h2>
  			<p> IP helbidea:</p>
  			<p><input type="text" id="iphelbidea" name="iphelbidea" title="xxx.xxx.xxx.xxx" maxlenght="15"/></p>
			<p> Posta Elektronikoa: </p>
			<p><select name="emaila">
			<?php
				include"dbkonexioak/dbOpen.php";
				$galdera="SELECT Email FROM Erabiltzailea";
				$emaitza = $db->query($galdera); 
				while ($lerroa = $emaitza->fetch_assoc()){
					echo "<option value='{$lerroa['Email']}'>{$lerroa['Email']}</option>";
				}
				include "dbkonexioak/dbClose.php";
			?>
			</select></p>
 			
			
		 	<p><input id="botoia" type="button" name="button" value="Bidali" onclick="IpFormatua(this.form);"/></p>
	 </form> 
	</div>
	<div id = "mezuak">
	</div>
</div>

<?php include 'php/footer.php';?>
