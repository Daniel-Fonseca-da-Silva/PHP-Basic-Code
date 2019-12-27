<?php

header("Content-Type: image/png");

// Cria imagem
$img = imagecreate(256, 256);

// Cria paleta de cores
$black = imagecolorallocate($img, 0, 0, 0);

$red = imagecolorallocate($img, 255, 0, 0);

// Escrever na tela
//imagestring(arquivo, tamanho da fonte, eixo x, eixoy, cor)
imagestring($img, 5, 60, 120, "Curso PHP7", $red);

// Cria o arquivo no formato png
imagepng($img);

// Destroi arquivo
imagedestroy($img);

?>