<?php

  # Controle de chargement des données
  $xml = simplexml_load_file('xml/livres2.xml');
  $livre = $xml -> livre[0];

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
        <h3><?= $livre -> titre ?></h3>
      </li>
      <li><img src="img/<?= $livre -> attributes() -> ean ?>.png"></li>
      <li>Auteur : <?= $livre -> auteur -> attributes() -> prenom ?> <?= $livre -> auteur -> attributes() -> nom ?></li>
      <li>Prix : <?= $livre -> prix ?></li>
      <li>Détails : <?= $livre -> detail ?></li>
    </ul>
  </body>
</html>
