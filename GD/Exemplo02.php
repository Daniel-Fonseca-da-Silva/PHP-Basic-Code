<?php

$image = imagecreatefromjpeg("certificado.jpg");

// Paleta de cores
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

// Texto
imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Daniel Fonseca", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: "). date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image, null, 50);

imagedestroy($image);

?>