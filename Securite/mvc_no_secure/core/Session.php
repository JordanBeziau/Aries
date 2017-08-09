<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 09/08/2017
 * Time: 10:03
 */

namespace core;


class Session {

  public static function start() {
    session_start();
  }

  public static function set($key, $value) {
    $_SESSION[$key] = $value;
  }

  public static function get($p1, $p2 = null) {
    return is_null($p2) ?
      $_SESSION[$p1] :
      $_SESSION[$p1][$p2];
  }

  public static function exist($key) {
    return isset($_SESSION[$key]) ? true : false;
  }

  public static function destroy($key) {
    if (self::exist($key)) {
      unset($_SESSION[$key]);
      return true;
    } else {
      return false;
    }
  }

  public static function getflash($key) {
    if (isset($_SESSION[$key])) {
      $message = $_SESSION[$key];
      unset($_SESSION[$key]);
      return $message;
    } else {
      return false;
    }
  }

}