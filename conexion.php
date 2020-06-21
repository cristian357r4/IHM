<?php
	$conn = mysqli_connect("107.180.41.126","agjesus","123456","nutritionsmart");

	if (!$conn) {
 		die("Connection failed: " . mysqli_connect_error());
	}

?>