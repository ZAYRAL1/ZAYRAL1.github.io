<?php
    include("conexion.php");
    $result = mysqli_query($conexion, "SELECT * FROM alumnos");


echo
" <table width=\"100%\" border=\"1\">
<th> FORMULARIO PARA CONSULTAR</th>
   <tr>
      <td><b><center>NUMERO DE CONTROL</center></b></td>
      <td><b><center>NOMBRE</center></b></td>
    </tr>";

    while($consulta =mysqli_fetch_array($result)){
        echo
        "
        <tr>
           <td> ".$consulta['control']."</td>
           <td> ".$consulta['nombre']."</td>
        </tr>
        ";
    }
    echo "</table>";
?>