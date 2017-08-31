<?php

namespace TodoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use TodoBundle\Entity\Category;

class LoadCategoryData extends AbstractFixture implements OrderedFixtureInterface {

  public function load(ObjectManager $manager) {
    $categories = array("Etudes", "Personnel", "Travail");
    foreach ($categories as $categoryItem) {
      $category = (new Category())->setName($categoryItem);
      $this->addReference("category.$categoryItem", $category);
      $manager->persist($category); // requête insertion
    }
    $manager->flush(); // execute la requête
  }

  public function getOrder() {
    return 1;
  }
}