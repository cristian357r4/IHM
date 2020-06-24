<?php 
	error_reporting(E_ALL);
	ini_set('display_errors','1');

	include("conexion.php");

	$id = $_GET['ID'];
	$qeditar = "SELECT ID,NOMBRE,EDAD,SEXO,RELIGION,ESTADOCIVIL,OCUPACION,FECHADENACIMIENTO,TELEFONO,CORREO,PESO,ESTATURA FROM PACIENTE WHERE ID ='".$id."'";
	$resultado = mysqli_query($conn,$qeditar);

	while($fila = mysqli_fetch_assoc($resultado)){

?>

		<!-- Formulario de ingresar personas (actualizar datos) -->
		<input type="text" name="" value="Nombre prueba">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" >
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Nombre</span>
					<input class="input100" type="text" name="nombre" id="nombre" placeholder="Introduce nombre" value="<?php echo $fila['NOMBRE'] ?>" >
				</div>
				<br>
					
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Edad</span>
					<input class="input100" type="number" name="edad" id="edad" min="1" max="100" placeholder="Introduce edad" value="<?php echo $fila['EDAD'] ?>">
				</div>
				<br>
					
				<div class="wrap-input100 input100-select bg1">
					<span class="label-input100">Sexo</span>
						<div>
							<select name="sexo" id="sexo" value="<?php echo $fila['SEXO'] ?>">
								<option value="masculino">Masculino</option>
								<option value="femenino">Femenino</option>
								</select>	
							<div class="dropDownSelect2"></div>
						</div>
				</div>
				<br>

				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Religion</span>
					<input class="input100" type="text" name="religion" id="religion" placeholder="Introduce religion" value="<?php echo $fila['RELIGION'] ?>">
				</div>
				<br>
					
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Estado Civil</span>
					<input class="input100" type="text" name="estadocivil" id="estadocivil" placeholder="Introduce estado civil" value="<?php echo $fila['ESTADOCIVIL'] ?>">
				</div>
				<br>
					
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Ocupacion</span>
					<input class="input100" type="text" name="ocupacion" id="ocupacion" placeholder="Introduce ocupacion" value="<?php echo $fila['OCUPACION'] ?>">
				</div>
				<br>
					
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Fecha de nacimiento</span>
					<input class="input100" type="date" name="fecha" id="fecha" value="<?php echo $fila['FECHADENACIMIENTO'] ?>">
				</div>
				<br>
					
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Telefono</span>
					<input class="input100" type="tel" name="telefono" id="telefono" placeholder="Introduce numero telefonico" value="<?php echo $fila['TELEFONO'] ?>">
				</div>
				<br>
					
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Email</span>
					<input class="input100" type="email" name="correo" id="correo" placeholder="Introduce email" value="<?php echo $fila['CORREO'] ?>">
				</div>
				<br>
					
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Peso</span>
					<input class="input100" type="number" name="peso" id="peso" min="1" max="150" placeholder="Introduce peso" value="<?php echo $fila['PESO'] ?>">
				</div>
				<br>
					
				<div class="wrap-input100 validate-input bg1">
					<span class="label-input100">Estatura</span>
					<input class="input100" type="number" name="estatura" id="estatura" min="1" max="250" placeholder="Introduce estatura" value="<?php echo $fila['ESTATURA'] ?>">
				</div>
				<br>

				<input type="submit" class="btn" name="actualizar" value="Actualizar">
				<input type="reset" class="btn" name="cancelar" value="Cancelar">
			</form>
		</div>

	
<?php
	if (isset($_POST['actualizar'])) {
			$enombre = $_POST['nombre'];
			$eedad = $_POST['edad'];
			$esexo = $_POST['sexo'];
			$ereligion = $_POST['religion'];
			$eestadocivil = $_POST['estadocivil'];
			$eocupacion = $_POST['ocupacion'];
			$efecha = $_POST['fecha'];
			$etelefono = $_POST['telefono'];
			$ecorreo = $_POST['correo'];
			$epeso = $_POST['peso'];
			$eestatura = $_POST['estatura'];

			$qeditar2 = "UPDATE PACIENTE SET NOMBRE='".$enombre."', EDAD='".$eedad."', SEXO='".$esexo."', RELIGION='".$ereligion."', ESTADOCIVIL='".$eestadocivil."', OCUPACION='".$eocupacion."', FECHADENACIMIENTO='".$efecha."', TELEFONO='".$efecha."', CORREO='".$ecorreo."', PESO='".$epeso."', ESTATURA='".$eestatura."'";
			echo $qeditar2;

			$resultado2 = mysqli_query($conn,$qeditar2);

			echo $resultado2;

			if ($enombre = 1) {
				header('Location: con_pacientes.php');
			}
	}	

?>