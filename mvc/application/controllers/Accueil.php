<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 11/07/2017
 * Time: 14:44
 */
class Accueil extends Controller {

  /**
   * méthode par défaut
   */
  public function index() {
    $this->data = [
      "titre" => "Accueil"
    ];
    $this->view("public", "accueil_view", $this->data);
  }

}