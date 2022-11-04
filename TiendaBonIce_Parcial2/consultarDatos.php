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
           
        include 'conexionConBD.php';
        /* 
            Esto nos dice que lo BD que seleccionamos 
            (en este caso BonIceBD)
            y la tabla es productos
        */
        $sql = "select * from productos";
        $datos = $conexion->query($sql);

    ?>

    <?php include 'menu.php'; ?>
    <br><br><br><br>
    <div class="container" >
        <div class="row">
            <div class="col-12">
                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th >ID</th>
                            <th>Nombre Producto</th>
                            <th>Sabor</th>
                            <th>Precio</th>
                            <th>Breve Descripción</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php if($datos->num_rows > 0) { 
                          while($row = $datos->fetch_assoc()) {
                      ?>
                        <tr class="bg-warning">
                            <td class="bg-secondary text-white"><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["nombre_producto"]; ?></td>
                            <td><?php echo $row["sabor"]; ?></td>
                            <td><?php echo $row["precio"]; ?></td>
                            <td><?php echo $row["breve_descripcion"]; ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="actualizarRegistro.php?id=<?php echo $row["id"]; ?>" type="button" class="btn btn-info">Editar</a>
                                    <a href="eliminarRegistro.php?id=<?php echo $row["id"]; ?>" type="button" class="btn btn-dark">Eliminar</a>                            
                                </div>
                            </td>
                        </tr>
                      <?php 
                      } 
                    }
                    $conexion->close();
                      ?>
                    </tbody>
                </table>
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