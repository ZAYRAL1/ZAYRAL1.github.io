<?php
include "encabezado.php";
include "../conexion.php";

$stmt = $conn->prepare("SELECT * FROM categorias");
$stmt->execute();
?>

<div id="id01" class="modal">
  <span onclick="document.getElementById(&quot;id01&quot;).style.display=&quot;none&quot;" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="altaCat.php" method="POST" enctype="multipart/form-data">
    <div class="container">
      <h1>Crear una Nueva Categoria</h1>
      <hr>
      <label class="form-label" for="cat"><b>Categoria</b></label>
      <input class="form-control" type="text" placeholder="Escribe el Nombre de la Categoria" name="cat" required>

      <label  class="form-label" for="catPadre"><b>Categoria Superior</b></label>
      <br>
      <select class="form-control" name="catPadre" required>
        <option value="0">Ninguna</option>';

          <?php  
			      while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
			        echo '<option value="'. $row->id .'">'.$row->categoria.'</option>';
			      }
			    ?>
      </select>

      <br>
      <label  class="form-label" for="img"><b>Imagen</b></label>
      <input class="form-control" type="file" name="img">

      <label  class="form-label" for="desc"><b>Descripcion</b></label>
      <textarea class="form-control" name="desc" rows="5" cols="30"></textarea>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById(&quot;id01&quot;).style.display=&quot;none&quot;" class="cancelbtn">Cancelar</button>
        <button type="submit" class="signup">Crear Categoria</button>
      </div>
    </div>
  </form>
</div>

<!-- ELIMINAR CATEGORIA -->
<div id="delCat" class="modal">
		<span onclick="document.getElementById('delCat').style.display='none'" class="close" title="Close Modal">&times;</span>
		<form class="modal-content" action="eliminarCat.php" method="POST">
			<input type="hidden" name="idDel" id="idCatDel">
			<div class="container"> 
				<h1>Eliminar la categoría <b> <span id="delCatSel"></span></b></h1>
				<hr>
				<p>¿Estas seguro de que deseas eliminar la categoria?</p>
				<div class="clearfix d-flex">
					<button type="button" onclick="document.getElementById('delCat').style.display='none'" class="btn btn-danger" style="width: auto;">Cancelar</button>
					<button type="submit" class="btn btn-primary" style="width:auto;">Eliminar categoria</button>
				</div>
			</div>
		</form>
	</div>
	<div class="d-flex justify-content-between m-4">
		<h1> CATEGORIAS DE PRODUCTOS </h1>
		<button onclick="document.getElementById(&quot;id01&quot;).style.display=&quot;block&quot;">
			<i class="fa-solid fa-plus" style="font-size:40px"></i>
		</button>
	</div>
  <hr>
  <table class="table">
  <tr>
    <th> CATEGORIA </th>
    <th> CATEGORIA SUPERIOR </th>
    <th> IMAGEN </th>
    <th> DESCRIPCION </th>
    <th> MODIFICAR </th>
    <th> ELIMINAR </th>
  </tr>
<?php
$stmt =$conn->prepare("SELECT * FROM categorias");
$stmt->execute();  
while($row = $stmt->fetch(PDO::FETCH_OBJ)){
    echo "<tr>";
    echo "<td>" . $row->categoria . "</td>";
    $stmt2 =$conn->prepare("SELECT * FROM categorias WHERE id=$row->catPadre");
    $stmt2->execute(); 
    if($row2=$stmt2->fetch(PDO::FETCH_OBJ)){
      echo "<td>" . $row2->categoria . "</td>";
    }else{
      echo "<td> -- </td>";
    }
    echo "<td><img src='../" . $row->imagen . "' class='w-5' style='width:100px'></td>";
    echo "<td>" . $row->descripcion . "</td>";
    echo '<td><a class="btn btn-sm" style="width:auto" href="editCatForm.php?id='.$row->id.'">
                <i class="fa-solid fa-file-pen" style="font-size:40px"></i>
              </a></td>';
    echo '<td><button type="button" class="btn btn-sm" style="width:auto" onclick="document.getElementById(&quot;delCat&quot;).style.display=&quot;block&quot;;
    document.getElementById(&quot;delCatSel&quot;).innerHTML=&quot;'.$row->categoria.'&quot;;
    document.getElementById(&quot;idCatDel&quot;).value=&quot;'.$row->id.'&quot;;"><i class="fa-solid fa-trash-can" style="font-size:40px"></i></button></td>';
    echo "</tr>";
}
$conn=null;
?>
</table>

<?php
echo '<script src="js/scripts.js"></script>';
include "footer.php";
?>