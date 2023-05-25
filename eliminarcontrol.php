<?php
include("conexion.php");
$control = $_POST['control'];
echo $control; 
 $existe = 0;

 if($control ==""){
     echo "El numero de control es un campo obligatorio";
 }
 else{
     $result = mysqli_query($conexion, "SELECT * FROM alumnos");
     while ($consulta = mysqli_fetch_array($result)){
         $existe++;
     }
     if($existe == 0){
         echo "El numero de control NO existe";
     }
     else{
         $DELETE_SQL = "DELETE FROM alumnos WHERE control='$control'"; 
         mysqli_query($conexion, $DELETE_SQL);
         echo "El registro ha sido eliminado";

         }
     }
      header("location: consultaeliminar.php");
?> 

