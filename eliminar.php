<?php
	include('config.php');

	$id=$_GET['id'];
	mysql_query("DELETE FROM cliente WHERE rut='$id'") or die(mysql_error());
?>

<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Cliente</title>
</head>
<body>
	<center>
		<h1>Cliente Eliminado</h1>
		<input type="button" value="Regresar"  onClick="window.location.href='home.php'">
	</center>
</body>
</html>