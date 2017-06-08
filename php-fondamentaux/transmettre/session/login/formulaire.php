<?php

  session_start();
  # anti instrusion de l'admin
  if (isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
  }
  # le terme qui donne l'accès à l'admin sera : secret
  $terme = 'secret'; # En temps normal extrait de la db

  if (!empty($_POST)) {
    if (empty($_POST['prenom']) || $_POST['prenom'] !== $terme) {
      # ERROR
      $error = "Donnée incorrect";
      $nom = $_POST['prenom'];
    }else{
      # OK
      $nom = $_POST['prenom'];
      $_SESSION['admin'] = $nom;
      header('location:espace-membre.php');
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
