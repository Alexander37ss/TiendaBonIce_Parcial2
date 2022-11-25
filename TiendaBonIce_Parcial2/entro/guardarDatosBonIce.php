<?php

    include 'conexionConBD.php';


    $nombre_producto = $_POST["nombre_producto"];
    $sabor = $_POST["sabor"];
    $precio = $_POST["precio"];
    $breve_descripcion = $_POST["breve_descripcion"];

    $nom_archivo=$_FILES['file1']['name']; // Para conocer el nombre del archivo
    $ruta = "img/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
    $archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
    $subir=move_uploaded_file($archivo, $ruta); //se sube el archivo

    $sql = "INSERT INTO productos (nombre_producto, sabor, precio, breve_descripcion, imagen)". 
    "VALUES ('".$nombre_producto."', '".$sabor."', ".$precio.", '".$breve_descripcion."', '".$ruta."')";


    if($conexion->query($sql) === TRUE){
        include 'postRegistro.php';
        
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();
?>
