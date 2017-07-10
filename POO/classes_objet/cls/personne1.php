<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 09:46
 */

class Personne {

  # attributs
  public $nom;
  public $prenom;

  # constructeur
  function __construct($_prenom, $_nom) {
    $this -> prenom = $_prenom;
    $this -> nom = $_nom;
  }

  # méthodes publiques
  public function sePresente() {
    $presentation = "$this->prenom $this->nom";
    return $presentation;
  }

} # end class