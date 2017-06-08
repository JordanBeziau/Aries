<?php

  session_start();

  if (!empty($_SESSION['neufLettres']) && empty($_GET['reset'])) {
    $neufLettres = $_SESSION['neufLettres'];

  } else {
    $lettres = range('a', 'z');
    $neufLettres = [];

    for ($i=0; $i < 9; $i++) {
      $rand = rand(0, count($lettres) - 1);
      array_push($neufLettres, $lettres[$rand]);
      array_splice($lettres, $rand, 1);
    }

    $_SESSION['neufLettres'] = $neufLettres;
  }

  !empty($_GET['id']) ? $id = (int) $_GET['id'] : $id = 0;

  # print_r($lettres);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Matrice de lettre</title>
    <link rel="stylesheet" href="master.css">
  </head>
  <body>

    <section>
      <nav>
        <?php
          for ($i=0; $i < 9; $i++) {
            echo "<a href=\"index.php?id=$i\" class=",
                  $id == $i ? 'a-hover' : '',
                  "><div>$neufLettres[$i]</div></a>";
          }
         ?>
         <a href="index.php?reset=true" class="reset">Changer de lettres</a>
      </nav>
      <main>
        <p><?= $neufLettres[$id]; ?></p>
      </main>
    </section>

  </body>
</html>
