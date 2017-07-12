<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 11/07/2017
 * Time: 13:44
 */

# Constantes de chemin
define("ROOT", dirname(__FILE__)."/");
define("CORE", ROOT."core/");
define("BASE_APP", ROOT."application/");
define("BASE_URL", dirname($_SERVER["SCRIPT_NAME"])."/");
define("CSS", BASE_URL."assets/css/");
define("IMG", BASE_URL."assets/img/");

# REQUIRE
require "vendor/autoload.php";

# ROUTER
core\Router::run();