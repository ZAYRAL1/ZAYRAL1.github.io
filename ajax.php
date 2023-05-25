<?php 
if (isset($_POST))
{
$email = $_POST["email"];
$captcha = sha1($_POST["captcha"]);
$numero_captcha = $_COOKIE["captcha"];
if (!preg_match("/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/", $email))
{
echo "<p style='color: red'>El formato de email es incorrecto</p>";
}
else if ($captcha != $numero_captcha)
{
echo "<p style='color: red'>El Captcha no coincide</p>";
}
else
{
//LAS ACCIONES CORRECTAS
echo "<p style='color: blue'>Acción llevada a cabo correctamente</p>";
/*Eliminamos la cookie*/
setcookie("captcha", "", -1);
?>
<script>
/*Restauramos el formulario y el captcha*/
document.getElementById("formulario").reset();
document.location.reload();
</script>
<?php
}
}
?>