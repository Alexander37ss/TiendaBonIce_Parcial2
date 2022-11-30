<?php

    session_start();

    if ($_SESSION['estado'] != 'activo'){
        echo '<script>';
            echo 'alert("No eres admin");';
            echo 'window.location.href="../index.php";';
        echo '</script>';
    }

?>