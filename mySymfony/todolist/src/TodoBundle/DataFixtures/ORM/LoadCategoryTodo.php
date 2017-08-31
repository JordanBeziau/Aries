<?php

namespace TodoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TodoBundle\Entity\Todo;

class LoadCategoryTodo extends AbstractFixture implements OrderedFixtureInterface {

  public function load(ObjectManager $manager) {
    $todo =
      (new Todo())
        ->setTitle("Voiture")
        ->setContent("Changer le feu droit")
        ->setCreatedAt(new \DateTime("Europe/Paris"))
        ->setCategory($this->getReference("category.Personnel"));
    $manager->persist($todo);
    $manager->flush();
  }

  public function getOrder() {
    return 2;
  }
}