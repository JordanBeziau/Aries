<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 15:38
 */

class AuthManager {

  public function __construct(IAuthentification $_auth, $_user) {
    return $_auth -> authenticate($_user);
  }

}