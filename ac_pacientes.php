<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pacientes</title>
	<link rel="stylesheet" type="text/css" href="css/css_principal.css">
	<link rel="stylesheet" type="text/css" href="css/css_pacientes.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
</head>
<body>
	<!-- Cabecera principal -->
	<header class="header">
		<div class="container logo-per-container">
			<a href="index.html" class="logo"><b>SMART NUTRITION</b></a>
			<h7 class="perfil">Nombre del licenciado</h7>
		</div>
	</header>
	<!-- Espacio entre la cabecera y el menu de navegacion
		 y se coloca el boton de salida de la aplicacion -->
	<div class="exit">
		<button class="bottom rounded">
			<span id="text-black">Salir</span>
		</button>
	</div>
	<!-- Menu de navegacion -->
	<div>
		<nav class="navigation">
			<table>
				<tr>
					<td>
						<a href="perfil.html">Perfil</a>
					</td>
					<td>
						<a href="historia_clinica.html">Historia Clinica</a>
					</td>
					<td>
						<a href="ag_pacientes.html">Pacientes</a>
					</td>
					<td>
						<a href="configuracion.html">Configuracion</a>
					</td>
				</tr>
			</table>
		</nav>
	</div>
	<!-- Contenido de la aplicacion -->
	<main class="main">
		<div class="container navigation menu-aabc">
			<h1>Pacientes</h1>
			<!--<img src="imagenes/logo_sn.jpeg" class="logo_opaco">-->
			<table>
				<tr>
					<td>
						<a href="ag_pacientes.html">Agregar</a>
					</td>
					<td>
						<a href="ac_pacientes.html">Actualizar</a>
					</td>
					<td>
						<a href="bo_pacientes.html">Borrar</a>
					</td>
					<td>
						<a href="co_pacientes.html">Consultar</a>
					</td>
				</tr>
			</table>
		</div>
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<h5>Actualizar paciente</h5>
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Busqueda</span>
					<input class="input100" type="search" name="busqueda" id="busqueda" placeholder="Introduce nombre completo del paciente">
				</div>
				<input type="submit" class="btn-buscar" name="buscar" value="Buscar">
				<input type="reset" class="btn-buscar" name="borrar" value="Cancelar">
			</form>
			<div class="wrap-contact100">
				<form class="contact100-form validate-form">
					<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Nombre</span>
						<input class="input100" type="text" name="nombre" id="nombre" placeholder="Introduce nombre" disabled>
					</div>
					<br>
					
					<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Edad</span>
						<input class="input100" type="number" name="edad" id="edad" min="1" max="100" placeholder="Introduce edad" disabled>
					</div>
					<br>
					
					<div class="wrap-input100 input100-select bg1">
						<span class="label-input100">Sexo</span>
							<div>
								<select name="sexo" id="sexo" disabled>
									<option value="masculino">Masculino</option>
									<option value="femenino">Femenino</option>
								</select>	
								<div class="dropDownSelect2"></div>
							</div>
					</div>
					<br>

					<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Religion</span>
						<input class="input100" type="text" name="religion" id="religion" placeholder="Introduce religion" disabled>
					</div>
					<br>
					
					<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Estado Civil</span>
						<input class="input100" type="text" name="estadocivil" id="estadocivil" placeholder="Introduce estado civil" disabled>
					</div>
					<br>
					
					<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Ocupacion</span>
						<input class="input100" type="text" name="ocupacion" id="ocupacion" placeholder="Introduce ocupacion" disabled>
					</div>
					<br>
					
					<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Fecha de nacimiento</span>
						<input class="input100" type="date" name="fecha" id="fecha" disabled>
					</div>
					<br>
					
					<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Telefono</span>
						<input class="input100" type="tel" name="telefono" id="telefono" placeholder="Introduce numero telefonico" disabled>
					</div>
					<br>
					
					<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Email</span>
						<input class="input100" type="email" name="correo" id="correo" placeholder="Introduce email" disabled>
					</div>
					<br>
					
					<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Peso</span>
						<input class="input100" type="number" name="peso" id="peso" min="1" max="150" placeholder="Introduce peso" disabled>
					</div>
					<br>
					
					<div class="wrap-input100 validate-input bg1">
						<span class="label-input100">Estatura</span>
						<input class="input100" type="number" name="estatura" id="estatura" min="1" max="250" placeholder="Introduce estatura" disabled>
					</div>
					<br>

					<input type="submit" class="btn" name="actualizar" value="Actualizar">
					<input type="reset" class="btn" name="cancelar" value="Cancelar">
				</form>
			</div>
		</div>
	</main>
</body>
</html>