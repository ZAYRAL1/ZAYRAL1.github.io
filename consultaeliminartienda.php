<?php
    include("conexiontienda.php");
    $result = mysqli_query ($conexion, "SELECT * FROM productos");


echo
" <table width=\"100%\" border=\"1\">
<th> FORMULARIO PARA CONSULTAR</th>
   <tr>
      <td><b><center>ID PRODUCTO</center></b></td>
      <td><b><center>NOMBRE</center></b></td>
      <td><b><center>ID PROVEEDOR</center></b></td>
      <td><b><center>PRECIO MAYOREO</center></b></td>
      <td><b><center>PRECIO MENUDEO</center></b></td>
      <td><b><center>PULSA PARA ELIMINAR</center></b></td>

    </tr>";

    while($consulta =mysqli_fetch_array($result)){
        echo
        "
        <tr>
           <td> ".$consulta['IDproducto']."</td>
           <td> ".$consulta['Nombre']."</td>
           <td> ".$consulta['IDproveedor']."</td>
           <td> ".$consulta['Preciomay']."</td>
           <td> ".$consulta['Preciomen']."</td>

           <td><BR><form method='post' action='eliminartienda.php '>\n
           <input type='hidden' name='Nombre' value='".$consulta['Nombre']."'>
           <input type='submit' value='Eliminar Producto'>
           </form></td>


        </tr>
        ";
    }
    echo "</table>";
?>