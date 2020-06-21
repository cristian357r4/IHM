<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!-- php login -->
	<?php
		error_reporting(E_ALL);
		ini_set('display_errors', '1');

    	//include("conexion.php");
		$conn = mysqli_connect("107.180.41.126","agjesus","123456","nutritionsmart");

		if (!$conn) {
 			 die("Connection failed: " . mysqli_connect_error());
		}
	/*if($conn -> connect_error)
		die($conn -> connect_error);*/

		//echo("conexion exitosa");

    	$nuser = $_POST['user'];
    	$npass = $_POST['pass'];

    	$query = "SELECT * FROM ADMINISTRADOR"; //WHERE USUARIO = '$nuser' AND CONTRASENYA = '$npass'";
    	echo $query;

    	if(mysqli_query($conn,$query)){
    		echo "consulta exitosa";
    	}else{
    		echo "no puedo entrar";
    	}

    	mysqli_close($conn);
    	/*echo "ABC".$result ;
    	echo mysqli_num_rows($result);
    	if (mysqli_num_rows($result) > 0) {
  			
  			echo "entro";
  			//mysqli_close($conn);
  			//header('Location: index.php');
		}else{
			echo "noentro";
			//mysqli_close($conn);
			//header('Location: login_nutriologos.php');
		}*/

	?>
</body>
</html>