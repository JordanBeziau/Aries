<?php
namespace BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nelmio\Alice\Fixtures;
use BlogBundle\Entity\Article;

class LoadArticlesFixtures implements FixtureInterface {

  public function load(ObjectManager $manager) {
    $objects = Fixtures::load(__DIR__."/fixtures.yml", $manager);
  }
  /*public function load(ObjectManager $manager) {
    foreach ($this->getDatas() as $data) {
      $article = (new Article())
        ->setTitre("Un titre")
        ->setContenu("Ici votre texte...");
      $em = $this->getDoctrine()->getManager();
      $em->persist($article);
      $em->flush();
    }
  }*/

  private function getDatas() {
    return [
      [
        "titre" => "Webdesign",
        "contenu" => "Le contenu de l'article Webdesign"
      ],
      [
        "titre" => "React",
        "contenu" => "Le contenu de l'article React"
      ],
      [
        "titre" => "UX design",
        "contenu" => "Le contenu de l'article UX design"
      ]
    ];
  }
}