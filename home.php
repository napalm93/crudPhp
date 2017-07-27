<?php
session_start();
	include('config.php');
	

	
	if (!isset($_SESSION['login'])) {
		header("location: index.php?code=3");
	}
	//query
	$select = mysql_query("SELECT * FROM cliente");


?>

<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>

</head>
<body>
	<center><h1>TABLA DE CLIENTES</h1></center>
	

	<table border=1 width="90%">
		<thread>
			<tr>
				<td><b>RUT</b></td>
				<td><b>NOMBRE</b></td>
				<td><b>APELLIDO</b></td>
				<td></td>
				<td></td>
			</tr>
			<tbody>
				<?php while($row=mysql_fetch_array($select)) {?>
				<tr>
					<td><?php echo $row['rut'];?>
					</td>

					<td><?php echo $row['nombre'];?>
					</td>

					<td><?php echo $row['apellido'];?>
					</td>

					<td width="5%"><input type="button" value="dasdadas" onClick="window.location.href='modificar.php?id=<?php echo $row['rut'];?>'"></td>

					<td width="5%"><input type="button" value="Eliminar" onClick="window.location.href='eliminar.php?id=<?php echo $row['rut'];?>'"></td>


				</tr>
				<?php } ?>
			</tbody>
		
	</table>
	<br>
	<input type="button" value="Ingresar Cliente"  onClick="window.location.href='nuevoUsuario.php'">
	<input type="button" value="Ir a Tabla de Vehiculos"  onClick="window.location.href='indexVehiculos.php'">
	<input type="button" value="Cerrar Sesion" onClick="window.location.href='cerrarSesion.php'">
	<input type="button" value="Enviar Correo" onClick="window.location.href='correo.php'">

</body>
</html>