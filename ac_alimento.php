<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tabla de alimentacion</title>
	<link rel="stylesheet" type="text/css" href="css/css_principal.css">
	<link rel="stylesheet" type="text/css" href="css/css_pacientes.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
</head>
<body>
	<!-- Cabecera principal -->
	<header class="header">
		<div class="container logo-per-container">
			<a href="paginacentral.php" class="logo"><b>SMART NUTRITION</b></a>
			<h7 class="perfil">Nombre del licenciado</h7>
		</div>
	</header>
	<!-- Espacio entre la cabecera y el menu de navegacion
		 y se coloca el boton de salida de la aplicacion -->
	<div class="exit">
		<button class="bottom rounded">
			<span id="text-black"> 
				<a href="login_nutriologos.php">
					Salir
				</a>	
			</span>
		</button>
	</div>
	<!-- Menu de navegacion -->
	<div>
		<nav class="navigation">
			<table>
				<tr>
					<td>
						<a href="perfil.php">Perfil</a>
					</td>
					<td>
						<a href="historia_clinica.php">Historia Clinica</a>
					</td>
					<td>
						<a href="ag_pacientes.php">Pacientes</a>
					</td>
					<td>
						<a href="control_alimentacion.php">Tabla de alimenticion</a>
					</td>
					<td>
						<a href="configuracion.php">Configuracion</a>
					</td>
				</tr>
			</table>
		</nav>
	</div>
	<!-- Contenido de la aplicacion --> 
	<main class="main">
		<div class="container navigation">
			<h1>Tablas de alimentación</h1>
			<!--<img src="imagenes/logo_sn.jpeg" class="logo_opaco">-->
			<table>
				<tr>
					<td>
						<a href="ag_alimento.php">Agregar</a>
					</td>
					<td>
						<a href="ac_alimento.php">Actualizar</a>
					</td>
					<td>
						<a href="bo_alimento.php">Borrar</a>
					</td>
					<td>
						<a href="co_alimento.php">Consultar</a>
					</td>
				</tr>
			</table>
		</div>
	</main>
</body>
</html>