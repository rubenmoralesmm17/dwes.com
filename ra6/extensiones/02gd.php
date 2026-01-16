<?php
// Creamos una imagen en blanco
$im = imagecreatetruecolor(100,200);

//Ponemos color de fondo
$red = imagecolorallocate($im, 255, 0, 0);

//imagefill es para rellenar la imagen. Los 0 son las coordenadas x e y
imagefill($im, 0, 0, $red);

// Enviar la imagen a la salida

header('Content-Type: image/png');
imagepng($im);
?>
