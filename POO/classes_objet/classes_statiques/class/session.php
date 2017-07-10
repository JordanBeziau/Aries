<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 11:42
 */
class Session {

  public static function start() {
    session_start();
  }

  public static function set($_key, $_value) {
    $_SESSION[$_key] = $_value;
  }

  public static function get($_p1, $_p2 = null) {
    return is_null($_p2) ?
      $_SESSION[$_p1] :
      $_SESSION[$_p1][$_p2];
  }

  public static function exist($_key) {
    return isset($_SESSION[$_key]) ? true : false;
  }

  public static function destroy($_key) {
    if (self::exist($_key)) {
      unset($_SESSION[$_key]);
      return true;
    } else {
      return false;
    }
  }

}