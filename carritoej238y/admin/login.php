<?php
session_start();
include('../conexion.php');
$user=$_POST['user'];
$pss=$_POST['pss'];

    try {
        $stmt=$conn->prepare("SELECT * FROM users WHERE email=? AND pss=?");
        $stmt->bindParam(1, $user);
        $stmt->bindParam(2, $pss);
        $stmt->execute();
        while($result=$stmt->fetch(PDO::FETCH_OBJ)) {
            $_SESSION['sesionOn']='si';
            $_SESSION['user']=$user;
            $_SESSION['pss']=$pss;
            header("Location:dock.php");
            exit();
        }
        session_destroy();
        header("Location:index.php?error=Datos Incorrectos");
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn=null;
?>