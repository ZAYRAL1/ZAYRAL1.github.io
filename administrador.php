<HTML>
    <HEAD>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <TITLE>
            Globos y Sorpresas
        </TITLE>
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


        <script>
            function valor() {
                var nombre;
                nombre = prompt("Introduce tu Nombre:", " ");
                alert("hola" + " " + nombre + "" + "," + "ESTAS EN LA VISTA DE ADMINISTRADOR");
            }
            document.querySelector('form').addEventListener('submit',
                function (event) {
                    if (!document.getElementById('eliminarproductos').checked) {
                        alert('Debes seleccionar algun producto');
                        event.preventDefault();
                    }
                });
        </script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="estilos1.css" />
        <link rel="shortcut icon" href="logo icono.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
            integrity="sha384-6mVEWLZGpUgMhU6KdW8rO7X9RgO+QrKGhCw/voYGZz4YRIZT/7bQjNkxzsGIPxNl" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
            integrity="sha384-FpVtM5eYFx5n0xLTQOxuL7KgPFidWXSJTH5fzveKZ5V5yYok5K7XgpXjKkRS7JN/"
            crossorigin="anonymous"></script>
        <div id="verde" style="background-color:white; font-style:Verdana">
            <A HREF="globosysorpresas.html">SALIR</A>
            <div class="productos menu">
                <div class="row">
                    <img src="./productos/menu.png" height="20px" alt="menu">
                </div>
                <div class="container">
                    <section class="administrador row">
                        <CENTER>
                            <h1>ADMINISTRADOR DE GLOBOS Y SORPRESAS</h1>
                        </CENTER>
                        <hr size="4px" color="white " />
                        
    
    <body style="background-color: white">
        </div>
        </div>
        </div>
            </head>
    
        <BODY>
    
            <body style="background-color:white;">
            </body>
            <div id="amarillo" style="background-color:lightblue; font-style:arial">
                <h2>
                    <CENTER>
                        <div id="amarillo" style="background-color: lightcoral"></div>
                    </CENTER>
                    <hr size="1px" color="lightgrey" />
                    <CENTER><img src="./productos/globo-y-bomba-imagen-animada-0009.gif"></CENTER>
            </div>




            <CENTER><form method="post" action="consultar1.php">
		<label for="IDproducto">ID PRODUCTO:</label>
		<input type="text" id="INSERTA ID PRODUCTO" name="IDproducto"><br><br>

		<input type="submit" value="Consultar">
	</form></CENTER>



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
      <td><b><center>PULSA PARA ACTUALIZAR</center></b></td>
      <td><b><center>PULSA PARA INSERTAR</center></b></td>


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

           <td> <BR><form method='post' action='eliminartienda.php' onsubmit='return confirmarEliminacion()'> \n
           <input type='hidden' name='IDproducto' value='".$consulta['IDproducto']."'>
           <input type='submit' value='Eliminar Producto'>
           </form></td>

           <td> <BR><form method='post' action='modificarej.php'onsubmit='return confirmarActualizar()'> \n
           <input type='hidden' name='IDproducto' value='".$consulta['IDproducto']."'><BR>
           <input type='submit' name='Actualizar' value='Actualizar Producto'>
           </form></td>

           <td> <BR><form method='post' action='insertartienda.php' onsubmit='return confirmarInsertar()'> \n
           <input type='hidden' name='IDproducto' value='".$consulta['IDproducto']."'>
           <input type='submit' value='Insertar Producto'>
           </form></td>

           

        </tr>
        ";
    }
    echo "</table>";
    
?>










