<?php

  session_start();
  # Déconnexion ou intrusion
  if (isset($_GET['logout']) == 'true' || !isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
    header('location:formulaire.php');
  }
  # Auth valide -> affectation de l'admin
  if (isset($_SESSION['admin'])) {
    $admin = $_SESSION['admin'];
  }

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Espace membre</title>
  </head>
  <body>

    <h3>Espace membre de : <?= $admin ?></h3>
    <a href="?logout=true">se déconnecter</a>

  </body>
</html>
