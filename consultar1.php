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



<?php
// Conectar a la base de datos
//$conexion = mysqli_connect("localhost", "usuario", "contraseña", "basededatos");
include ("conexiontienda.php");
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Obtener los datos del formulario
	$IDproducto = $_POST["IDproducto"];

	// Realizar la consulta
	$query = "SELECT * FROM productos WHERE IDproducto='$IDproducto'";
	$result = mysqli_query($conexion, $query);

	// Mostrar los resultados
	if (mysqli_num_rows($result) > 0) {
		while ($fila = mysqli_fetch_assoc($result)) {
			echo "ID producto: " . $fila["IDproducto"] . "<br>";
            echo "Nombre: " . $fila["Nombre"] . "<br>";
            echo "IDproveedor: " . $fila["IDproveedor"] . "<br>";
            echo "Precio may: " . $fila["Preciomay"] . "<br>";
            echo "Precio men: " . $fila["Preciomen"] . "<br>";

			echo "<br>";
		}
	} else {
		echo "No se encontraron resultados.";
	}	
}
?>
