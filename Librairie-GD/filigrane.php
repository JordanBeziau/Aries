<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 09/08/2017
 * Time: 15:35
 */

$logo = imagecreatefrompng("images-source/Montagnes-rouges.png");
$image = imagecreatefromjpeg("images-source/montagne.jpg");

$sx = imagesx($logo);
$sy = imagesy($logo);
$sx1 = imagesx($image);
$sy1 = imagesy($image);
imagecopy($image, $logo, ($sx1 - $sx) - 20, ($sy1 - $sy) - 20, 0, 0, $sx, $sy);

$font = "font/Fire-on-the-Mountain.ttf";
$color = imagecolorallocate($image, 250, 250, 250);
imagefttext($image, 198, 0, 50, 150, $color, $font, "La montagne");

imagepng($image, "images-destination/montagne.jpg");
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Montagne</title>
</head>
<body style="margin: 0;">

  <img style="max-width: 100%" src="images-destination/montagne.jpg" alt="Montagne">

</body>
</html>
