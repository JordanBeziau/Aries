<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 10:21
 */

class Etudiant {

  # attributs
  private $nom;
  private $prenom;
  private $filiere;

  # constructeur
  function __construct($_prenom, $_nom, $_filiere) {
    $this -> prenom = $_prenom;
    $this -> nom = $_nom;
    $this -> filiere = $_filiere
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

  public function setFiliere($_filiere) {
    $this->filiere = $_filiere;
  }

  public function getPrenom() {
    return $this->prenom;
  }

  public function getNom() {
    return $this->nom;
  }

  public function getFiliere() {
    return $this->filiere;
  }

} # end class