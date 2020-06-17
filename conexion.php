<?php
	$conn = mysqli_connect("localhost","root","","nutritionsmart");

	if($conn -> connect_error)
		die($conn -> connect_error);

	print "Conexion exitosa";

	exit(1);
?>