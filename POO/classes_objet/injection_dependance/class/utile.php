<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 11:03
 */
class Utile {

  public function write($_file, $_data) {
    $fp = fopen($_file, "w+");
    fwrite($fp, $_data);
    fclose($fp);
  }

  public function read($_file, $_array = false) {
    return !$_array ?
            file_get_contents($_file) :
            file($_file);
  }

}