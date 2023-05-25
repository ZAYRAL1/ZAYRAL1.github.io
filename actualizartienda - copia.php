<?php
include("conexiontienda.php");
$IDproducto = $_POST['IDproducto'];
$nuevo_nombre = $_POST['nuevoNombre']; // Nuevo valor para el nombre
$nuevo_precio_men =  $_POST['nuevoPreciomen'];
$nuevo_precio_may =  $_POST['nuevoPreciomay'];
$existe = 0;

if ($IDproducto=="") {
    echo "El nombre actual es un campo obligatorio.";
} else {
    $result = mysqli_query($conexion, "SELECT * FROM productos WHERE IDproducto='$IDproducto'");
    while ($consulta = mysqli_fetch_array($result)) {
        $existe++;
    }
    if ($existe == 0) {
        echo "El nombre solicitado no existe.";
    } else {
        $_UPDATE_SQL = "UPDATE productos SET nombre='$nuevo_nombre' WHERE IDproducto= '$IDproducto'";
        mysqli_query($conexion, $_UPDATE_SQL);

        echo "El registro con el nombre $nombre_actual ha sido actualizado con el nuevo nombre $nuevo_nombre.";
    }
    
}

header("location: administrador.php");
?>