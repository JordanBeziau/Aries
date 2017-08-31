<?php

namespace WeeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WeeBundle\Entity\Editeur;

class LoaderEditeurData extends AbstractFixture implements OrderedFixtureInterface {

  public function load(ObjectManager $manager) {
    foreach($this->getData() as $data) {
      $editor = new Editeur();
      $editor->setName($data["nom"]);
      $this->addReference($data["reference"], $editor);
      $manager->persist($editor);
      $manager->flush();
    }
  }

  public function getOrder() {
    return 1;
  }

  public function getData() {
    return array(
      array(
        "nom" => "Editions Eyrolles",
        "reference" => "eyrolles"
      ),
      array(
        "nom" => "Le livre de poche",
        "reference" => "leLivreDePoche"
      )
    );
  }
}