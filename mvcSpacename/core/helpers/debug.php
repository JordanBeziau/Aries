<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 11/07/2017
 * Time: 14:50
 */

function vd($_data, $_continue = false) {
  echo "<pre>";
  var_dump($_data);
  if (!$_continue) exit;
}