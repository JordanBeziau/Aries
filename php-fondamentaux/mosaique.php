<?php
  function randomDivColor() {
    $nbr = rand(75, 225);
    return "<div style='background:rgb($nbr,0,0)'></div>";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mosaique</title>
    <style media="screen">
    html, body, main { width: 100%; height: 100%; margin: 0; overflow: hidden;}
      div { width: 1%; height: 2%; float: left; }
    </style>
  </head>
  <body>
    <main>
      <?php
      for ($i=1; $i <= 10000; $i++) {
        echo randomDivColor();
      }
      ?>
    </main>
  </body>
</html>
