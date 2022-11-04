<?php

    include 'conexionConBD.php';

    $id = $_POST["id"];
    $nombre_producto = $_POST["nombre_producto"];
    $sabor = $_POST["sabor"];
    $precio = $_POST["precio"];
    $breve_descripcion = $_POST["breve_descripcion"];

    $sql = "UPDATE productos SET nombre_producto='".$nombre_producto."' , sabor= '".$sabor."',". 
    "precio = '".$precio."', breve_descripcion = '".$breve_descripcion."'".
    "WHERE id=".$id;

    if($conexion->query($sql) === TRUE){
        include 'postRegistro.php';
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();

?>