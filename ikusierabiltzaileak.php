<?php

include "dbkonexioak/dbOpen.php";

$erabiltzaileak = "SELECT * FROM Erabiltzailea WHERE Mota='Erabiltzailea'" ;
$result = $db->query($erabiltzaileak);
echo '<table border=1><tr><th> Email </th><th> Izena </th></tr>';
while( $row = $result->fetch_array(MYSQLI_BOTH)) {
echo '<tr><td>'. $row['Email'].'</td> <td>'.$row['Izena'].'</td></tr>';
}
echo '</table>';

include "dbkonexioak/dbClose.php";
?>
