<HTML>

<HEAD>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <TITLE>
        GLOBOS Y SORPRESAS
    </TITLE>
    <script>
        function valor() {
            var nombre;
            nombre = prompt("Introduce tu Nombre:", " ");
            alert("hola" + " " + nombre + "" + "," + "Bienvenido a Globos y Sorpresas");
        }

        function informa() {
            var v1; var nombre; var cpu; var sistema;
            v1 = window.open("", "v", "width=300 height=150");
            v1.document.bgColor = "gray";
            nombre = navigator.appName;
            cpu = navigator.cpuClass;
            sistema = navigator.platform;
            v1.document.writeln("Navegador: " + nombre);
            v1.document.writeln("Sistema: " + sistema);
            v1.document.write("Micro: " + cpu);
        }
        document.querySelector('form').addEventListener('submit', function (event) {
            if (!document.getElementById('acepto_terminos').checked) {
                alert('Debe aceptar los términos y condiciones');
                event.preventDefault();
            }
        });

    </script>

    <style type="text/css">
        .fondoblancoletrasnegras {
            background-color: white;
            color: black;
            font-size: 30;
            font-family: Verdana
        }

        .letrasverdes {
            color: green;
            font-size: 50
        }

        .imagen {
            image-orientation: 0deg;
            border-right-color: blue;
            font-style: normal;
            font-family: 'Segoe UI', Tahoma, Verdana
        }
    </style>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos1.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:wght@500&family=Playfair+Display+SC:wght@700&display=swap"
        rel="stylesheet">
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
        <div class="logo">
            <img src="fondos.jpg" width="1500px" height="50">
        </div>

        <A HREF="iniciarsesion.php"> INICIAR SESION</A>
        <div class="h1">
            <CENTER>
                <h1> GLOBOS Y SORPRESAS</h1>
            </CENTER>
            <p class=fondoblancoletrasnegras>Durango, Dgo. Mexico</p>
            <img src="fondos.jpg" width="1500px" height="30">
        </div>

<body style="background-color:white">

    <body onload=valor();>

        </div>

        <BODY>
            <form action="#" method="post">
                <label for="acepto_terminos">Acepto los términos y condiciones</label>
                <input type="checkbox" id="acepto_terminos" name="acepto_terminos" required>
                <br>
                <input type="submit" value="Enviar">
            </form>

            <div class="container">
                <div class="header">
                    <div class="navbar">
                        <i class='bx bxs-hot'></i>
                        <i class='bx bxl-facebook-square'></i>
                        <i class='bx bxs-like bx-spin'></i>
                        <i class='bx bxs-like bx-flashing-hover'></i>
                        <box-icon name='bell' animation='tada-hover'></box-icon>
                        <!-- Boxicons web component -->
                        <box-icon name='bell' animation='tada'></box-icon>
                        <div id="amarillo" style="background-color:lightgreen; font-style:arial">
                            <h2>
                                <CENTER>
                                    <p>En este sitio web encontraras todo lo que ocupes para un cumpleaños,
                                        un dia especial, peluches, arreglos y muchas cosas mas!!!</p>
                                </CENTER>
                                <hr size="1px" color="lightgreen" />
                                <CENTER><b><img src="./productos/globo-y-bomba-imagen-animada-0009.gif"></b></CENTER>
                        </div>
                        </h2>
                    
                        <BR>
                        <img src="globo imagen g.jpg" width="1400" height="300">
                        <CENTER>
                            <div id="amarillo" style="background-color: lightskyblue">
                                <CENTER>
                                    <h2>PAGINAS WEB</h2>
                                </CENTER>
                            </div>
                            </P>
                            <marquee>Muchas gracias por tu preferencia!!!</marquee>
                            <div id="amarillo" style="background-color: white">
                                <A HREF="peluches.php"> Dale click aqui para dirigirte a la pagina de PELUCHES</A></td>
                                </P>
                                <BR>
                                <A HREF="globos.php">Dale click aqui para dirigirte a la pagina de GLOBOS</A></td>
                                </P>
                                <BR>
                                <A HREF="bolsasymas.php">Dale click aqui para dirigirte a la pagina de BOLSAS Y MAS</A>
                                </td>
                                </P>
                            </div>
                        </CENTER>
                        <P><BR></P>
                        <BR>
                        <!------------------Pie de página------------------->
                        <p><B>IDEA DE DECORACION RAPIDA</B></p>
                        <P><BR></P>
                        <a href="https://www.youtube.com/watch?v=hE8aP5qeCAc">Decoracion</a> </td>

                        <div class="Piedepagina">
                            <div clss="container">
                                <div class="row">
                                    <div id="amarillo" style="background-color: burlywood">
                                        <div class="Piedepagina-col-1">
                                            <h3>QUEJAS Y SUGERENCIAS</h3>
                                            <p>Dejanos un comentario</p>
                                            <FORM ACTION="mailto:20041610@itdurango.edu.mx" METHOD="POST"
                                                ENCTYPE="TEXT/PLAIN"> <BR><TEXTAREA NAME="Comentarios"
                                                    ROWS="4"></TEXTAREA>
                                            </FORM>
                                            <input type="button" name="Enviar" value="Enviar" onclick="Enviar()">
                                        </div>
                                    </div>
                                    <div class="Piedepágina-col-4">
                                        <h3>Puedes ver mas ideas de productos en:</h3>
                                        <ul>
                                            <li>FACEBOOK</li>
                                            <li>INSTAGRAM</li>
                                            <li>YOUTUBE</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            var MenuItems = document.getElementById("MenuItems");

                            MenuItems.style.maxHeight = "0px";

                            function menutoggle() {
                                if (MenuItems.style.maxHeight == "0px") {
                                    MenuItems.style.maxHeight = "200px";
                                }
                                else {
                                    MenuItems.style.maxHeight = "0px";
                                }

                            }
                        </script>

        </BODY>

        <body>
            <input type="button" value="Info." onClick=informa();>
        </body>

        </HEAD>

</HTML>