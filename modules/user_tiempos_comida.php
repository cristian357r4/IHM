<?php
?>
<!doctype html>
<html lang="es-mx">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <title>Smart Nutrition</title>

</head>
<body>

<?php include("_general_Header.php") ?>
<table class="table table-borderless">
    <tbody>
    <tr><!-- TODO Integrar un modal Para ver la tabla de alimentos compatibles-->
        <th><button type="button" class="btn btn-primary btn-block " >Verduras</button></th>
        <td><a href="#" class="btn btn-primary btn-block disabled" style="font-family: 'Britannic Bold', monospace" role="button">2</a></td>
    </tr>
    <tr>
        <th><button type="button" class="btn btn-primary btn-block " >Frutas</button></th>
        <td><a href="#" class="btn btn-primary btn-block disabled" style="font-family: 'Britannic Bold', monospace" role="button">2</a></td>
    </tr>
    <tr>
        <th><button type="button" class="btn btn-primary btn-block " >Cereales y tuberculos</button></th>
        <td><a href="#" class="btn btn-primary btn-block disabled" style="font-family: 'Britannic Bold', monospace" role="button">2</a></td>
    </tr>
    <tr>
        <th><button type="button" class="btn btn-primary btn-block " >Alimentos de origen
                animal</button></th>
        <td><a href="#" class="btn btn-primary btn-block disabled" style="font-family: 'Britannic Bold', monospace" role="button">2</a></td>
    </tr>
    <tr>
        <th><button type="button" class="btn btn-primary btn-block " >Lacteos</button></th>
        <td><a href="#" class="btn btn-primary btn-block disabled" style="font-family: 'Britannic Bold', monospace" role="button">2</a></td>
    </tr>
    <tr>
        <th><button type="button" class="btn btn-primary btn-block " >Aceites</button></th>
        <td><a href="#" class="btn btn-primary btn-block disabled" style="font-family: 'Britannic Bold', monospace" role="button">2</a></td>
    </tr>


    </tbody>
</table>
<br>
<a href="../plan_alimentacion.php" class="btn btn-primary btn-block" style="font-family: 'Britannic Bold', monospace" role="button">Volver</a>


</body>
</html>
