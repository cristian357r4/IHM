<?php
	error_reporting(E_ALL);
	ini_set('display_errors','1');

	include("conexionlocal.php");

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

	    $query = "SELECT '$pnombre','$pedad','$psexo','$preligion','$pestadocivil','$pocupacion','$pfecha','$ptelefono','$pcorreo','$ppeso','$pestatura'" FROM paciente;

	    $result = mysqli_query($conn,$query);

	    if ($result) {
	    	mysqli_close($conn);
	    }else{
	    	echo "No hay registros aun en la base de datos";
	    	mysqli_close($conn);
	    }
?>