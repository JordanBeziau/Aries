<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 09/08/2017
 * Time: 15:01
 */

$image = imagecreatefromjpeg("images-source/gilbert.jpeg");
imagejpeg($image, "images-destination/gilbert.jpeg");
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gilbert</title>
</head>
<body>

  <h1>Gilbert</h1>
  <img src="images-destination/gilbert.jpeg" alt="Gilbert est content">

</body>
</html>
