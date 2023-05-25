<?php
include("conexiontienda.php");
//$IDproducto=$_POST['IDproducto'];
?>
<html>
    <head>
        <title>MODIFICAR</title>
    </head>
    <body>
        <?php
        if(isset($_POST['Actualizar'])){
            $IDproducto=$_POST['IDproducto'];
            $Nombre=$_POST['Nombre'];
            $IDproveedor=$_POST['IDproveedor'];
            $Preciomay=$_POST['Preciomay'];
            $Preciomen=$_POST['Preciomen'];

            $sql="UPDATE productos set IDproducto='".$IDproducto."', Nombre='".$Nombre."', IDproveedor='".$IDproveedor."', Preciomay='".$Preciomay."', 
            Preciomen='".$Preciomen."' WHERE IDproducto='".$IDproducto."'";
            $result= mysqli_query($conexion, $sql);
            $result = mysqli_query ($conexion, "SELECT * FROM productos");

        } else {
            //$IDproducto=$_POST['IDproducto'];
            $sql="SELECT * FROM productos WHERE IDproducto='".$IDproducto."'";
            $result= mysqli_query($conexion, $sql);
            $consulta= mysqli_fetch_assoc($result);
            $IDproducto=$consulta['IDproducto'];
            $Nombre=$consulta['Nombre'];
            $IDproveedor=$consulta['IDproveedor'];
            $Preciomay=$consulta['Preciomay'];
            $Preciomen=$consulta['Preciomen'];
            //mysqli_close($conexion);
            
        }


        ?>
        <h1>EDITAR </h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <label>ID producto:</label>
            <input type="text" name="IDproducto" value="<?php echo $IDproducto?>"><br>
             <label>Nombre:</label>
             <input type="text" name="Nombre" value="<?php echo $Nombre?>"><br>
             <label>ID proveedor:</label>
             <input type="text" name="IDproveedor" value="<?php echo $IDproveedor?>"><br>
             <label>Precio mayoreo:</label>
             <input type="text" name="Preciomay" value="<?php echo $Preciomay?>"><br>
             <label>Precio menudeo:</label>
             <input type="text" name="Preciomen" value="<?php echo $Preciomen?>"><br>
             <input type="submit" name="Actualizar"value="Actualizar"> <a href="administrador.php">REGRESAR</a>

</form>
<?php 
?>

    </body>
    </html>
