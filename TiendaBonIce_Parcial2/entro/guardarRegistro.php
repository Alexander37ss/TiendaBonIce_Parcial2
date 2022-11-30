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

    if ($_FILES["file1"]["error"] > 0)
	{
	} else 
	{

		$nom_archivo=$_FILES['file1']['name']; // Para conocer el nombre del archivo
		$ruta = "img/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
		$archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
		$subir=move_uploaded_file($archivo, $ruta); //se sube el archivo
		
		include 'conexionConBD.php';
		$sentencia_img="UPDATE productos SET imagen='$ruta' WHERE id='".$_POST['id']."' ";
		$conexion->query($sentencia_img) or die ("Error al actualizar datos".mysqli_error($conexion));
		
	}

    if($conexion->query($sql) === TRUE){
        include 'postRegistro.php';
    } else {
        echo "Error: ".$sql."<br>".$conexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>";
    }

    $conexion->close();

?>