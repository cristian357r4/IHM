<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8">
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

		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="POST" action="add_ingredientes">
				<h5>Agregar elemento nutricional</h5>
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Grupo alimenticio</span>
						<div>
							<select name="grupoali" id="grupoali">
								<option value="">Cereales y tubérculos</option>
								<option value="">Verduras</option>
								<option value="">Frutas</option>
								<option value="">Leche semidescremada</option>
								<option value="">Leche descremada</option>
								<option value="">Leche entera</option>
								<optgroup label="Alimentos de origen animal">
									<option value="">Muy bajo aporte de grasa</option>
									<option value="">Bajo aporte de grasa</option>
									<option value="">Moderado aporte de grasa</option>
								</optgroup>
								<optgroup label="Azucares">
									<option value="">sin grasa</option>	
								</optgroup>
								<optgroup label="Aceites y grasas">
									<option value="">Sin proteína</option>
									<option value="">Con proteína</option>
								</optgroup>
								<option value="">Leguminosas</option>
							</select>	
							<div class="dropDownSelect2"></div>
						</div>
				</div>
				<br>
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Ingrediente</span>
					<input class="input100" type="text" name="ingrediente" id="ingrediente" placeholder="Introduce ingrediente">
				</div>
				<br>
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Cantidad</span>
					<input class="input100" type="text" name="cantidad" id="cantidad" placeholder="Introduce cantidad">
				</div>
				<br>

				<input type="submit" class="btn" name="aceptar" value="Aceptar">
				<input type="reset" class="btn" name="cancelar" value="Cancelar">
			</form>
		</div>
	</main>
</body>
</html>