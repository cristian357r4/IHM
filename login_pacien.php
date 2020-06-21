<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- php login pacientes -->
	<?php
		error_reporting(E_ALL);
		ini_set('display_errors', '1');

		include("conexion.php");

		$puser = $_POST['user'];
		$ppass = $_POST['pass'];
		
	?>
</body>
</html>