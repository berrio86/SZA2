<?php
session_start();
include 'php/header.php';
//horrela jarrita dago javascript funtzioak sartu behar badira head atalean.
echo('</head>
		<body>');
include 'php/navigation.php';
?>
<section class="main" id="s1">
		
	
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

		include "dbkonexioak/dbClose.php";
	?>
	</div>

		
</section>

<?php include 'php/footer.php';?>
