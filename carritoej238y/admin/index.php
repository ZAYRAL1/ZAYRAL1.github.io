<?php
$error=isset($_GET['error']) ? $_GET['error'] : "";
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
    </div>
  </header>
  <main class="w-50 text-center">
    <div id="error" style="font-size:50px; color:red; font-weight:bold;">'.$error.'</div>
      <h1>Inicio de Sesion del Administrador de Contenidos</h1>
      <hr>
      <form action="login.php" method="post" class="form-control">
            <label>Usuario: </label><input type="text" name="user"><br>
            <label>Contraseña: </label><input type="password" name="pss"><br>
            <input type="submit" value="Inciar sesión">
            <input type="reset" value="Borrar datos">
      </form>

      <a href="dock.php" target="_self">Entrar</a>
</main>';
    
include "footer.php";

?>


