<?php

  session_start();
  (!empty($_SESSION['mot'])) ? $mot = $_SESSION['mot'] : '';

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Fichier A</title>
   </head>
   <body>

    <p><?= (isset($mot)) ? "Le mot est : $mot  - <a href=\"b.php?mot=$mot\">Transmettre ce mot</a>" : 'Pas de mot... - <a href="init.php">Générer un mot</a>' ; ?></p>


     <form action="b.php" method="post">
       <input type="text" name="mot2" placeholder="Entrer un nouveau mot...">
       <input type="submit" value="Ok !">
     </form>

   </body>
 </html>
