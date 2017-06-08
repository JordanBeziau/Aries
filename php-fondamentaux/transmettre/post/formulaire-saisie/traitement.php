<?php

  if (!empty($_POST)) {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
  }

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Traitement post</title>
  </head>
  <body>

    <?php if (isset($prenom)) : ?>
      <p><?= "$prenom $nom" ?></p>
    <?php endif; ?>
  </body>
</html>
