
<?php include '../cerrarSesion.php'; ?>

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
    <?php include 'menu.php'; ?>
    <br><br><br><br><br><br><br><br>
    <div class="container ">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron bg-dark text-light">
                    <h1 class="display-4">Encuentra tus BonIce favoritos</h1>
                    <div>
                        <div class="text-center">
                            <img src="img/vendedor.jpg" style="float: right"  width="250px" class="img-thumbnail">
                        </div>
                        <p class="lead">
                        El rincon donde podras comprar BonIce:
                         <ul>
                            <li>Ver catalogo</li>
                            <li>Registrar nuevos productos</li>
                            <li>Editar productos</li>
                            <li>Eliminar productos</li>
                         </ul>
                        </p>
                        </div>
                    <hr class="my-4">
                    <p>PROYECTO PARCIAL 2</p>
                  </div>
            </div>
        </div>
    </div>
    <footer class="text-center">
        <br><br><br><br><br><br>    
        2022 &copy; Cetis107 BonIce
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>