<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 11/07/2017
 * Time: 11:28
 */
class Utile {

  public function save($_data, $_file) {
    $fp = fopen($_file, "w+");
    fwrite($fp, $_data);
    fclose($_file);
  }

}