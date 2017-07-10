<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 13:47
 */

require "assets/class/Musicien.php";

DB::connexion();
$all = Musicien::all();

?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Artistes accordion</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="assets/js/app.js"></script>
</head>
<body>

  <dl class="menu">
    <?php foreach ($all as $key => $musicien) : ?>
      <dt><h3><?= $musicien -> prenom; ?> <?= $musicien -> nom; ?></h3></dt>
      <?php $cls = $key === 0 ? "open" : ""; ?>
      <dd class="<?= $cls ?>">
        <figure><img src="assets/images/<?= $musicien -> nom; ?>.jpg"></figure>
        <figcaption><?= $musicien -> detail ?></figcaption>
      </dd>
    <?php endforeach; ?>
  </dl>

</body>
</html>
