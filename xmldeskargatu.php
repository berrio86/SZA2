<?php
header('Content-Type: application/xml;');
header('Content-Disposition: attachment; filename=erabiltzaileak.xml;');
readfile('db/erabiltzaileak.xml');
?>
