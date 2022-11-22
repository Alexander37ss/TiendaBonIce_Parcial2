<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BonIce</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.6.1.js"></script>
</head>
<style>
    .fondo{
        background-color: #17a2b8;
    }
</style>
<body class="fondo">
    <?php
    #Falta
        include 'conexionConBD.php';
        $id = $_GET["id"];
        $sql = "SELECT * FROM productos WHERE id=" . $id;
        $resultado = $conexion->query($sql);
        $registro = $resultado->fetch_assoc();
    ?>
    <?php include 'menu.php'; ?>
    <br><br><br>
    <div class="container bg-warning">
        <div class="row">
            <div class="col-12">
                <h1>Actualizar Registro</h1><hr>
                <form method="post" action="guardarRegistro.php" enctype="multipart/form-data">

                    <input name="id" type="hidden" value="<?php echo $registro["id"]; ?>">

                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input value="<?php echo $registro["nombre_producto"]; ?>" type="text" class="form-control" name="nombre_producto">
                    </div>


                    <div class="form-row align-items-center">
                        <div class="col-auto">                            
                            <input value="<?php echo $registro["sabor"]; ?>" name="sabor" type="text" class="form-control mb-2" id="inlineFormInput">
                        </div>
                        <div class="col-auto">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input value="<?php echo $registro["precio"]; ?>" name="precio" type="number" class="form-control" id="inlineFormInputGroup">
                            </div>
                        </div>
                        <div class="col-auto">
                            <input type="file" name="file1">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Breve descripción:</label>
                        <textarea class="form-control" name="breve_descripcion" rows="10" ><?php echo $registro["breve_descripcion"]; ?></textarea>
                    </div>


                    <div>
                        <input type="submit" class="btn btn-info" value="   Actualizar   ">
                        <a href="consultarDatos.php" class="btn btn-danger">Cancelar Edición</a>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <hr>
        2022 &copy; Cetis107 Desarrollo Web
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>
