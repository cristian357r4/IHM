<?php
	
	$conn = mysqli_connect("107.180.41.126","agjesus","123456","nutritionsmart");

	if($conn -> connect_error)
		die($conn -> connect_error);

	print "Conexion exitosa";

	exit(1);
?>