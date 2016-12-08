<?php
$_GET['orrialdea']="eskaerakKudeatu";
include 'php/header.php';
?>

<?php
echo('</head>
		<body>');
include 'php/navigation.php';
?>
<div id="section">
		
	
	<div >
		<?php 
		include 'dbkonexioak/dbOpen.php';
		//datu basean galdeketa egin
		$erabiltzaileak = "SELECT * FROM ErabiltzaileBerria";
		$emaitza = $db->query($erabiltzaileak); 
		
		//beharrezko taula sortu datu baseko elementuekin
		echo '<table><tr><th> ERABILTZAILE IZENA </th><th> POSTA </th><th> EZABATU </th><th> ONARTU </th></tr>';

		while ($lerroa = $emaitza->fetch_array(MYSQLI_BOTH)){
			$eposta=$lerroa['Email'];
			//echo $eposta;	
			echo ("<tr>");	
				echo ("<td>".$lerroa['Izena']."</td>");
				echo ("<td>".$lerroa['Email']."</td>");
				//echo'<p><input type="text" id="eposta" name="eposta"  title="Zure posta elektronikoa" value="'.$eposta.'" readonly="readonly"/></p>';	
				echo ('<td style="text-align:center"><input type="button" style="width:100%;" value="Ezabatu" onclick="ezabatu();"/></td>');
				echo ("<td style='text-align:center'> <input name='editatu' type='button' style='width:100%;' value='Onartu' onclick='onartu();'/> </td>");
			echo("</tr>");
		}
		echo '</table>';
		include 'dbkonexioak/dbClose.php';
		?>
	</div>
	

		
</div>

<?php include 'php/footer.php';?>