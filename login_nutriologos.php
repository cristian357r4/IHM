<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Nutriologos</title>
	<link rel="stylesheet" type="text/css" href="css/css_logins.css">
	<!--<link rel="stylesheet" type="text/css" href="css/css_loginn.css">-->
</head>
<body>
	<!-- Cabecera principal -->
	<header class="header">
		<div class="container">
			<h1 class="logo">SMART NUTRITION</h1>
		</div>
	</header>
	<main class="main">
		<div class="container-ini-reg">
			<!-- Login -->
			<div class="login_page">
				<div class="form">
					<h7 class="tittle">
						<b>Inicio de Sesion</b>
					</h7>
					<form class="login-form">
						<label for="user">
							<b>Usuario</b>
						</label>
						<input type="text" name="user" id="user">
						
						<label for="pass">
							<b>Contraseña</b>
						</label>
						<input type="password" name="pass" id="pass">
						
						<input type="submit" class="btn-login" value="Aceptar">
					</form>
				</div>
			</div>
			<!-- Registro -->
			<div class="login_page">
				<div class="form">
					<h7 class="tittle">
						<b>Registro</b>
					</h7>
					<form class="login-form">
						<label for="nombre">
							<b>Nombre</b>
						</label>
						<input type="text" id="nombre">

						<label for="ape_pat">
							<b>Apellido paterno</b>
						</label>
						<input type="text" id="ape_pat">
						
						<label for="ape_mat">
							<b>Apellido materno</b>
						</label>
						<input type="text" id="ape_mat">
						
						<label for="sexo">
							<b>Sexo</b>
						</label>
						<input type="text" id="sexo">
						
						<label id="pass_n">
							<b>Contraseña</b>
						</label>
						<input type="password" name="pass_n">
						
						<div class="div-buttons">
							<input type="submit" class="btn-accept" value="Registrar">
							<input type="reset" class="btn-cancel" value="Cancelar">	
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>
</body>
</html>