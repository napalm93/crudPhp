<!DOCTYPE html>
<html>
<head>
	<title>Vehiculos</title>
</head>
<body>
	<center><h1>Nuevo Vehiculo</h1></center>

	<form name="nuevoVehiculo" method="POST" action="guardaVehiculo.php">
		<center><table width="30%">
			<tr>
				<td><b>Patente:</b></td>
				<td><input type="text" name="patente" size="25" required oninput="patente(this)" placeholder="BB1010"></td>
			</tr>

			<tr>
				<td><b>Marca:</b></td>
				<td><input type="text" name="marca" size="25" required="required" placeholder="Kia"></td>
			</tr>

			<tr>
				<td><b>Modelo:</b></td>
				<td><input type="text" name="modelo" size="25" required="required" placeholder="Rio"></td>
			</tr>

			<tr>
				<td><b>Anio:</b></td>
				<td><input type="text" name="anio" size="25" required="required" placeholder="2015" ></td>
			</tr>

			<tr>
				<td><input type="button" value="Volver"  onClick="window.location.href='indexVehiculos.php'">
				<input type="submit" name="Enviar" value="Registrar"></td>
				<script type="patente.js"></script>
			</tr>
		</table></center>


	</form>

</body>
</html>