<!DOCTYPE html>
<html>
<head>
    <title>TAREA ACTUALIZAR</title>
    <script type="text/javascript">
        function confirmarEliminacion() {
            return confirm("Esta seguro de que desea eliminar este elemento?");
        }
    </script>
    <script type="text/javascript">
        function confirmarActualizar() {
            return confirm("Esta seguro de que desea Actualizar este elemento?");
        }
    </script>
</head>
<body>
<?php
    include("conexion.php");
    $resultados = mysqli_query($conexion, "SELECT * FROM alumnos");

echo
" <table width=\"100%\" border=\"1\">
<th> FORMULARIO PARA CONSULTAR</th>
   <tr>
      <td><b><center>NUMERO DE CONTROL</center></b></td>
      <td><b><center>NOMBRE</center></b></td>
      <td><b><center>PULSA PARA ELIMINAR</center></b></td>
      <td><b><center>PULSA PARA ACTUALIZAR</center></b></td>
      

    </tr>";

    while($consulta =mysqli_fetch_array($resultados)){
        echo
        "
        <tr>
           <td> ".$consulta['control']."</td>
           <td> ".$consulta['nombre']."</td>

           <td> <BR><form method='post' action='eliminarcontrol.php' onsubmit='return confirmarEliminacion()'> \n
           <input type='hidden' name='control' value='".$consulta['control']."'>
           <input type='submit' value='Eliminar Registro'>
           </form></td>

           <td> <BR><form method='post' action='actualizar.php'onsubmit='return confirmarActualizar()'> \n
           <input type='hidden' name='control' value='".$consulta['control']."'>
           <input type='text' name='nuevoNombre' placeholder='Inserta Nuevo Nombre'>
           <input type='submit' name='actualizar' value='Actualizar Registro'>
           
           </form></td>
        </tr>
        ";
    }

    echo "</table>";
?>
</body>
</html>