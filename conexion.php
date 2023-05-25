<?php
$conexion = new mysqli("localhost","root","","bdd");
if ($conexion){
    echo "Conexion Establecida";
}
else {
    echo "Conexion no establecida";
}
?>

