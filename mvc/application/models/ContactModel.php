<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 12/07/2017
 * Time: 11:43
 */
class ContactModel extends Model {

  public function all() {
     $query = $this->pdo->query("SELECT * FROM contact");
     return $query->fetchAll(PDO::FETCH_OBJ);
  }

}