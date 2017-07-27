<?php
	include('config.php');

	$id=$_GET['id'];
	$row =mysql_fetch_array(mysql_query("SELECT * FROM vehiculo WHERE patente='$id'"));


?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificar Vehiculos</title>
</head>
<body>
<center><h1>Modificar Vehiculo</h1></center>

	<form name="modVehiculo" method="POST" action="modVehiculo.php">
		<center><table width="30%">
			<tr>
				<input type="hidden" name="id" value="<?php echo $id;?>">
				<td><b>Patente: </b></td>
				<td><input type="text" name="newPatente" size="25" value="<?php echo $row['patente'];?>"></td>
			</tr>

			<tr>
				<td><b>Marca: </b></td>
				<td><input type="text" name="newMarca" size="25" value="<?php echo $row['marca'];?>"></td>
			</tr>

			<tr>
				<td><b>Modelo: </b></td>
				<td><input type="text" name="newModelo" size="25" value="<?php echo $row['modelo'];?>"></td>
			</tr>

			<tr>
				<td><b>Anio: </b></td>
				<td><input type="text" name="newAnio" size="25" value="<?php echo $row['anio'];?>"></td>
			</tr>

			<tr>
				<td><input type="button" value="Volver"  onClick="window.location.href='indexVehiculos.php'">
				<input type="submit" name="Guardar" value="Guardar"></td>
			</tr>

		</table></center>


	</form>
</body>
</html>