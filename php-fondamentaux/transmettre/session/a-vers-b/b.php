<?php

  session_start();
  if (isset($_SESSION['numero'])) {
    $numero = $_SESSION['numero'];
  }

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Transfert SESSION</title>
   </head>
   <body>

     <?php if (isset($numero)) : ?>
       <p><?= $numero ?></p>
     <?php endif; ?>
   </body>
 </html>
