<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="estiloslogin.css">
	</head>
	<body>
		<div class="loginbox">
			<img src="imageneslogin/user.jpg" class="user">
			<h2>Iniciar Sesion</h2>
			<form action="validarusuario.php" method="POST">
				<p>Usuario</p>
				<input type="text" name="usuario" id="usuario" placeholder="usuario">
				<p>Contraseña</p>
				<input type="password" name="contraseña" id="contraseña" placeholder="******"></br>
				<input type="submit" name="" value="Aceptar"></br>
				<a href="#">Olvide mi contraseña</a>
			</form>
		</div>
	</body>