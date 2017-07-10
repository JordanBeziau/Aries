<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 10:21
 */

class Etudiant extends Personne {

  # Constante de classe
  const TYPE = "Cycle supérieur";

  # attributs
  private $filiere;
  private $utile;

  function __construct($_prenom, $_nom, Utile $_utile) {
    parent::__construct($_prenom, $_nom);
    $this -> utile = $_utile;
  }

  # getter / setter
  public function setFiliere($_filiere) {
    $this->filiere = $_filiere;
  }

  public function getFiliere() {
    return $this->filiere;
  }

  public function getType() {
    return self::TYPE;
  }

  /**
   * @return mixed
   */
  public function getUtile() {
    return $this -> utile -> read("$this->nom.txt");
  }

  /**
   * @param mixed $utile
   */
  public function setUtile() {
    $this -> utile -> write("$this->nom.txt", uniqid());
  }

  # Override parent method
  public function sePresente() {
    return parent::sePresente().". ".self::TYPE.", filière ". $this -> getFiliere();
  }

} # end class