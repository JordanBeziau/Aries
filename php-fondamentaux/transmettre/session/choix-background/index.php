<?php
  /*
    Un formulaire de saisie permet de choisir dans une banque d'images fond d'écran.
    La validation permet de le garder.
  */

  session_start();

  $xml = simplexml_load_file('xml/images.xml');
  $images = $xml -> image;

  $background = (isset($_SESSION['background'])) ? $_SESSION['background'] : $background = 0;

  if (isset($_POST['background'])) {
    $_SESSION['background'] = (int) $_POST['background'];
    $background = $_SESSION['background'];
  }
  # Test
  # print_r($images);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Background</title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>

    <img src="img/<?php echo (isset($background)) ? $images[$background] -> source : $images[0] -> source ?>.jpg" alt="">

    <div class="container">
      <select class="" name="background" form="background">
        <?php foreach ($images as $image) : ?>
          <option value="<?= $image -> id ?>" <?= ($image -> id == $background) ? 'selected' : ''; ?>><?= $image -> nom ?></option>
        <?php endforeach; ?>
      </select>

        <form action="" method="post" id="background">
          <input type="submit" value="OK">
        </form>
    </div>

  </body>
</html>
