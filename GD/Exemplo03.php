<?php

$image = imagecreatefromjpeg("certificado.jpg");

// Paleta de cores
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

// Texto
imagettftext($image, 20, 0, 10, 20, $gray, "GD/fonts/Bevan/Bevan-Regular.ttf",
"Testing...");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: "). date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>