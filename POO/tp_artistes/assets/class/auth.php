<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 14:10
 */
class Auth {

  private static $host = "127.0.0.1";
  private static $db = "db_musiciens";
  private static $username = "root";
  private static $password = "root";

  /**
   * @return string
   */
  public static function getHost(): string {
    return self::$host;
  }

  /**
   * @return string
   */
  public static function getDb(): string {
    return self::$db;
  }

  /**
   * @return mixed
   */
  public static function getUsername() {
    return self::$username;
  }

  /**
   * @return mixed
   */
  public static function getPassword() {
    return self::$password;
  }

}