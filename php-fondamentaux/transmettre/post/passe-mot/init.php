<?php

  session_start();

  $array = ['bonjour', 'hello', 'yo', 'hey', 'salut', 'hola', 'bonjurno'];
  $rand = rand(0, count($array) - 1);

  $_SESSION['mot'] = $array[$rand];
  header('location:a.php');

 ?>
