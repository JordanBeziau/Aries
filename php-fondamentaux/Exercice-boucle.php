<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>neuf cases</title>
    <style media="screen">
      main { width: 400px;height: 400px;margin:50px auto; }
      div { width:33.1%; height: 33.1%; float: left;}
      div.carre-rouge { background: red; }
      div.cercle-vert { background: green;border-radius: 100%; }
    </style>
  </head>
  <body>

    <main>
      <?php
      for($i = 1; $i <= 9; $i++) :
        if ($i % 2 == 0 || $i == 5) :
        $class = "carre-rouge";
        else : $class = "cercle-vert";
        endif; ?>
      <div class="<?= $class ?>"></div>
      <?php
      endfor;
      ?>
    </main>
  </body>
</html>
