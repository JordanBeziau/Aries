<?php

  if (!empty($_GET)) {
    switch ($_GET['result']) {
      case '1':
        $result = 1;
        break;

      case '2':
        $result = 2;
        break;

      default:
        $result = 0;
        break;
    }
  } else {
    $result = 0;
  }

  $colors = ['#80ff80', '#80bfff', '#ffff80'];
  $check = 0;
  $count = 0;

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Jeu des 3 couleurs</title>
    <style media="screen">
      div.square { width: 100px; height: 100px; float: left; margin-right: 20px;}
      div.container { overflow: auto;margin-bottom: 20px;}
      a { float: left; padding: 15px 25px; margin: 15px; background: #44d2ac; text-decoration: none; color: #fefefe; font-family: sans-serif; font-size: 1.2rem;}
      a.rejouer {background: #ffa64d}
      a:hover { box-shadow: 4px 4px 12px #ebeaea; }
    </style>
  </head>
  <body>
    <div class="container">
    <?php
      if ($result == 1 || $result == 2) :
        for ($i=0; $i < count($colors); $i++) :
          $rand = rand(0, count($colors) - 1); ?>
          <div class="square" style="background:<?= $colors[$rand]; ?>"></div>
          <?php ($i == 0) ? $check = $rand : ''; ?>
          <?php ($i > 0 && $check == $rand) ? $count++ : ''; ?>
      <?php endfor; ?>
    <?php endif; ?>
    </div>

    <div class="container">
      <a href="index.php<?php if ($count != 2){echo '?result=1';}else{echo '?result=2';} ?>">Jouer</a>
      <?php echo ($count == 2) ? "<a href='index.php?result=1' class=\"rejouer\">Rejouer</a>" : "" ; ?>
    </div>
  </body>
</html>
