<?php
header('Content-Type: application/xml;');
header('Content-Disposition: attachment; filename=kamerak.xml;');
readfile('db/kamerak.xml');

?>
