<?php

  session_start();

  if (!empty($_POST['mot2'])) {
    $_SESSION['mot'] = $_POST['mot2'];
    $mot = $_SESSION['mot'];
  } elseif (!empty($_GET['mot'])) {
    $_SESSION['mot'] = $_GET['mot'];
    $mot = $_SESSION['mot'];
  } else {
    $mot = null;
  }

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Fichier B</title>
   </head>
   <body>
     <?= (isset($mot)) ? "Le mot est $mot" : 'Pas de mot... - <a href="init.php">Générer un mot</a>'; ?>
   </body>
 </html>
