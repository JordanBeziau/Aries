<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 11/07/2017
 * Time: 15:02
 */

namespace core;

class Router {

  public static function run() {
    if (empty($_GET["url"])) {
      require BASE_APP."controllers/accueil.php";
      $controller = new \controller\Accueil();
      $controller->index();
      exit;
    }

    $url = rtrim($_GET["url"], "/");
    $url = explode("/", $url);

    $controllerName = array_shift($url);
    $controllerName = ucfirst($controllerName);
    $file = BASE_APP."controllers/".$controllerName.".php";
    if (file_exists($file)) {
      require "$file";
      $controllerName = "\\controller\\".$controllerName;
      $controller = new $controllerName();

    } else {
      require BASE_APP."controllers/erreur.php";
      $controller = new controller\Erreur();
      $controller->index();
      exit;
    }

    if (!empty($url)) {
      $methodName = array_shift($url);
      $method = method_exists($controller, $methodName) ? $methodName : "index";

    } else {
      $method = "index";
    }

    $params = !empty($url) ? array_values($url) : [];
    call_user_func_array([$controller, $method], $params);
  }

}