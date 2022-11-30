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
<?php
    include 'conexionConBD.php';

    $id = $_GET["id"];
?>
<br><br><br><br><br>
<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Registro <?php echo "$id"; ?> Eliminado</h5>
    <a href="consultarDatos.php" class="btn btn-danger">Regresar</a>
  </div>
</div>
    <script src="js/bootstrap.js"></script>
</body>
</html>

