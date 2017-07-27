<?php
	include('config.php');

	//Capturar Variables
	$Rut=$_POST['newRut'];
	$Nombre=$_POST['newNombre'];
	$Apellido=$_POST['newApellido'];
	$id=$_POST['id'];

	mysql_query("UPDATE cliente SET rut='$Rut', nombre='$Nombre', apellido='$Apellido' WHERE rut='$id'") or die(mysql_error());
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificar Cliente</title>
</head>
<body>
	<center>
		<h1>Cliente Modificado</h1>
		<input type="button" value="Regresar"  onClick="window.location.href='home.php'">
	</center>
</body>
</html>