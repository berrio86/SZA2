<?php
$_GET['orrialdea']="eskaerakKudeatu";
include 'php/header.php';
?>

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