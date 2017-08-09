<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 09/08/2017
 * Time: 16:04
 */

$file = "montagne.jpg";
$src = "images-source/$file";
$dest = "images-destination/resize/$file";

list($width, $height) = getimagesize($src);
if ($width > $height) {
  # Paysage
  $minWidth = $width / 2;
  $minHeight = $minWidth * ($height / $width);
} elseif ($height > $width) {
  # Portrait
  $minHeight = $height / 2;
  $minWidth = $minHeight * ($width / $height);
} else {
  # Carré
  $minHeight = $minWidth = $width / 2;
}

$resizedImage = imagecreatetruecolor($minWidth, $minHeight);
$image = imagecreatefromjpeg($src);

# Reéchantillonne les pixels suite au redimensionnement
imagecopyresampled($resizedImage, $image, 0, 0, 0, 0, $minWidth, $minHeight, $width, $height);

imagejpeg($resizedImage, $dest, 100);