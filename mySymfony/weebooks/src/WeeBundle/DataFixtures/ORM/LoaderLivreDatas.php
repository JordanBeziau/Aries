<?php

namespace WeeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WeeBundle\Entity\Livre;

class LoaderLivreDatas extends AbstractFixture implements OrderedFixtureInterface {
  public function load(ObjectManager $manager) {
    foreach($this->getData() as $data) {
      $data["releaseDate"] = \DateTime::createFromFormat("Y-m-d", $data["releaseDate"]);
      $book =
        (new Livre())
          ->setImageName($data["imageName"])
          ->setTitre($data["titre"])
          ->setResume($data["resume"])
          ->setReleaseDate($data["releaseDate"])
          ->setPrice($data["price"])
          ->setEditeur($this->getReference($data["reference"]));
      $manager->persist($book);
      $manager->flush();
    }
  }

  public function getOrder() {
    return 2;
  }

  public function getData() {
    return array(
      array(
        "imageName" => "bilbo-le-hobbit",
        "titre" => "Bilbo le hobbit",
        "resume" => "Les aventures de Bilbo, créature paisible soudain confrontée à la grande aventure. Ce classique de la littérature fantastique écrit par Tolkien est adapté au cinéma par Peter Jackson. On a beau avoir dans sa lignée quelques ancêtres aventuriers, quand on est hobbit, on préfère rester dans son trou ! Et Bilbo Baggins entend bien y passer des jours tranquilles. C'est sans compter avec ce vieillard à la barbe blanche et au chapeau bleu qu'il croise un matin. Son nom ? Gandalf (là, ça doit vous rappeler quelque chose). Sa proposition ? Partir à l'aventure, récupérer un trésor volé à treize nains par le dragon Smaug. Et en avant pour un long périple à travers les Terres du Milieu, où ils croiseront la route, entre autres, d'un certain Gollum « aussi ténébreux que les ténèbres» et d'un anneau magique qui n'a pas fini de faire parler de lui. Antérieur au Seigneur des anneaux d'une vingtaine d'années, Bilbo le Hobbit pose la première pierre de l'oeuvre incontournable de J.R.R. Tolkien. Initialement écrit pour les enfants, il constitue une entrée dans l'univers de l'auteur plus accessible pour les très jeunes lecteurs.",
        "releaseDate" => "1989-01-01",
        "price" => "1,00€",
        "reference" => "eyrolles"
      ),
      array(
        "imageName" => "Carrie",
        "titre" => "Carrie",
        "resume" => "Carrie White, dix-sept ans, solitaire, timide et pas vraiment jolie, vit un calvaire : elle est victime du fanatisme religieux de sa mère et des moqueries incessantes de ses camarades de classe. Sans compter ce don, cet étrange pouvoir de déplacer les objets à distance, bien qu’elle le maîtrise encore avec diffi culté... Un jour, cependant, la chance paraît lui sourire. Tommy Ross, le seul garçon qui semble la comprendre et l’aimer, l’invite au bal de printemps de l’école. Une marque d’attention qu’elle n’aurait jamais espérée, et peut-être même le signe d’un renouveau !",
        "releaseDate" => "2010-01-06",
        "price" => "6,99€",
        "reference" => "leLivreDePoche"
      ),
      array(
        "imageName" => "le-citron-dans-tous-ses-etats",
        "titre" => "Le citron dans tous ses états",
        "resume" => "Après un aperçu de l'Histoire et de la botanique du citron, l'auteur nous décrit plusieurs types de citrons : les verts, lesjaunes, en passant par les noirs, les blancs, les rouges, le citron caviar, le cédrat et quelques autres variétés. Com- ment les choisir, les conserver et les manipuler ? Quels sont les 1001 usages du CITRON possibles ?A la cuisine : - Comment marier tous types de citrons et tous types d'aliments (viandes, poissons, œufs, fruits, légumes, chocolat, etc.) ? Préparer des sauces et assaisonnements à base de citrons ?- Connaître les petits trucs des grands toqués et aussi faire des recettes originales avec des pâtes, des féculents, des piz- zas, des desserts, boissons avec ou sans alcool, etc.Pour la santé : très riche en vitamine C naturelle, le citron a des vertus alcalines et antioxydantes contre l'ar-thrite, les rhumatismes, les bactéries et les microbes, les digestions difficiles, les maux d'estomacs, les nausées, le surpoids et l'embonpoint, la déshydratation, les soucis grippaux, rhume. C'est un excellent désinfectant, brûle graisse, stimulant général et dépuratif sanguin, antistress et anti-moustique.Pour l'hygiène & la beauté : élixir de jeunesse, de beauté et de teint frais. Le citron nous offre de multiples pos-sibilités de recettes faciles à base d'huile d'olive ou d'huile d'argan pour le visage, le corps, les cheveux, etc. Comment se fabriquer un parfum à base de citron et d'Huiles Essentielles.Pour la maison : comment fabriquer son nettoyant universel au citron pour nettoyer et faire briller la cuisine, lasalle de bains, l'argenterie, le lave-vaisselle, le lave-linge, la machine à café, la théière, etc.Saviez-vous que les écorces de citron désinfectent et désodorisent les poubelles et les sacs-poubelles avec efficacitéAu jardin : comment planter un citronnier ? Expulser les insectes indélicats ?",
        "releaseDate" => "2016-03-11",
        "price" => "17,00€",
        "reference" => "eyrolles"
      ),
      array(
        "imageName" => "world-war-z",
        "titre" => "World War Z",
        "resume" => "La guerre des zombies a eu lieu, et elle a failli éradiquer l'ensemble de l'humanité. L'auteur, en mission pour l'ONU - ou ce qu'il en reste - et poussé par l'urgence de préserver les témoignages directs des survivants de ces années apocalyptiques, a voyagé dans le monde entier pour les rencontrer, des cités en ruine qui jadis abritaient des millions d'âmes jusqu'aux coins les plus inhospitaliers de la planète. Jamais auparavant nous n'avions eu accès à un document de première main aussi saisissant sur la réalité de l'existence - de la survivance - humaine au cours de ces années maudites. Prendre connaissance de ces comptes rendus parfois à la limite du supportable demandera un certain courage au lecteur. Mais l'effort en vaut la peine, car rien ne dit que la Ze Guerre mondiale sera la dernière.",
        "releaseDate" => "2010-11-03",
        "price" => "1,59€",
        "reference" => "leLivreDePoche"
      ),
    );
  }

}