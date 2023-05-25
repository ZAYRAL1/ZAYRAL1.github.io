<html>
    <head><title>INSERTAR PRODUCTOS</title></head>
    <body>
        <form name="form1" action="registrartienda.php" method="post">
            <table border="3" align="center">
                <tr>
                    <td><p>ID producto</p></td>
                    <td><input type="text" name="IDproducto" id="IDproducto" placecholder="IDproducto">
                </tr>
                <tr>
                    <td><p>Nombre del producto</p></td>
                    <td><input type="text" name="Nombre" id="Nombre" placecholder="Nombre">
                </tr>
                <tr>
                    <td><p>ID proveedor</p></td>
                    <td><input type="text" name="IDproveedor" id="IDproveedor" placecholder="IDproveedor">
                </tr>
                <tr>
                    <td><p>Precio mayoreo</p></td>
                    <td><input type="text" name="Preciomay" id="Preciomay" placecholder="Preciomay">
                </tr>
                <tr>
                    <td><p>Precio menudeo</p></td>
                    <td><input type="text" name="Preciomen" id="Preciomen" placecholder="Preciomen">
                </tr>
                <tr>
                    <td><input type="submit" value="insertar productos"></td>
                    <td><input type="button" name="cancelar" value="Cancelar"></td> 
                </tr>
                
            </table>
        </form>
    </body>
</html>
