<?php
	include('config.php');

	$id=$_GET['id'];
	mysql_query("DELETE FROM vehiculo WHERE patente='$id'") or die(mysql_error());
?>

<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Vehiculo</title>
</head>
<body>
	<center>
		<h1>Vehiculo Eliminado</h1>
		<input type="button" value="Regresar"  onClick="window.location.href='indexVehiculos.php'">
	</center>
</body>
</html>