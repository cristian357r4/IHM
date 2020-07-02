<?php
	$conn = mysqli_connect("localhost","agjesus","12345","nutritionsmart");

	if (!$conn) {
 		die("Connection failed: " . mysqli_connect_error());
	}

	echo "Conexion exitosa";
?>