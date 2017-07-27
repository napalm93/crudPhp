<?php
	include('config.php');

	//capturar las variables ingresadas
	$patente=$_POST['patente'];
	$marca=$_POST['marca'];
	$modelo=$_POST['modelo'];
	$anio=$_POST['anio'];


	//insertar los datos
	$insert= mysql_query("INSERT INTO vehiculo (patente, marca, modelo, anio) VALUES ('$patente','$marca','$modelo','$anio')", $link);
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Guardar Vehiculo</title>
</head>
<body>
	<center>
		<h1>Vehiculo Registrado</h1>
		<input type="button" value="Regresar"  onClick="window.location.href='indexVehiculos.php'">
	</center>
</body>
</html>