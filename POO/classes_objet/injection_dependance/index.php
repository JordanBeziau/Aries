<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 11:04
 */

require "class/personne.php";
require "class/etudiant.php";
require "class/utile.php";

$e1 = new Etudiant("Jack", "Reacher", new Utile());
$e1 -> setFiliere("Web");
$e1 -> setUtile();
echo $e1 -> sePresente(). ". Numéro " .$e1 -> getUtile();