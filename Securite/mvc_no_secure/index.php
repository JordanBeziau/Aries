<?php

use core\Session;
use core\Router;

// -------------- Constantes de chemin

define("ROOT", dirname(__FILE__)."/");
define("CORE", ROOT."core/");
define("BASE_APP", ROOT."application/");
define("BASE_URL",dirname($_SERVER['SCRIPT_NAME']));
define("CSS", BASE_URL."/assets/css/");
define("JS", BASE_URL."/assets/js/");
define("IMG", BASE_URL."/assets/img/");


// require 
require "vendor/autoload.php";
Session::start();
// exécute router
core\Router::run();




