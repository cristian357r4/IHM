<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Smart Nutrition</title>
	<link rel="stylesheet" type="text/css" href="css/css_loginp.css">
</head>
<body>
	<!-- Cabecera principal -->

	<header class="header jumbotron">
		<div class="container logo-per-container">
			<h1 class="logo">SMART NUTRITION</h1>
		</div>
	</header>
	<main class="main">
		<div class="login_page">
			<div class="form">
				<h7 class="tittle">
					<b>Inicio de Sesion</b>
				</h7>
				<form action="controller/_validar_usuario.php" class="login-form" method="post">
					<label id="user">
						<b>Usuario</b>
					</label>

					<input type="text" name="user"  >
					<label id="pass">
						<b>Contraseña</b>
					</label>
					<input type="password" name="pass" >
                    <input type="submit" value="Ingresar">
					

				</form>
			</div>
		</div>
	</main>
</body>
</html>