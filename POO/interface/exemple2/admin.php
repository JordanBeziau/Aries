<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 15:38
 */
class Admin implements IAuthentification {

  public function authenticate($_user) {
    // TODO: Implement authenticate() method.
    echo "authenticate $_user : ADMIN";
  }

}