<?php
  $colors = ['red', 'green', 'orange', 'purple', 'yellow'];
  $code = ['HTML5', 'CSS3', 'PHP', 'JAVASCRIPT'];

  # Déclarer la fonction

  function randomText ($_colors, $_code) {
    $c = $_colors;
    $t = $_code;
    $color = $c[rand(0, count($c) - 1)];
    $text = $t[rand(0, count($t) - 1)];
    return "<div style='background:$color'>$text</div>";
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      div {
        padding: 40px;
        display: inline-block;
      }
    </style>
  </head>
  <body>
    <?= randomText($colors, $code); ?>
  </body>
</html>
