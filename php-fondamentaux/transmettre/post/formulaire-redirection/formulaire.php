<?php

  # Traitement post avec simulation de récupération d'une donnée
  if (!empty($_POST)) {
    if (empty($_POST['prenom']) || $_POST['prenom'] !== 'toto') {
      $error = "Donnée incorrect";
      $nom = $_POST['prenom'];
    }else{
      header('location:mon-espace.php');
    }
  }

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulaire saisie</title>
  </head>
  <body>

    <form class="" action="" method="post">
      <input type="text" name="prenom" placeholder="Prénom" value="<?= (isset($nom)) ? $nom : ''; ?>">
      <input type="submit" value="envoyer">
    </form>

    <!-- cas d'échec -->
    <?php if (isset($error)) : ?>
      <h3><?= $error ?></h3>
    <?php endif; ?>

  </body>
</html>
