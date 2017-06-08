<?php
  $colors = ['red', 'green', 'orange', 'purple', 'yellow'];
  $code = ['HTML5', 'CSS3', 'PHP', 'JAVASCRIPT'];

  # Déclarer la fonction

  function randomText () {
    global $colors, $code;
    $color = $colors[rand(0, count($colors) - 1)];
    $text = $code[rand(0, count($code) - 1)];
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
    <?php echo randomText(); ?>
  </body>
</html>
