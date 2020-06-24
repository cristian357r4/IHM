<?php
	include("conexion.php");

	$id = $_GET['ID'];
	$qeliminar = "DELETE FROM PACIENTE WHERE ID ='".$id."'";
	mysqli_query($conn,$qeliminar);

	header('Location: bo_pacientes.php');
?>