<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 09/08/2017
 * Time: 16:29
 */

if (isset($_FILES["upload"]["name"])) {
  $check = true;
  $file = $_FILES["upload"]["name"];
  $tmp = $_FILES["upload"]["tmp_name"];
  $type = getimagesize($tmp);

  # Bitmap ?
  if (!$type) {
    $error = "Ce n'est pas une image";
    $check = false;
  }
  # Size ?
  if ($_FILES["upload"]["size"] > 10000000) {
    $error = "Le fichier est trop volumineux";
    $check = false;
  }
  # mime ?
  $mime = $type["mime"];
  if ($mime != "image/jpeg" && $mime != "image/png") {
    $error = "Importer un fichier .jpeg ou .png";
    $check = false;
  }
  $dest_max = "images/max/$file";
  $dest_min = "images/min/$file";

  if ($check) {
    if (move_uploaded_file($tmp, $dest_max)) {
      $filemax = $dest_max;
      list($width, $height) = getimagesize($filemax);
      $minWidth = 150;
      $minHeight = $minWidth * ($height / $width);

      $thumbnail = imagecreatetruecolor($minWidth, $minHeight);
      $largeImage = imagecreatefromjpeg($filemax);
      imagecopyresampled($thumbnail, $largeImage, 0, 0, 0, 0, $minWidth, $minHeight, $width, $height);
      imagejpeg($thumbnail, $dest_min, 100);
    } else {
      $error = "Erreur de transfert : ".$_FILES["upload"]["error"];
    }
  }
}

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Upload</title>
</head>
<body>

  <h1>Upload ton image</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="upload" style="font-size: 16px">
    <input type="submit" value="Upload" style="font-size: 16px">
  </form>

  <?php
    if (isset($check)) :
      echo "<p>".$error."</p>";
    endif;
  ?>

</body>
</html>
