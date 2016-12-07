<?php
$_GET['orrialdea']="kamerakIkusi";
include 'php/header.php';
?>

<?php
	echo'</head>';
	echo'<body>';
	include 'php/navigation.php';
?>
<div id="section">
		
	<div>
	<?php
	include"dbkonexioak/dbOpen.php";
	$eposta=$_SESSION['eposta'];
	if($_SESSION['erabiltzaileMota'] == 'Administratzailea'){
		$galdera = "SELECT * FROM Kamera";
	}else{
		$galdera = "SELECT * FROM Kamera WHERE Emaila='$eposta'";
	}
		
	$emaitza = $db->query($galdera); 
	echo "<table><tr><th> KAMERA IP </th><th> EMAIL </th><th> SARTU </th><th> EZABATU </th></tr>";
	while ($lerroa = $emaitza->fetch_assoc()){
		echo ("<tr>");
		echo ("<td>".$lerroa['IP']."</td>");
		echo ("<td>".$lerroa['Emaila']."</td>");
		//echo "<option value='{$lerroa['Email']}'>{$lerroa['Email']}</option>";
		echo ("<td style='text-align:center'><input type='button' style='width:100%;' value='Ikusi' onclick='ikusi();'></td>");
		echo ("<td style='text-align:center'> <input name='editatu' type='button' style='width:100%;' value='Ezabatu' onclick='ezabatuKamera();'> </td>");
		echo ("</tr>");
	}
	echo("</table>");

	include "dbkonexioak/dbClose.php";
	
	?>
	</div>
</div>

<?php include 'php/footer.php';?>