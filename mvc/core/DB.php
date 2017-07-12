<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 12/07/2017
 * Time: 11:22
 */
class DB {

  public static $instance;

  public static function init() {
    if (!self::$instance) {
      self::$instance = new PDO(Auth::DNS, Auth::USER, Auth::PWD);
      self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      self::$instance->exec("SET CHARACTER SET utf8");
    }

    return self::$instance;
  }

}