<!DOCTYPE html>
<html>
<head>
	<title>Sesiones en php</title>
</head>


<body>
	<h1>Iniciar Sesion</h1>
	<form name="loginUsuario" method="POST" action="valida.php">
		<table>
			<tr>
				<td><b>Login:</b></td>
				<td><input type="text" name="login" required=""></td>
			</tr>

			<tr>
				<td><b>Password:</b></td>
				<td><input type="password" name="pass" required="required"></td>
			</tr>

			<tr>
				<td><input type="submit" name="Ingresar" value="Ingresar"></td>
			</tr>
		</table>
	</form>




	
</body>
</html>