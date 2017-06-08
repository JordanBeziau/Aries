<?php

  if (!empty($_GET)) {
    $rub = $_GET['rub'];
  } else {
    $rub = 'générale';
  }

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Fichier B</title>
  </head>
  <body>
    <h3>Fichier B</h3>
    <a href="a.php">Page A</a>
    <p>Rubrique : <?= $rub ?></p>
  </body>
</html>
