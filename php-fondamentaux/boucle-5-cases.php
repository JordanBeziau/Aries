<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Boucle 5 cases</title>
    <style media="screen">
      * { box-sizing: border-box; }
      div { width: 100px; height: 100px; margin: 20px; float: left; }
    </style>
  </head>
  <body>
    <!--
      on a un tableau avec 5 couleurs.
      une boucle while permet d'aligner 5 cases
      avec des couleurs triées au hasard dans le tableau
      A noter :
        Pas de case de couleur identique.
        Pas de fonction de mélange toute faite.
    -->

    <?php
      $colors = ["blue", "red", "yellow", "green", "purple"];
      while (count($colors) > 0) :
        # Tirage
        $rand = rand(0, count($colors) - 1);
    ?>
        <div style="background:<?= $colors[$rand]; ?>"></div>
    <?php
        array_splice($colors, $rand, 1);
      endwhile;
    ?>
  </body>
</html>
