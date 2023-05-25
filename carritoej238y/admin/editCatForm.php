<?php
    include "../conexion.php";
    include "encabezado.php";

    $idCat=$_GET['id'];

    try {
        $stmt=$conn->prepare("SELECT * FROM categorias WHERE id=$idCat");
        $stmt->execute();
        while($row=$stmt->fetch(PDO::FETCH_OBJ)){
            echo '
            <!-- Form Modificar Categoría -->
            <div id="editCat">
                <span onclick="document.getElementById(&quot;editCat&quot;).style.display=&quot;none&quot;" class="close" title="Close Modal">&times;</span>
                <form class="modal-content" action="editCat.php" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="idEdit" id="idEdit">
                    <div class="container">
                        <h1>Modificar categoría'.$row->categoria.'</h1>
                        <hr>
                        <input type="hidden" name="idEdit" value="'.$idCat.'">
                        <div class="mb-3">
                            <label class="form-label" for="catEdit"><b>Categoría</b></label>
                            <input class="form-control" type="text" placeholder="Escribe el nombre de la categoría" name="catEdit" id="catEdit" required value="'.$row->categoria.'">
                        </div>
                            <div class="mb-3">
                                <label class="form-label" for="catPadre"><b>Categoría superior</b></label>
                                <select class="form-control" name="catPadreEdit" required>
                                    <option value="0">Ninguna</option>';
                                    $stmt=$conn->prepare("SELECT * FROM categorias");
                                    $stmt->execute();
                                    while($row2 = $stmt->fetch(PDO::FETCH_OBJ)){
                                        echo '<option value="'.$row2->id.'"';
                                        if ($row2->id==$row->catPadre) {
                                            echo 'selected';
                                        }
                                        echo '>'.$row2->categoria.'</option>';
                                    }
                                    echo '
                                </select>
                            </div>
                        <div class="mb-3">
                            <label  class="form-label" for="img"><b>Imagen</b></label>
                            <img src="../'.$row->imagen.'" id="imgCatEdit" style="width:100px">
                            <input type="hidden" name="imgNoChange" value="'.$row->imagen.'">
                            <input class="form-control" type="file" name="img" id="imgCatEditSRC">
                        </div>
                        <div class="mb-3">
                            <label  class="form-label" for="desc"><b>Descripcion</b></label><br>
                            <textarea class="form-control" name="descEdit" id="descEdit" rows="5">'.$row->descripcion.'</textarea>
                        </div>
                        <div class="clearfix">
                            <button type="button" onclick="document.getElementById(&quot;editCat&quot;).style.display=&quot;none&quot;" class="cancelbtn">Cancelar</button>
                            <button type="submit" class="signup">Modificar categoría</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Fin Modificar Categoría -->';
        }
    } catch(PDOException $e) {
        echo "Error: ".$e->getMessage();
    }
include "footer.php";
?>