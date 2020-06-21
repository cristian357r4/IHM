<?php
	$conn = mysqli_connect("localhost","root","","nutritionsmart");

	if (!$conn) {
 		die("Connection failed: " . mysqli_connect_error());
	}

?>