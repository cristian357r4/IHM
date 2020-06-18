<?php
session_start();
?>
<!doctype html>
<html lang="es-mx">
<head>
    <title>Smart Nutrition</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <title>Smart Nutrition</title>

</head>
<body>

<?php include("modules/_general_Header.php") ?>
<div class="container container-fluid mt-3">
    <button type="button" class="btn btn-primary btn-block " data-toggle="collapse" data-target="#verduras">Verduras</button>
    <div id="verduras" class="collapse">
        <img src="imagenes/verduras.png" class="rounded" alt="Cinque Terre" width="300" >
    </div><br>

    <button type="button" class="btn btn-primary btn-block " data-toggle="collapse" data-target="#frutas">Frutas</button>
    <div id="frutas" class="collapse">
        <img src="imagenes/frutas.png" class="rounded" alt="Cinque Terre" width="290" >
    </div><br>

    <button type="button" class="btn btn-primary btn-block " data-toggle="collapse" data-target="#cereales">Cereales y Tuberculos</button>
    <div id="cereales" class="collapse">
        <img src="imagenes/cereales.png" class="rounded" alt="Cinque Terre" width="290">
    </div><br>

    <button type="button" class="btn btn-primary btn-block " data-toggle="collapse" data-target="#leguminosas">Leguminosas</button>
    <div id="leguminosas" class="collapse">
        <img src="imagenes/leguminosas.png" class="rounded" alt="Cinque Terre" width="293">
    </div><br>

    <button type="button" class="btn btn-primary btn-block " data-toggle="collapse" data-target="#origen_animal">Alimentos de Origen Animal</button>
    <div id="origen_animal" class="collapse">
        <img src="imagenes/animal.png" class="rounded" alt="Cinque Terre" width="295">
    </div><br>

    <button type="button" class="btn btn-primary btn-block " data-toggle="collapse" data-target="#lacteos">Lacteos</button>
    <div id="lacteos" class="collapse">
        <img src="imagenes/leche.png" class="rounded" alt="Cinque Terre" width="293" >
    </div><br>

    <button type="button" class="btn btn-primary btn-block " data-toggle="collapse" data-target="#aceites">Aceites y Grasas</button>
    <div id="aceites" class="collapse">
        <img src="imagenes/aceites.png" class="rounded" alt="Cinque Terre" width="293">
    </div>
    <br>

    <button type="button" class="btn btn-primary btn-block " data-toggle="collapse" data-target="#azucares">Azucares</button>
    <div id="azucares" class="collapse">
        <img src="imagenes/azucar.png" class="rounded" alt="Cinque Terre" width="293">
    </div>
    <br>
    <a href="./user_index.php" class="btn btn-primary btn-block" style="font-family: 'Britannic Bold', monospace" role="button">Volver</a>

</div>

</body>
</html>