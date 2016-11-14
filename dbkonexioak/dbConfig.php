<?php
//automatikoki ikusi ea localhosten gauden ala ez

$host=$_SERVER['SERVER_NAME'];

if ($host=="localhost"){
	//localhost-en atzitzeko
	define("HOST","localhost");
	define("USER", "root");
	define("PASS", "");
	define("DATABASE", "kamera_aplikazioa");
	define("HASIERA","hasiera.php");
	define("LOGIN","index.php");

}else{
	//hostingerren atzitzeko
	define("HOST","mysql.hostinger.es");
	define("USER", "u911276192_root");
	define("PASS", "sza123456");
	define("DATABASE", "u911276192_sza");
	define("HASIERA","http://juleninaki25.hol.es/hasiera.php");
	define("LOGIN","http://juleninaki25.hol.es/index.php");
}

?>

