<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 08/08/2017
 * Time: 16:56
 */

function setFlash($key, $value) {
  $_SESSION[$key] = $value;
}

/**
 * Si la session existe mémorise dans $message et détruit la session
 * @param $key
 * @return string
 * @return boolean
 */
function getFlash($key) {
  if (isset($_SESSION[$key])) {
    $message = $_SESSION[$key];
    unset($_SESSION[$key]);
    return $message;
  } else {
    return false;
  }
}