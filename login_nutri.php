<!-- php login nutriologos -->
<?php
	error_reporting(E_ALL);
	ini_set('display_errors', '1');

    include("conexion.php");
		

   	$nuser = $_POST['user'];
   	$npass = $_POST['pass'];

   	$query = "SELECT * FROM ADMINISTRADOR WHERE USUARIO = '$nuser' AND CONTRASENYA = '$npass'";

    $result = mysqli_query($conn, $query);
    	
    if (mysqli_num_rows($result) > 0) {
  		mysqli_close($conn);
  		header('Location: paginacentral.php');
	}else{
		mysqli_close($conn);
		header('Location: login_nutriologos.php');
	}

?>