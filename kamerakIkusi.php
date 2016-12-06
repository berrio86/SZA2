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
	include"dbkonexioak/dbOpen.php";
	$eposta=$_SESSION['eposta'];
	
	$galdera = "SELECT * FROM Kamera WHERE Emaila='$eposta'";
	$emaitza = $db->query($galdera); 
	echo "<table><tr><th> Kamera IP-a </th><th> Sartu </th><th> Ezabatu </th></tr>";
	while ($lerroa = $emaitza->fetch_assoc()){
		echo ("<tr>");
		echo ("<td>".$lerroa['IP']."</td>");
		echo ("<td style='text-align:center'><input type='button' style='width:100%;' value='Ikusi' onclick='ikusi(".$lerroa['IP'].")'></td>");
		echo ("<td style='text-align:center'> <input name='editatu' type='button' style='width:100%;' value='Ezabatu' onclick='ezabatu(".$lerroa['IP'].")'> </td>");
		echo ("</tr>");
	}
	echo("</table>");

	include "dbkonexioak/dbClose.php";
	
	?>
	</div>
</section>

<?php include 'php/footer.php';?>