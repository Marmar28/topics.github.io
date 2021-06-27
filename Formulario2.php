<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Texto</title>
<link href="Formularios.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
		
		$nombre = $_POST['nom'];
		$apellido = $_POST['ape'];
	
		echo $nombre. "<br>". $apellido;
	?>		
	
	<br>
	<a href="index.php">volver</a>
</body>
</html>