<?php
include("conexion.php");
$control = $_POST['control'];
$nuevo_nombre = $_POST['nuevoNombre']; // Nuevo valor para el nombre
$existe = 0;

if ($control=="") {
    echo "El nombre actual es un campo obligatorio.";
} else if ($nuevo_nombre=="") {
    echo "El nuevo nombre es un campo obligatorio.";
} else {
    $result = mysqli_query($conexion, "SELECT * FROM alumnos WHERE control='$control'");
    while ($consulta = mysqli_fetch_array($result)) {
        $existe++;
    }
    if ($existe == 0) {
        echo "El nombre solicitado no existe.";
    } else {
        $_UPDATE_SQL = "UPDATE alumnos SET nombre='$nuevo_nombre' WHERE control= '$control'";
        mysqli_query($conexion, $_UPDATE_SQL);

        echo "El registro con el nombre $nombre_actual ha sido actualizado con el nuevo nombre $nuevo_nombre.";
    }
}
header("location: consultaeliminar.php");
?>