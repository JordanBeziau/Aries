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

  # Override parent method
  public function sePresente() {
    return parent::sePresente().". ".self::TYPE.", filière ". $this -> getFiliere();
  }

} # end class