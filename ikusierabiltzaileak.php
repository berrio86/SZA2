<?php
session_start();
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
<section class="main" id="s1">
		
	
	<div>
	<?php

include "dbkonexioak/dbOpen.php";

		$erabiltzaileak = "SELECT * FROM Erabiltzailea WHERE Mota='Erabiltzailea'" ;
		$result = $db->query($erabiltzaileak);
		echo '<table id ="table" border=1><tr><th> Email </th><th> Izena </th></tr>';
		while( $row = $result->fetch_array(MYSQLI_BOTH)) {
			echo '<tr><td>'. $row['Email'].'</td> <td>'.$row['Izena'].'</td></tr>';
		}
		echo '</table>';
		echo'<input type="button" name="OK" class="ok" value="OK"/>';

		include "dbkonexioak/dbClose.php";
	?>
	</div>

		
</section>

<?php include 'php/footer.php';?>
