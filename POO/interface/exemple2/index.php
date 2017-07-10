<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 15:39
 */

require "IAuthentification.php";
require "AuthManager.php";
require "admin.php";
require "member.php";

$f = new Admin("Jack");
$f -> authenticate();