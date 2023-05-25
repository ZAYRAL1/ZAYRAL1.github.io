<?php
    $archivo = $_FILES['img']['name'];
    $url="../img/catalogo/categorias/";
    if(isset($archivo) && $archivo!="") {
       $tipo = $_FILES['img']['type'];
       $tamano = $_FILES['img']['size'];
       $temp = $_FILES['img']['tmp_name'];
 
       if (!(strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png") || strpos($tipo, "webp")) && ($tamano < 5000000)) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta<br/>
        - Se permiten archivos .gif, .jpeg, .jpg, .png, .webp y de 500 kb como máximo<b></div>';
        } else {
            if (move_uploaded_file($temp, $url.$archivo)) {
                chmod($url.$archivo, 0777);
                echo '<div><b>Se ha subido correctamente la imagen<b></div>';
            } else {
                echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse<b></div>';
            }
        }
    }
?>