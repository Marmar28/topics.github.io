<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Vol</title>
<link href="Formularios.css" rel="stylesheet" type="text/css">
</head>

<body>
	<?php
	
		$radio = $_POST['radio'];
		$altura = $_POST['altura'];
	
		echo "El volumen es:  " .$radio*$radio*$altura*3.1416/3;
	
	?>
	
	<br>
	
	<a href="index.php">volver</a>
</body>
</html>