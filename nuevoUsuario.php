<!DOCTYPE html>
<html>
<head>
	<title>Clientes</title>
</head>
<body>
	<?php
	if (isset($_SESSION['Login'])) {
		# code...
		header("location: index.php?code=3");
	}
	?>
	<center><h1>Nuevo Cliente</h1>

	<form name="nuevoCliente" method="POST" action="guardaUsuario.php">
		<table width="30%">
			<tr>
				<td><b>Rut:</b></td>
				<td><input type="text" name="rut" size="25" required oninput="checkRut(this)" placeholder="12345678-9"></td>
			</tr>

			<tr>
				<td><b>Nombre:</b></td>
				<td><input type="text" name="nombre" size="25" required="required" placeholder="John"></td>
			</tr>

			<tr>
				<td><b>Apellido:</b></td>
				<td><input type="text" name="apellido" size="25" required="required" placeholder="Johnson"></td>
			</tr>

			<tr>
				<td><input type="button" value="Volver"  onClick="window.location.href='home.php'">
				<input type="submit" name="Enviar" value="Registrar"></td>
				<script src="validarRut.js"></script>
			</tr>
		</table></center>


	</form>

</body>
</html>