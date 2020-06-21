<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		error_reporting(E_ALL);
		ini_set('display_errors', '1');

    	include("conexion.php");

    	$pnombre = $_POST['nombre'];
    	$pedad = $_POST['edad'];
    	$psexo = $_POST['sexo'];
    	$preligion = $_POST['religion']; 
    	$pestadocivil = $_POST['estadocivil'];
    	$pocupacion = $_POST['ocupacion'];
    	$pfechadenacimiento = $_POST['fecha'];
    	$ptelefono = $_POST['telefono'];
    	$pemail = $_POST['correo'];
    	$ppeso = $_POST['peso'];
    	$pestatura = $_POST['estatura'];

    	$query = "INSERT INTO PACIENTE (NOMBRE,EDAD,SEXO,RELIGION,ESTADOCIVIL,OCUPACION,FECHADENACIMIENTO,TELEFONO,CORREO,PESO,ESTATURA) VALUES ('$pnombre','$pedad','$psexo','$preligion','$pestadocivil','$pocupacion','$pfechadenacimiento','$ptelefono','$pemail','$ppeso','$pestatura')";

    	$result = mysqli_query($conn,$query);

    	if(mysqli_num_rows($result) > 0){
    		echo "ingreso correcto del paciente";
    		mysqli_close($conn);
    		header('Location: ag_pacientes.php');
    	}else{
    		echo "algo esta mal, no se logro el registro";
    		mysqli_close($conn);
    		header('Location: paginacentral.php');
    	}
	?>
</body>
</html>