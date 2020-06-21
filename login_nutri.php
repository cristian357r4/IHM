<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- php login -->
	<?php
    	include("conexion.php");

    	session_start();

    	$nuser = $_POST['user'];
    	$npass = $_POST['pass'];

    	$query = "SELECT USUARIO, CONTRASENYA FROM ADMINISTRADOR WHERE USUARIO = '$nuser' AND CONSTRASENYA = '$npass'";
    	echo $query;

    	$result = mysqli_query($conn,$query);

    	if (mysqli_num_rows($result) > 0) {
  			echo("entra");
  			mysqli_close($conn);
  			//header('Location: index.php');
		}else{
			echo "no entra";
			mysqli_close($conn);
			//header('Location: login_nutriologos.php');
		}

	?>
</body>
</html>