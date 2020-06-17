<?php
    include_once "../config/Mysql.php";

session_start();
$test = new Mysql();
$test->dbConnect();
//$cadena_query = "select NOMBRE,USUARIO,CONTRASENA from paciente where USUARIO='".$_POST['user']."'";
$result = $test->selectWhere('paciente','USUARIO','=',$_POST['user'],'char');


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_array()) {
        echo count($row);
        echo "Bienvenido" . $row['NOMBRE']. " - Usuario:  " . $row['USUARIO']. " - Password " . $row['CONTRASENA']. "<br>";
        echo  $row["USUARIO"].$row["NOMBRE"].$row["SEXO"].$row["PESO"];
        session_start();
        $_SESSION['id'] = $row["ID"];
        $_SESSION['nombre'] = $row["NOMBRE"];
        $_SESSION['usuario'] =  $row["USUARIO"];
        $_SESSION['edad'] =     $row["EDAD"];
        $_SESSION['sexo'] =     $row["SEXO"];
        $_SESSION['peso'] =     $row["PESO"];



        header("location:../user_index.php");

    }
} else {
    header("location:../login_pacientes.php");
    echo "El usuario no esta registrado";
}