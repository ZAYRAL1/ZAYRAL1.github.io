<?php
include("conexion.php");
$control=$_POST["control"];
$nombre= $_POST["nombre"];

echo "control".$control;
echo "nombre".$nombre;

$query = "INSERT INTO alumnos VALUES('".$control."' , '".$nombre."')";
$resultado=$conexion->query($query);
if($resultado){
    echo "INSERCION CORRECTA";
}
else{
    echo "NO SE INSERTO";
}
?>
