<?php
include_once "modules/desayuno.php";
include_once "modules/colacion1.php";
include_once "modules/comida.php";
include_once "modules/colacion2.php";
include_once "modules/cena.php";
?>


<div class="container mt-3">
    <h2>Plan de Alimentacion</h2>
    <!--    TODO Modal information-->


    <button class="btn-block btn btn-primary" data-toggle="modal" data-target="#desayuno"
            style="font-family: 'Britannic Bold', monospace" >Desayuno</button>
    <button class="btn-block btn btn-primary" data-toggle="modal" data-target="#colacion1"
            style="font-family: 'Britannic Bold', monospace" >Colacion</button>
    <button class="btn-block btn btn-primary" data-toggle="modal" data-target="#comida"
            style="font-family: 'Britannic Bold', monospace" >Comida</button>
    <button class="btn-block btn btn-primary" data-toggle="modal" data-target="#colacion2"
            style="font-family: 'Britannic Bold', monospace" >Colacion</button>
    <button class="btn-block btn btn-primary" data-toggle="modal" data-target="#cena"
            style="font-family: 'Britannic Bold', monospace" >Cena</button>
    <a href="./user_index.php" class="btn btn-primary btn-block" style="font-family: 'Britannic Bold', monospace"
       role="button">Volver</a>




</div>
