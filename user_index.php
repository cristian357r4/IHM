<?php
    session_start();
?>
<!doctype html>
<html lang="es-mx">
<head>
    <title>Smart Nutrition</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <title>Smart Nutrition</title>
    <style>
        #salirBtn{
            display: block;
            position: fixed;
            top: 20px;
            right: 10px;
            z-index: 99;
            font-size: 18px;
            font-family: "Britannic Bold", monospace;
            border: none;
            outline: none;
            background-color: #cfaaf3;
            color: black;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }
        #myBtn {
            display: block;
            position: fixed;
            bottom: 20px;
            right: 10px;
            z-index: 99;
            font-size: 18px;
            font-family: "Britannic Bold", monospace;
            border: none;
            outline: none;
            background-color: #cfaaf3;
            color: black;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }
        #myBtn2 {
            display: block;
            position: fixed;
            bottom: 20px;
            right: 130px;
            z-index: 99;
            font-size: 18px;
            font-family: "Britannic Bold", monospace;
            border: none;
            outline: none;
            background-color: #cfaaf3;
            color: black;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }
        #myBtn3 {
            display: block;
            position: fixed;
            bottom: 20px;
            right: 225px;
            z-index: 99;
            font-size: 18px;
            font-family: "Britannic Bold", monospace;
            border: none;
            outline: none;
            background-color: #cfaaf3;
            color: black;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        #myBtn:hover {
            background-color: #555;
        }
    </style>


</head>
<body>

<?php require("modules/_header.php") ?>


<?php require("modules/informacion_usuario.php") ?>

</body>
<footer>
    <div class="card-footer text-muted fixed-bottom">
        <a id="myBtn" href="#" class="btn btn-default"  data-toggle="tooltip" title="Funcion no disponible!" role="button">Ajustes</a>

        <a id="salirBtn" href="index.php" class="btn btn-secondary"  role="button">Salir</a>

        <a id="myBtn2" href="plan_alimentacion.php" class="btn btn-default" role="button">Plan</a>

        <a id="myBtn3" href="tabla_alimentacion.php" class="btn btn-default" role="button">Tabla</a>
    </div>
    <div>

    </div>
</footer>



<script>

    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        mybutton.style.display = "block";
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>


</html>
