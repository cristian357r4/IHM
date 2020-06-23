<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

    include("conexion.php");

    if (isset($_POST['aceptar'])) {
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

	    if($result){
	    	mysqli_close($conn);
	    	header('Location: co_pacientes.php');
	    }else{
	    	echo '<script language="javascript">alert("Hay problemas con el registro");</script>';
	    	mysqli_close($conn);
	    }
    }

?>
