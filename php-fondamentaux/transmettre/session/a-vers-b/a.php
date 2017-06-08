<?php

  session_start();
  $numero = "AER56Y";
  $_SESSION['numero'] = $numero;

  header("location:b.php");

 ?>
