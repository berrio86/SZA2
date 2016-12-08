<?php
$_GET['orrialdea']="ikusiKamerak";
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

		//kamera taulan dauden datuak hartu eta taula batean erakutsi
		$kamerak = "SELECT * FROM Kamera" ;
		$result = $db->query($kamerak);
		echo '<table><tr><th> IP </th><th> Emaila </th></tr>';
		while( $row = $result->fetch_array(MYSQLI_BOTH)) {
			echo '<tr><td>'. $row['IP'].'</td> <td>'.$row['Emaila'].'</td></tr>';
		}
		echo '</table>';
		echo '<form id="ezabatu" method="post" action="ikusikamerak.php" enctype="multipart/form-data">';
		echo '<div>';
  			echo '<h3>Sartu borratu nahi dezun kameraren IP-a:</h3>';
  			echo '<p><input type="text" name="ip"/></p>';
			echo '</div>';
		echo '</form>';


		if (isset($_POST['ip'])){
			$ip= $_POST['ip'];
			$kameraborratu = "DELETE FROM Kamera WHERE IP='$ip'" ; //Kamera taulatik borratu
			$result = $db->query($kameraborratu);
			header("Location:xmldeskargatu.php");
		}

		include "dbkonexioak/dbClose.php";
	?>
	</div>

		
</div>

<?php include 'php/footer.php';?>
