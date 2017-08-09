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
  if (!$type) {
    $error = "Ce n'est pas une image";
    $check = false;
  }
  if ($_FILES["upload"]["size"] > 10000000) {
    $error = "Le fichier est trop volumineux";
    $check = false;
  }
  $mime = $type["mime"];
  if ($mime != "image/jpeg" && $mime != "image/png") {
    $error = "Importer un fichier .jpeg ou .png";
    $check = false;
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
