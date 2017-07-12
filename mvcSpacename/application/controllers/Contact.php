<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 12/07/2017
 * Time: 09:38
 */
namespace controller;
use \core\Controller;

class Contact extends Controller {

  /**
   * méthode par défaut
   */
  public function index() {

    require BASE_APP."models/Contact.php";

    $contacts = new \model\Contact();

    $this->data = [
      "titre" => "Contact",
      "contacts" => $contacts->all()
    ];
    $this->view("public", "contact_view", $this->data);
  }

}