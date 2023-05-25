<?php
include "seguridad.php";
echo '<!DOCTYPE html>
<html lang="es-MX">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adminstrador de Contenidos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link href="../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/14884d4ea0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="../css/estilo.css">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
  <header class="d-flex justify-content-between">
    <div class="d-flex">
      <div id="logotipo"><img src="../img/logo.png" alt="Logotipo de la compañia"></div>
      <div class="topnav" id="myTopnav">
        <a href="#home" class="active">Home</a>
        <a href="slider.php">Slider</a>
        <a href="categorias.php">Categorías de Productos</a>
        <a href="productos.php">Productos</a>
        <a href="imgProds.php">Imagenes de Productos</a>
        <a href="users.php">Usuarios</a>
        <a href="ventas.php">Ventas</a>
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

      <div class="d-block">
        <i class="fas fa-user-alt botones"></i>
        <a href="salir.php">Salir</a>
      </div>
    </div>
  </header>';


?>