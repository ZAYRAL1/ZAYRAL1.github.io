<?php
include("conexiontienda.php");
$result = mysqli_query($conexion, "SELECT * FROM productos");
$IDproducto = $_POST['IDproducto'];
while($consulta=mysqli_fetch_assoc($result))
 ?>   
    <tr>
        <td><?php echo $consulta['IDproducto']?></td>
        <td><?php echo $consulta['Nombre']?></td>
        <td><?php echo $consulta['IDproveedor']?></td>
        <td><?php echo $consulta['Preciomay']?></td>
        <td><?php echo $consulta['Preciomen']?></td>
<td>
    <?php echo "<a href='modificarej.php' IDproducto='".$consulta['IDproducto']."'>EDITAR</a>"; ?>
    
</td>
</tr>
<?php
?>
