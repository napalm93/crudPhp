<?php
	include('config.php');

	//query
	$select = mysql_query("SELECT * FROM vehiculo");


?>

<!DOCTYPE html>
<html>
<head>
	<title>Vehiculos</title>

</head>
<body>
	<center><h1>TABLA DE VEHICULOS</h1></center>
	

	<table border=1 width="90%">
		<thread>
			<tr>
				<td><b>PATENTE</b></td>
				<td><b>MARCA</b></td>
				<td><b>MODELO</b></td>
				<td><b>ANIO</b></td>
				<td></td>
				<td></td>
			</tr>
			<tbody>
				<?php while($row=mysql_fetch_array($select)) {?>
				<tr>
					<td><?php echo $row['patente'];?>
					</td>

					<td><?php echo $row['marca'];?>
					</td>

					<td><?php echo $row['modelo'];?>
					</td>

					<td><?php echo $row['anio'];?>
					</td>

					<td width="5%"><input type="button" value="Modificar" onClick="window.location.href='modificarVehiculo.php?id=<?php echo $row['patente'];?>'"></td>

					<td width="5%"><input type="button" value="Eliminar" onClick="window.location.href='eliminarVehiculo.php?id=<?php echo $row['patente'];?>'"></td>


				</tr>
				<?php } ?>
			</tbody>
		
	</table>
	<br>
	<input type="button" value="Ingresar Vehiculo"  onClick="window.location.href='nuevoVehiculo.php'">
	<input type="button" value="Ir a Tabla de Clientes"  onClick="window.location.href='home.php'">

	<p></p>

</body>
</html>