<?php

  if (!empty($_GET)) {
    $couleur = $_GET['couleur'];
  }

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Fichier A</title>
     <style media="screen">
       .rouge { color: red }
       .bleu { color: blue }
       a {background: blue; padding: 12px 20px; border-radius: 5px; text-decoration: none; color: white;}
     </style>
   </head>
   <body>
     <h1 class="<?php if(isset($couleur)) {echo $couleur;} ?>">PHP</h1>
     <a href="a.php?couleur=rouge">rouge</a>
     <a href="a.php?couleur=bleu">bleu</a>
   </body>
 </html>
