<?php
    session_start();
    if($_SESSION["sesionOn"] != "si") {
        header("Location: index.php?error=Debes inicias sesión para ver esta página");
        exit();
    }
?>