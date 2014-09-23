<?php include('procesar.php');?>

<html>
<head>
	<title>Pagina de pureba</title>
</head>
<body>
	<?php prueba() ?>
	<h1>Formulario de prueba</h1>
	<form method="POST" action="procesar.php">
		<label for="nombre">Nombre</label>
		<input name="nombre" />
		<label for="apellido">Apellido</label>
		<input name="apellido" />
		<input type="submit" value="Enviar"> 
	</form>
</body>
</html>