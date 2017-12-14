<?php
require 'db.php';

$pdo = connexion();

try {
  $marque = $_POST['marque'];
  $sql = "SELECT produit FROM mobiles WHERE marque = '$marque'";
  $query = $pdo->query($sql);
  $result = $query->fetchAll(PDO::FETCH_OBJ);
  echo json_encode($result);
} catch(PDOException $e) {
  echo $e->getMessage();
}
?>
