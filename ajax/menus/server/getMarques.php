<?php
require 'db.php';

$pdo = connexion();

try {
  $sql = "SELECT DISTINCT marque FROM mobiles";
  $query = $pdo -> query($sql);
  $result = $query -> fetchAll(PDO::FETCH_OBJ);
  echo json_encode($result);
} catch(PDOException $e) {
  echo $e->getMessage();
}

 ?>
