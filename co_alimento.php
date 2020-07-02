<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no" charset="utf-8">
	<title>Tabla de alimentacion</title>
	<link rel="stylesheet" type="text/css" href="css/css_principal.css">
	<link rel="stylesheet" type="text/css" href="css/css_pacientes.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/tabla_alimenticio.css">
</head>
<body>
	<?php 
		include("conexion.php");
		$querycereales = "SELECT IDDETABLASDEALIMENTACION,INGREDIENTE,CANTIDAD FROM TABLASALIMENTICION WHERE GRUPOALIMENTICIO = 'Cereales y tubérculos'";
		echo $querycereales;
		$resultadocereales = mysqli_query($conn,$querycereales);
		echo $resultadocereales;
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
		<br><br>

		<div><!-- Cereales y tuberculos -->
			<table>
				<thead>
					<tr id="tabla-cereales">
						<th colspan="4">Cereales y tubérculos</th>
					</tr>
					<tr>
						<th>Ingrediente</th>
						<th>Cantidad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						while($filacereales = mysqli_fetch_assoc($resultadocereales)){
					?>
					<tr>
						<td><?php echo $filacereales['INGREDIENTE']?></td>
						<td><?php echo $filacereales['CANTIDAD']?></td>
						<td>
							<a href="">
								<img src="imagenes/iconos/lapiz.png" width="20" height="20">
							</a>
						</td>
						<td>
							<a href="">
								<img src="imagenes/iconos/borrar-usuario.png" width="20" height="20">
							</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<br><br>
		<!--
		<div>
			<table>
				<thead>
					<tr id="tabla-verduras">
						<th colspan="4">Verduras</th>
					</tr>
					<tr>
						<th>Ingrediente</th>
						<th>Cantidad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
						<td>
							<a href="">
								<img src="imagenes/iconos/lapiz.png" width="20" height="20">
							</a>
						</td>
						<td>
							<a href="">
								<img src="imagenes/iconos/borrar-usuario.png" width="20" height="20">
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<br><br>

		<div>
			<table>
				<thead>
					<tr id="tabla-frutas">
						<th colspan="4">Frutas</th>
					</tr>
					<tr>
						<th>Ingrediente</th>
						<th>Cantidad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
						<td>
							<a href="">
								<img src="imagenes/iconos/lapiz.png" width="20" height="20">
							</a>
						</td>
						<td>
							<a href="">
								<img src="imagenes/iconos/borrar-usuario.png" width="20" height="20">
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<br><br>

		<div>
			<table>
				<thead>
					<tr id="tabla-lechesemi">
						<th colspan="4">Leche semidescremada</th>
					</tr>
					<tr>
						<th>Ingrediente</th>
						<th>Cantidad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
						<td>
							<a href="">
								<img src="imagenes/iconos/lapiz.png" width="20" height="20">
							</a>
						</td>
						<td>
							<a href="">
								<img src="imagenes/iconos/borrar-usuario.png" width="20" height="20">
							</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr id="tabla-lechedes">
						<th colspan="4">Leche descremada</th>
					</tr>
					<tr>
						<th>Ingrediente</th>
						<th>Cantidad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
						<td>
							<a href="">
								<img src="imagenes/iconos/lapiz.png" width="20" height="20">
							</a>
						</td>
						<td>
							<a href="">
								<img src="imagenes/iconos/borrar-usuario.png" width="20" height="20">
							</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr id="tabla-lecheentera">
						<th colspan="4">Leche entera</th>
					</tr>
					<tr>
						<th>Ingrediente</th>
						<th>Cantidad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
						<td>
							<a href="">
								<img src="imagenes/iconos/lapiz.png" width="20" height="20">
							</a>
						</td>
						<td>
							<a href="">
								<img src="imagenes/iconos/borrar-usuario.png" width="20" height="20">
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<br><br>

		<div>
			<table>
				<thead>
					<tr id="tabla-animal">
						<th colspan="4">Alimentos de origen animal</th>
					</tr>
					<tr id="tabla-muybajo">
						<th colspan="4">Muy bajo aporte de grasa</th>
					</tr>
					<tr>
						<th>Ingrediente</th>
						<th>Cantidad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>	
				</thead>
				<tbody>
					<tr>
						
						<td>
							<a href="">
								<img src="imagenes/iconos/lapiz.png" width="20" height="20">
							</a>
						</td>
						<td>
							<a href="">
								<img src="imagenes/iconos/borrar-usuario.png" width="20" height="20">
							</a>
						</td>	
					</tr>
				</tbody>
				<thead>
					<tr id="tabla-bajo">
						<th colspan="4">Bajo aporte de grasa</th>
					</tr>
					<tr>
						<th>Ingrediente</th>
						<th>Cantidad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
						<td>
							<a href="">
								<img src="imagenes/iconos/lapiz.png" width="20" height="20">
							</a>
						</td>
						<td>
							<a href="">
								<img src="imagenes/iconos/borrar-usuario.png" width="20" height="20">
							</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr id="tabla-moderado">
						<th colspan="4">Moderado aporte de grasa</th>
					</tr>
					<tr>
						<th>Ingrediente</th>
						<th>Cantidad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
						<td>
							<a href="">
								<img src="imagenes/iconos/lapiz.png" width="20" height="20">
							</a>
						</td>
						<td>
							<a href="">
								<img src="imagenes/iconos/borrar-usuario.png" width="20" height="20">
							</a>
						</td>	
					</tr>
				</tbody>
			</table>
		</div>
		<br><br>

		<div>
			<table>
				<thead>
					<tr id="tabla-azucar">
						<th colspan="4">Azúcares</th>
					</tr>
					<tr>
						<th colspan="4">Sin grasa</th>
					</tr>
					<tr>
						<th>Ingrediente</th>
						<th>Cantidad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
						<td>
							<a href="">
								<img src="imagenes/iconos/lapiz.png" width="20" height="20">
							</a>
						</td>
						<td>
							<a href="">
								<img src="imagenes/iconos/borrar-usuario.png" width="20" height="20">
							</a>
						</td>	
					</tr>
				</tbody>
			</table>
		</div>
		<br><br>

		<div>
			<table>
				<thead>
					<tr id="tabla-aceite">
						<th colspan="4">Aceite y grasas</th>
					</tr>
					<tr id="tabla-sin">
						<th colspan="4">Sin proteína</th>
					</tr>
					<tr>
						<th>Ingrediente</th>
						<th>Cantidad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
						<td>
							<a href="">
								<img src="imagenes/iconos/lapiz.png" width="20" height="20">
							</a>
						</td>
						<td>
							<a href="">
								<img src="imagenes/iconos/borrar-usuario.png" width="20" height="20">
							</a>
						</td>
					</tr>
				</tbody>
				<thead>
					<tr id="tabla-con">
						<th colspan="4">Con proteína</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
						<td>
							<a href="">
								<img src="imagenes/iconos/lapiz.png" width="20" height="20">
							</a>
						</td>
						<td>
							<a href="">
								<img src="imagenes/iconos/borrar-usuario.png" width="20" height="20">
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<br><br>

		<div>
			<table>
				<thead>
					<tr id="tabla-leguminosa">
						<th colspan="4">Leguminosas</th>
					</tr>
					<tr>
						<th>Ingrediente</th>
						<th>Cantidad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						
						<td>
							<a href="">
								<img src="imagenes/iconos/lapiz.png" width="20" height="20">
							</a>
						</td>
						<td>
							<a href="">
								<img src="imagenes/iconos/borrar-usuario.png" width="20" height="20">
							</a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<br><br>-->
	</main>
</body>
</html>