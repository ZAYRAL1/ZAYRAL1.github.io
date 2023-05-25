<?php
    include "../conexion.php";
    $cat=$_POST["cat"];
    $catPadre=$_POST["catPadre"];
    // $img="img/catalogo/categorias/".$_POST["img"];
    $img=$_FILES['img']['name'] ? "img/catalogo/categorias/".$_FILES['img']['name'] : "img/catalogo/categorias/no-image.png";
    $desc=$_POST["desc"];

    $stmt=$conn->prepare("INSERT INTO `categorias`(`categoria`, `imagen`, `catPadre`, `descripcion`) VALUES(?,?,?,?)");
    $stmt->bindParam(1,$cat);
    $stmt->bindParam(2,$img);
    $stmt->bindParam(3,$catPadre);
    $stmt->bindParam(4,$desc);

    if($stmt->execute()){
        include("subirImg");
        header("Location:categorias.php");
    }

    $conn=null;

?>