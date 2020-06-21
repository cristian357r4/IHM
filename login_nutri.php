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

    	$query = "SELECT ID, USUARIO, CONTRASENYA FROM ADMINISTRADOR WHERE USUARIO = '$nuser' AND CONTRASENYA = '$npass'";
    	echo $query;

    	$result = mysqli_query($conn,$query);

    	if (mysqli_num_rows($result) > 0) {
  			echo "entro";
  			//mysqli_close($conn);
  			//header('Location: index.php');
		}else{
			echo "noentro";
			//mysqli_close($conn);
			//header('Location: login_nutriologos.php');
		}

	?>
</body>
</html>