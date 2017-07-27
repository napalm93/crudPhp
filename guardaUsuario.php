<?php
	include('config.php');

	//capturar las variables ingresadas
	$elRut=$_POST['rut'];
	$elNombre=$_POST['nombre'];
	$elApellido=$_POST['apellido'];

	//insertar los datos
	$insert= mysql_query("INSERT INTO cliente (rut, nombre, apellido) VALUES ('$elRut','$elNombre','$elApellido')", $link);
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Guardar Cliente</title>
</head>
<body>
	<center>
		<h1>Cliente Registrado</h1>
		<input type="button" value="Regresar"  onClick="window.location.href='home.php'">
	</center>
</body>
</html>