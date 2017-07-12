<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 12/07/2017
 * Time: 09:38
 */
class Contact extends Controller {

  /**
   * méthode par défaut
   */
  public function index() {
    require BASE_APP."models/ContactModel.php";

    $contacts = new ContactModel();
    vd($contacts->all());

    $this->data = [
      "titre" => "Contact"
    ];
    $this->view("public", "contact_view", $this->data);
  }

}