<?php
  function connexion() {
    return $dbh = new PDO('mysql:host=127.0.0.1;port=8889;dbname=db_mobiles;', 'root', 'root');
  }
?>
