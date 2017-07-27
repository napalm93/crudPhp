<?php
	include('config.php');

	//Capturar Variables
	$Patente=$_POST['newPatente'];
	$Marca=$_POST['newMarca'];
	$Modelo=$_POST['newModelo'];
	$Anio=$_POST['newAnio'];
	$id=$_POST['id'];
	
	mysql_query("UPDATE vehiculo SET patente='$Patente', marca='$Marca', modelo='$Modelo' , anio='$Anio' WHERE patente='$id'") or die(mysql_error());
?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificar Vehiculo</title>
</head>
<body>
	<center>
		<h1>Vehiculo Modificado</h1>
		<input type="button" value="Regresar"  onClick="window.location.href='indexVehiculos.php'">
	</center>
</body>
</html>