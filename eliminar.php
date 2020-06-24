<?php
	error_reporting(E_ALL);
	ini_set('display_errors','1');
	
	include("conexion.php");

	$id = $_GET['ID'];
	$qeliminar = "DELETE FROM PACIENTE WHERE ID ='".$id."'";
	mysqli_query($conn,$qeliminar);

	header('Location: bo_pacientes.php');
?>