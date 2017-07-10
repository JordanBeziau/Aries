<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 10/07/2017
 * Time: 09:45
 */

header("content-type: text/html; charset=utf-8");
require "extend/personne.php";
require "extend/etudiant.php";

# Fabriquer un objet = Instancier
$e1 = new Etudiant("Jack", "Reacher");
$e1->setFiliere("destruction");
echo $e1 -> sePresente();