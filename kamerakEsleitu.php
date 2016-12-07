<?php
$_GET['orrialdea']="kamerakEsleitu";
include 'php/header.php';
?>
<script type="text/javascript">
	
	
	
</script>
<?php
	echo('</head>
		<body>');
include 'php/navigation.php';
?>
<section class="main" id="s1">
		
	
	<div>
	<form id="esleipena" name="esleipena" method="POST" action="" enctype="multipart/form-data">
		 	<h2>Kamerak erabiltzaileei esleitu</h2><br/><br/>
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
