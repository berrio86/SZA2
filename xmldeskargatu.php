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
	<form id="aukeratu" method="post" action="index.php" enctype="multipart/form-data"
	<button id="b1" value ="bai">Try it</button>
	<?php
	include 'ikusierabiltzaileak.php';
	?>
	Xml deskargatzeko aukera emango da
	</div>

		
</section>

<?php include 'php/footer.php';?>
