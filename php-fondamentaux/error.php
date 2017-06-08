<?php
  $nb = 2;
  $prenom = "Louis";

  try {
    if (!is_numeric($nb)) {
      throw new Exception("Error Not A Number", 1);
    }
    if (!is_string($prenom)) {
      throw new Exception("Error not a text", 1);
    }
    # Tout est OK, je continue
    echo "$prenom, n°$nb";

  } catch (Exception $e) {
    exit($e -> getMessage());
  }
?>
