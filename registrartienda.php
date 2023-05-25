<?php
include("conexiontienda.php");
$IDproducto=$_POST["IDproducto"];
$Nombre= $_POST["Nombre"];
$IDproveedor= $_POST["IDproveedor"];
$Preciomay= $_POST["Preciomay"];
$Preciomen= $_POST["Preciomen"];

echo "IDproducto".$IDproducto;
echo "Nombre".$Nombre;
echo "IDproveedor".$IDproveedor;
echo "Preciomay".$Preciomay;
echo "Preciomen".$Preciomen;

$query = "INSERT INTO productos VALUES('".$IDproducto."' , '".$Nombre."', '".$IDproveedor."', '".$Preciomay."', '".$Preciomen."')";
$resultado=$conexion->query($query);
if($resultado){
    echo "INSERCION CORRECTA";
}
else{
    echo "NO SE INSERTO";
}
?>