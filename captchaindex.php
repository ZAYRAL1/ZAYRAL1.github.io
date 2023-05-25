<!DOCTYPE HTML>
<html>
 <head>
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
       <script>
     $(function(){
        $("#btn").on("click", function(){
            var formData = $("#formulario").serialize();
            var ruta = "ajax.php";
            $.ajax({
                url: ruta,
                type: "POST",
                data: formData,
                success: function(datos)
                {
                    $("#respuesta").html(datos);
                }
            });
        });
  
  $("#actualizar_captcha").on("click", function(){
           document.location.reload();
    });
     });
    </script>
 </head>
 <body>
<div id="respuesta"></div>
<form method="POST" id="formulario">
<table>
<tr>
<td>Email:</td><td><input type="email" id="email" name="email"></td>
</tr>
<tr>
<td>Captcha:</td><td><input type="text" id="captcha" name="captcha"></td>
</tr>
<tr><td></td><td><img src="captcha.php"><button id="actualizar_captcha" type="button">Actualizar</button></td></tr>
</table>
<button id="btn" type="button">Enviar</button>
</form>
 </body>
</html>