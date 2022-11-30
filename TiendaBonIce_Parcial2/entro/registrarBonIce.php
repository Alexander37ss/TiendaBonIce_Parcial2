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
    <br><br><br>
    <div class="container bg-light ">
        <div class="row">
            <div class="col-12">
                <h1>Registrar Usuario</h1><hr>
                <form method="post" action="guardarDatosBonIce.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input type="text" class="form-control" name="nombre_producto" placeholder="Teclea el nombre del producto">
                    </div>

                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <label class="sr-only" for="inlineFormInput">Sabor</label>
                            <input name="sabor" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Teclea un sabor">
                        </div>
                        <div class="col-auto">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input name="precio" type="number" class="form-control" id="inlineFormInputGroup" placeholder="Precio">
                                
                            </div>
                        </div>
                        <div class="col-auto">
                            <input type="file" name="file1">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="">Breve descripción:</label>
                        <textarea name="breve_descripcion" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-danger" value="Registrar">
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
