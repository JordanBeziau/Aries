<?php

  require "mysql/auth.php";
  try {
    $dbh = new PDO(DSN, USER, PWD);
    $dbh -> exec("SET CHARACTER SET UTF8");
  } catch (PDOException $e) {
    exit("<h1>Erreur connexion serveur</h1>");
  }

  # Requête brut
  $query = $dbh -> query("SELECT * FROM livre");
  # Transformer la requête
  $array = $query -> fetchAll(PDO::FETCH_OBJ);
  # $livre = $query -> fetchAll(PDO::FETCH_ASSOC);

  # echo "<pre>";
  # print_r($array);
  # exit

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Livres - XML</title>
  </head>
  <body>
    <?php foreach ($array as $livre): ?>
      <ul>
        <li>
          <h3><?= $livre -> titre ?></h3>
        </li>
        <li><img src="img/<?= $livre -> ean ?>.png"></li>
        <li>Auteur : <?= $livre -> auteur ?></li>
        <li>Prix : <?= $livre -> prix ?></li>
        <li>Détails : <?= $livre -> detail ?></li>
      </ul>
    <?php endforeach; ?>
  </body>
</html>
