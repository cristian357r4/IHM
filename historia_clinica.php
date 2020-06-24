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
	<?php
		include("conexion.php");
		$query = "SELECT ID,NOMBRE,EDAD,SEXO,RELIGION,ESTADOCIVIL,OCUPACION,FECHADENACIMIENTO,TELEFONO,CORREO,PESO,ESTATURA FROM PACIENTE";
		$resultado = mysqli_query($conn,$query);
	?>
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
		
		<div>
			<form class="contact100-form validate-form">
				<h5>Pacientes</h5>
				<table class="tabla-consulta">
					<thead>
						<tr class="tabla-tr">
							<th class="tabla-td-th" id="nombre">Nombre</th>
							<th class="tabla-td-th" id="edad">Edad</th>
							<th class="tabla-td-th" id="sexo">Sexo</th>
							<th class="tabla-td-th" id="religion">Religion</th>
							<th class="tabla-td-th" id="estadocivil">Estado civil</th>
							<th class="tabla-td-th" id="ocupacion">Ocupacion</th>
							<th class="tabla-td-th" id="fecha">Fecha de nacimiento</th>
							<th class="tabla-td-th" id="telefono">Telefono</th>
							<th class="tabla-td-th" id="correo">Email</th>
							<th class="tabla-td-th" id="peso">Peso</th>
							<th class="tabla-td-th" id="estatura">Estatura</th>
						</tr>
					</thead>
					<tbody>
						<?php while($filas = mysqli_fetch_assoc($resultado)) { ?>
						<tr class="tabla-tr">
							<td class="tabla-td-th"><?php echo $filas['NOMBRE'] ?></td>
							<td class="tabla-td-th"><?php echo $filas['EDAD'] ?></td>
							<td class="tabla-td-th"><?php echo $filas['SEXO'] ?></td>
							<td class="tabla-td-th"><?php echo $filas['RELIGION'] ?></td>
							<td class="tabla-td-th"><?php echo $filas['ESTADOCIVIL'] ?></td>
							<td class="tabla-td-th"><?php echo $filas['OCUPACION'] ?></td>
							<td class="tabla-td-th"><?php echo $filas['FECHADENACIMIENTO'] ?></td>
							<td class="tabla-td-th"><?php echo $filas['TELEFONO'] ?></td>
							<td class="tabla-td-th"><?php echo $filas['CORREO'] ?></td>
							<td class="tabla-td-th"><?php echo $filas['PESO'] ?></td>
							<td class="tabla-td-th"><?php echo $filas['ESTATURA']?></td>
							<td class="tabla-td-th">
								<a href="form_hc.php?ID=<?php echo $filas['ID'] ?>">Historia Clinica</a>
							</td>
						</tr>
						<?php } ?>	
					</tbody>
				</table>
			</form>
		</div>
	</main>
</body>
</html>