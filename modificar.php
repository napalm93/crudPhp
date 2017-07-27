<?php
	include('config.php');

	$id=$_GET['id'];
	$row =mysql_fetch_array(mysql_query("SELECT * FROM cliente WHERE rut='$id'"));


?>

<!DOCTYPE html>
<html>
<head>
	<title>Modificar Clientes</title>
</head>
<body>
<center><h1>Modificar Cliente</h1></center>

	<form name="modCliente" method="POST" action="modCliente.php">
		<center><table width="30%">
			<tr>
				<input type="hidden" name="id" value="<?php echo $id;?>">
				<td><b>Rut: </b></td>
				<td><input type="text" name="newRut" size="25" value="<?php echo $row['rut'];?>" required oninput="checkRut(this)"></td>
			</tr>

			<tr>
				<td><b>Nombre: </b></td>
				<td><input type="text" name="newNombre" size="25" value="<?php echo $row['nombre'];?>"></td>
			</tr>

			<tr>
				<td><b>Apellido: </b></td>
				<td><input type="text" name="newApellido" size="25" value="<?php echo $row['apellido'];?>"></td>
			</tr>

			<tr>
				<td><input type="button" value="Volver"  onClick="window.location.href='home.php'">
				<input type="submit" name="Guardar" value="Guardar"></td>
				<script src="validarRut.js"></script>
			</tr>

		</table></center>


	</form>
</body>
</html>