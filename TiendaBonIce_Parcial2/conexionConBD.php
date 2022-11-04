<?php
    # Esto nos permite conectarnos con la base de datos practica_web

    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "BonIceBD";

    $conexion = new mysqli($server, $user, $password, $database);
?>