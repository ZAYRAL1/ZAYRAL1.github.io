<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CATALOGOS</title>
  <meta description="Mi Primera Pagina">
  <meta keywords="pasteles, pan, fondan, pasteleria, fiestas, eventos">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/14884d4ea0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
  <header class="d-flex justify-content-between">
    <div class="d-flex">
      <div id="logotipo"><img src="img/logo.png" alt="Logotipo de la compañia"></div>
      <div class="topnav" id="myTopnav">
        <a href="index.php" >Home</a>
        <a href="#" class="active">Catalogos</a>
        <a href="#contact">Contacto</a>
        <a href="#about">Sucursales</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>
    <div id="botonera">
      <form class="">
        <input type="text" id="" name="" class="">
        <i class="fa-solid fa-magnifying-glass botones"></i>
      </form>
      <i class="fas fa-user-alt botones"></i>
      <i class="fa-solid fa-cart-shopping botones"></i>
    </div>
  </header>

  <main>
    <h3 class="m-2 p-3">Catálogos</h3>
    <section class="d-flex justify-content-between p-4" id="cardsContent">
    
    <?php

    for($i=0; $i<10; $i++){

    echo'<div class="card cardPropio">00
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards
            content.</p>
          <a href="#" class="btn btn-success">Go somewhere</a>
          <a href="#" class="btn btn-link">+Más información</a>
        </div>
      </div>';

      }
      ?>
    </section>
  </main>

  <footer>
    <nav id="footerNav" class="nav"></nav>
  </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>

</html>