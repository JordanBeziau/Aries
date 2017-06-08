<?php

  $json = file_get_contents('assets/image.json');
  $json = json_decode($json);
  $images = $json -> {"images"};

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Accordion photo</title>
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <dl>
      <?php foreach ($images as $id => $image) {
        echo "<dt class='",
        $id != 0 ? 'clickable' : '',
        "'><h3>",
        $image -> titre,
        "</h3></dt>",
        "<dd class='",
        $id == 0 ? 'open' : '',
        "'>",
        "<figure><img src='assets/img/",
        $image -> source,
        "'></figure>",
        "<figcaption>",
        $image -> legende,
        "</figcaption></dd>";
      } ?>
    </dl>

    <script src="assets/js/app.js"></script>
  </body>
</html>
