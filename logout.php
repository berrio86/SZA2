<?php
	//saio aldagaiak hustu
	session_start();
	session_destroy();
	header("Location:index.php");
?>