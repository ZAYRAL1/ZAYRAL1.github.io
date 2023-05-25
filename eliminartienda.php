<?php
include("conexiontienda.php");
$IDproducto = $_POST['IDproducto'];
$nuevo_nombre = $_POST['Nombre']; // Nuevo valor para el nombre
$nuevo_precio_may =  $_POST['Preciomay'];
$nuevo_precio_men =  $_POST['Preciomen'];
 $existe = 0;

 if($IDproducto ==""){
     echo "El numero de IDproducto es un campo obligatorio";
 }
 else{
     $result = mysqli_query($conexion, "SELECT * FROM productos");
     while ($consulta = mysqli_fetch_array($result)){
         $existe++;
     }
     if($existe == 0){
         echo "El numero de IDproducto NO existe";
     }
     else{
         $DELETE_SQL = "DELETE FROM productos WHERE IDproducto='$IDproducto'"; 
         mysqli_query($conexion, $DELETE_SQL);
         echo "El registro ha sido eliminado";

         }
     }
      header("location: administrador.php");
?> 
