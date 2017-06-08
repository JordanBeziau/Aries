<?php

  if (!empty($_GET)) {
    # print_r($_GET);
    $page = $_GET['page'];
    $rub = $_GET['rub'];
  } else {
    $page = Accueil;
    $rub = livres;
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
    <p>Page : <?= $page ?>, Rubrique : <?= $rub ?></p>
  </body>
</html>
