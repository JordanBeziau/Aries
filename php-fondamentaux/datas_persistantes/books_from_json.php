<?php

  # Controle de chargement des données
  $json = file_get_contents('json/livres.json');
  $json = json_decode($json);
  $livre = $json -> {"livres"};

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Livres - XML</title>
  </head>
  <body>
    <ul>
      <li>
        <h3><?= $livre[0] -> titre ?></h3>
      </li>
      <li><img src="img/<?= $livre[0] -> ean ?>.png"></li>
      <li>Auteur : <?= $livre[0] -> prenom ?> <?= $livre[0] -> nom ?></li>
      <li>Prix : <?= $livre[0] -> prix ?></li>
      <li>Détails : <?= $livre[0] -> detail ?></li>
    </ul>
  </body>
</html>
