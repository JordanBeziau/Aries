<!--
  Bases de données XML avec
    des villes
          nom
          photo
          pays
  dans la page :
    à gauche menu d'ancres vertical
    à droite la photo

  A la 1ère lecture de la page
    on a une ville affichée
    le nom dans le menu en rouge
-->

<?php

  $xml = simplexml_load_file('xml/villes.xml');
  $array = $xml -> ville;

  (!empty($_GET)) ? $id = (int)$_GET['id'] : $id = 0;
  
  $image = $array[$id] -> photo;

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>

    <nav>
      <ul>
        <?php foreach ($array as $ville) : ?>
          <li><a href="index.php?id=<?= $ville -> id ?>" class="<?php if($id == $ville -> id){echo "active";} ?>"><?= $ville -> nom; ?></a></li>
        <?php endforeach; ?>
      </ul>
      <div class="arrow">
        <a href="index.php?id=<?php echo ($id == 0) ? count($array) - 1 : $id - 1 ?>"><</a>
        <a href="index.php?id=<?php echo ($id == count($array) - 1) ? 0 : $id + 1 ?>">></a>
      </div>
    </nav>

    <main>
      <img src="img/<?= $image ?>.jpg" alt="">
    </main>

  </body>
</html>
