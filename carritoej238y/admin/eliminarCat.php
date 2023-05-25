<?php
 include "../conexion.php";
 $id=$_POST["idDel"];
 $stmt=$conn->prepare("DELETE FROM categorias WHERE id=$id");
 if($stmt->execute()) {
    header("Location:categorias.php");
 }
 $conn=null;
?>