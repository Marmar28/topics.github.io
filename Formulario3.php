<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Log-sen</title>
<link href="Formularios.css" rel="stylesheet" type="text/css">
</head>

<body>
	
	<?php
		$operacion = $_POST['select'];
		$valor1 = $_POST['seno'];
		$valor2 = $_POST['logaritmo'];
	
		switch($operacion)
		{
			case 'sin': echo sin(deg2rad($valor1));
				
				break;
				
			case 'log': echo log10($valor2);
				
				break;
		}
	?>
	<br>
	<a href="index.php">volver</a>
</body>
</html>