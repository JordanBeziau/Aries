<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 11/07/2017
 * Time: 16:44
 */

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MVC - <?php echo $titre ?></title>
  <link rel="stylesheet" href="<?= CSS ?>style.css">
</head>
<body>

  <nav class="navbar">
    <h3>MVC</h3>
    <ul>
      <li><a href="<?= BASE_URL ?>accueil">Accueil</a></li>
      <li><a href="<?= BASE_URL ?>contact">Contact</a></li>
      <li><a href="">Compte</a></li>
    </ul>
  </nav>

  <div class="container">
    <?php require $page; ?>
  </div>

</body>
</html>
