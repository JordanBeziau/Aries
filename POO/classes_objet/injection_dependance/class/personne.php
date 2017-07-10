<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 09:46
 */

class Personne {

  # attributs
  private $nom;
  private $prenom;

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

  # getter / setter
  public function setPrenom($_prenom) {
    $this->prenom = $_prenom;
  }

  public function setNom($_nom) {
    $this->nom = $_nom;
  }

  public function getPrenom() {
    return $this->prenom;
  }

  public function getNom() {
    return $this->nom;
  }

} # end class