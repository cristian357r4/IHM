<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Historia Clinica</title>
	<link rel="stylesheet" type="text/css" href="css/css_pacientes.css">
	<link rel="stylesheet" type="text/css" href="css/css_principal.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
</head>
<body>
	<!-- Cabecera principal -->
	<header class="header">
		<div class="container logo-per-container">
			<a href="index.php" class="logo"><b>SMART NUTRITION</b></a>
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
						<a href="perfil.php">Perfil</a>
					</td>
					<td>
						<a href="historia_clinica.php">Historia Clinica</a>
					</td>
					<td>
						<a href="ag_pacientes.php">Pacientes</a>
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
		<div class="container">
			<h1>Historia Clinica</h1>
		</div>
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Busqueda</span>
					<input class="input100" type="search" name="busqueda" id="busqueda" placeholder="Introduce nombre completo del paciente">
				</div>
				<input type="submit" class="btn-buscar" name="buscar" value="Buscar">
				<button class="btn-nueva" name="buscar" value="Nueva Historia Clinica">
					<a href="formato_historia_clinica.php">Nueva Historia Clinica</a>
				</button>
			</form>
		</div>
		<div>
			<form class="contact100-form validate-form">
				<h5>Paciente</h5>
				<table class="tabla-consulta">
				<tr class="tabla-tr">
					<th class="tabla-td-th">Nombre</th>
					<th class="tabla-td-th">Edad</th>
					<th class="tabla-td-th">Sexo</th>
					<th class="tabla-td-th">Religion</th>
					<th class="tabla-td-th">Estado civil</th>
					<th class="tabla-td-th">Ocupacion</th>
					<th class="tabla-td-th">Fecha de nacimiento</th>
					<th class="tabla-td-th">Telefono</th>
					<th class="tabla-td-th">Email</th>
					<th class="tabla-td-th">Peso</th>
					<th class="tabla-td-th">Estatura</th>
					<th class="tabla-td-th"></th>
				</tr>
				
				<tr class="tabla-tr">
					<td class="tabla-td-th">Pedro Ramirez</td>
					<td class="tabla-td-th">26</td>
					<td class="tabla-td-th">M</td>
					<td class="tabla-td-th">Ateo</td>
					<td class="tabla-td-th">Soltero</td>
					<td class="tabla-td-th">Estudiante</td>
					<td class="tabla-td-th">1993-05-08</td>
					<td class="tabla-td-th">7221689176</td>
					<td class="tabla-td-th">js8@gmail.com</td>
					<td class="tabla-td-th">97</td>
					<td class="tabla-td-th">1.70</td>
					<td class="tabla-td-th">
						<button>
							<b>Historia Clinica</b>
						</button>
					</td>
				</tr>
				
				<tr class="tabla-tr">
					<td class="tabla-td-th">Rosa Lopez</td>
					<td class="tabla-td-th">16</td>
					<td class="tabla-td-th">F</td>
					<td class="tabla-td-th">Catolico</td>
					<td class="tabla-td-th">Soltero</td>
					<td class="tabla-td-th">Estudiante</td>
					<td class="tabla-td-th">2004-11-08</td>
					<td class="tabla-td-th">7221685548</td>
					<td class="tabla-td-th">rl14@gmail.com</td>
					<td class="tabla-td-th">56</td>
					<td class="tabla-td-th">1.60</td>
					<td class="tabla-td-th">
						<button>
							<b>Historia Clinica</b>
						</button>
					</td>
				</tr>
						
				<tr class="tabla-tr">
					<td class="tabla-td-th">Jose Ramos</td>
					<td class="tabla-td-th">27</td>
					<td class="tabla-td-th">M</td>
					<td class="tabla-td-th">Testigo de Jehova</td>
					<td class="tabla-td-th">Casado</td>
					<td class="tabla-td-th">Obrero</td>
					<td class="tabla-td-th">1992-07-05</td>
					<td class="tabla-td-th">7225488776</td>
					<td class="tabla-td-th">jr3@gmail.com</td>
					<td class="tabla-td-th">85</td>
					<td class="tabla-td-th">1.80</td>
					<td class="tabla-td-th">
						<button>
							<b>Historia Clinica</b>
						</button>
					</td>
				</tr>
						
				<tr class="tabla-tr">
					<td class="tabla-td-th">Sofia Flores</td>
					<td class="tabla-td-th">24</td>
					<td class="tabla-td-th">F</td>
					<td class="tabla-td-th">Catolica</td>
					<td class="tabla-td-th">Casado</td>
					<td class="tabla-td-th">Licenciada</td>
					<td class="tabla-td-th">1995-06-07</td>
					<td class="tabla-td-th">7227531245</td>
					<td class="tabla-td-th">saphie@gmail.com</td>
					<td class="tabla-td-th">55</td>
					<td class="tabla-td-th">1.58</td>
					<td class="tabla-td-th">
						<button>
							<b>Historia Clinica</b>
						</button>
					</td>
				</tr>
				
				<tr class="tabla-tr">
					<td class="tabla-td-th">Carolina Gonzalez</td>
					<td class="tabla-td-th">27</td>
					<td class="tabla-td-th">F</td>
					<td class="tabla-td-th">Catolico</td>
					<td class="tabla-td-th">Comprometida</td>
					<td class="tabla-td-th">Licenciada</td>
					<td class="tabla-td-th">1993-05-21</td>
					<td class="tabla-td-th">7221686478</td>
					<td class="tabla-td-th">carog@gmail.com</td>
					<td class="tabla-td-th">55</td>
					<td class="tabla-td-th">1.54</td>
					<td class="tabla-td-th">
						<button>
							<b>Historia Clinica</b>
						</button>
					</td>
				</tr>
				</table>
			</form>
		</div>
	</main>
</body>
</html>