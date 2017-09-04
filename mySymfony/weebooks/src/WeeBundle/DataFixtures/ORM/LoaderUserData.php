<?php

namespace WeeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WeeBundle\Entity\User;

class LoaderUserData extends AbstractFixture implements OrderedFixtureInterface {

  public function load(ObjectManager $manager) {
    foreach($this->getData() as $data) {
      $user = new User();
      $user->setEmail($data["username"]);
      $manager->persist($user);
    }
    $manager->flush();
  }

  public function getOrder() {
    return 3;
  }

  public function getData() {
    return array(
      array(
        "username" => "admin@weebooks.fr",
        "plainpassword" => "secret"
      ),
      array(
        "username" => "jack@weebooks.fr",
        "plainpassword" => "topsecret"
      )
    );
  }
}