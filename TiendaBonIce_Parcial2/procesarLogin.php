<?php
	ConsultarUsuario($_POST['inputUsuario'], $_POST['inputPassword']);

	function ConsultarUsuario($usuario, $password)
	{
		include 'conexionConBD.php';
		$sentencia= "SELECT * FROM usuarios 
        WHERE usuario='".$usuario."' AND password='".$password."'  ";
		$resultado=$conexion->query($sentencia);

		$count = mysqli_num_rows($resultado); //Numero de filas del resultado de la consulta

		if($count > 0) //si la variable count es mayor a 0
		{
			echo '<script>';
				echo 'alert("Bienvenido!!");';
				echo 'window.location.href="index2.php";';
			echo '</script>';
		}
		else
		{
			echo '<script>';
				echo 'alert("Datos de acceso incorrectos");';
				echo 'window.location.href="index.php";';
			echo '</script>';
		}
	}
?>