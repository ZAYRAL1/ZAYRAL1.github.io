<?php 
header("Content-Type: image/png");
$im = imagecreate(45, 23) or die("Ha ocurrido un error, librería de funciones GD no disponible");
$color_fondo = imagecolorallocate($im, 0, 0, 0);
$color_texto = imagecolorallocate($im, 255, 255, 255);
function generate_captcha($chars, $length)
{
$captcha = null;
for ($x = 0; $x < $length; $x++)
{
$rand = rand(0, count($chars)-1);
$captcha .= $chars[$rand];
}
return $captcha;
}
$captcha = generate_captcha(array(1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'Z', 'O', 'g', 'R', 'f'), 4); /* 4 es la longitud del capcha */
setcookie('captcha', sha1($captcha), time()+60*3);
imagestring($im, 6, 6, 6,  $captcha, $color_texto);
imagepng($im);
