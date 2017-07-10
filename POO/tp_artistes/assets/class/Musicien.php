<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 13:50
 */

require "db.php";

class Musicien extends DB {

  public static function all() {
    try {
      $query = self::$pdo -> query("SELECT * FROM musiciens");
      return $query -> fetchAll(PDO::FETCH_OBJ);
    }
    catch(PDOException $e) {
      die("Erreur :".$e ->getMessage());
    }
  }

}