<?php
    include 'conexionConBD.php';

    $id = $_GET["id"];

    $sql = "DELETE FROM productos WHERE id=" . $id;

    if($conexion->query($sql) === TRUE){
        include 'postEliminación.php';
    }

?>