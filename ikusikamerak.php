<?php
$_GET['orrialdea']="ikusiKamerak";
include 'php/header.php';
//horrela jarrita dago javascript funtzioak sartu behar badira head atalean.
?><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
$("table tr").click( function () {
	$(this).addClass('selected').siblings().removeClass('selected');
	var eposta=$(this).find("td:first").html();
	var izena=$(this).find("td:last").html();
	var id= $(this).text();
        alert(id);
        } );
});
</script>

</head>
		<body><?php
include 'php/navigation.php';
?>
<div id="section">
		
	
	<div>
	<?php

include "dbkonexioak/dbOpen.php";

		$kamerak = "SELECT * FROM Kamera" ;
		$result = $db->query($kamerak);
		echo '<table border=1><tr><th> IP </th><th> Emaila </th></tr>';
		while( $row = $result->fetch_array(MYSQLI_BOTH)) {
			echo '<tr><td>'. $row['IP'].'</td> <td>'.$row['Emaila'].'</td></tr>';
		}
		echo '</table>';
		echo '<form id="ezabatu" method="post" action="ikusikamerak.php" enctype="multipart/form-data">';
		echo '<div>';
  			echo '<h3>Sartu borratu nahi dezun kameraren IP-a:</h3>';
  			echo '<input type="text" name="ip"/><br/>';
			echo '</div>';
		echo '</form>';


		if (isset($_POST['ip'])){
			$ip= $_POST['ip'];
			$kameraborratu = "DELETE FROM Kamera WHERE IP='$ip'" ;
			$result = $db->query($kameraborratu);
			header("Location:xmldeskargatu.php");
		}

		include "dbkonexioak/dbClose.php";
	?>
	</div>

		
</div>

<?php include 'php/footer.php';?>
