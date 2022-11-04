<?php

    include 'conexionConBD.php';

    $nombre_producto = $_POST["nombre_producto"];
    $sabor = $_POST["sabor"];
    $precio = $_POST["precio"];
    $breve_descripcion = $_POST["breve_descripcion"];

    $sql = "INSERT INTO productos (nombre_producto, sabor, precio, breve_descripcion)". 
    "VALUES ('".$nombre_producto."', '".$sabor."', ".$precio.", '".$breve_descripcion."')";


    if($conexion->query($sql) === TRUE){
        include 'postRegistro.php';
        
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>
