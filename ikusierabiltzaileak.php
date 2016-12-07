<?php
$_GET['orrialdea']="ikusiErabiltzaileak";
include 'php/header.php';
//horrela jarrita dago javascript funtzioak sartu behar badira head atalean.
?>

</head>
<body><?php
include 'php/navigation.php';
?>
<div id="section">
		
	
	<div>
	<?php

include "dbkonexioak/dbOpen.php";

		$erabiltzaileak = "SELECT * FROM Erabiltzailea WHERE Mota='Erabiltzailea'" ;
		$result = $db->query($erabiltzaileak);
		echo '<table id ="table"><tr><th> Email </th><th> Izena </th></tr>';
		while( $row = $result->fetch_array(MYSQLI_BOTH)) {
			echo '<tr><td>'. $row['Email'].'</td> <td>'.$row['Izena'].'</td></tr>';
		}
		echo '</table>';
		echo '<form id="ezabatu" method="post" action="ikusierabiltzaileak.php" enctype="multipart/form-data">';
		echo '<div>';
  			echo '<h3>Sartu borratu nahi dezun erabiltzailearen Posta-elektronikoa:</h3>';
  			echo '<p><input type="text" name="eposta"/></p>';
			echo '</div>';
		echo '</form>';


		if (isset($_POST['eposta'])){
			$eposta= $_POST['eposta'];
			$erabiltzaileaborratu = "DELETE FROM Erabiltzailea WHERE Email='$eposta'" ;
			$result = $db->query($erabiltzaileaborratu);
			$kameraborratu = "DELETE FROM Kamera WHERE Emaila='$eposta'" ;
			$result = $db->query($kameraborratu);
			header("Location:xmldeskargatu.php");
		}
	

		include "dbkonexioak/dbClose.php";
	?>
	</div>

		
</div>

<?php include 'php/footer.php';?>
