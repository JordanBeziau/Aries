<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 13:49
 */

require "auth.php";

class DB {

  protected static $pdo;

  public static function connexion() {
    try {
      self::$pdo = new PDO("mysql:host=".Auth::getHost().";port=8889;dbname=".Auth::getDb(), Auth::getUsername(), Auth::getPassword());
      self::$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
      print "Erreur : " . $e -> getMessage() . "<br>";
      die();
    }
  }

}