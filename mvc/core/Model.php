<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 12/07/2017
 * Time: 11:32
 */
class Model {

  public $db;

  function __construct() {
    $this->db = DB::init();
  }

}