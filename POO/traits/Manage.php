<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 16:00
 */

class Manage {

  use Utile, Convert;

  public function change() {
    $this->data = 0;
    return $this->titre($this->data);
  }

}