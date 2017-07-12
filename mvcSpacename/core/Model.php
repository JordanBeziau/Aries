<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 12/07/2017
 * Time: 11:32
 */

namespace core;

class Model {

  public $pdo;

  function __construct() {
    $this->pdo = DB::init();
  }

}