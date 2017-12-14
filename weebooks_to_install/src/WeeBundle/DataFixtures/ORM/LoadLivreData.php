<?php

namespace WeeBundle\DataFixture\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WeeBundle\Entity\Livre;

class LoadLivreData extends  AbstractFixture implements  OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        foreach ($this->getData() as $data){

            $data['parution'] = \DateTime::createFromFormat('Y-m-d',$data['parution']);

            $livre = (new Livre())
                ->setTitre($data['titre'])
                ->setImageName($data['isbn'])
                ->setParution($data['parution'])
                ->setPresentation($data['presentation'])
                ->setPrix($data['prix'])
                ->setEditeur($this->getReference($data['reference']))
                ->setAuteur($this->getReference($data['auteur']));


            $manager->persist($livre);

        }

        $manager->flush();
    }

    public function getOrder()
    {
        return 3;
    }

    private function getData(){
        return [
            [
                "titre"=>"Programmez avec MySQL",
                "isbn"=>"9782212673791",
                "parution"=> "2016-10-15",
                "presentation"=>"Particulièrement destiné aux débutants, cet ouvrage permet de découvrir tous les aspects de la programmation SQL (création de tables, évolution, mises à jour et extractions) par le biais du système de gestion de bases de données MySQL.",
                "prix"=>"29.90",
                "reference"=> "eyrolles",
                "auteur" => "christian.soutou"
            ],
            [
                "titre"=>"PHP7",
                "isbn"=>"9782212673609",
                "parution"=>"2017-02-26",
                "presentation"=>"Un cours idéal pour assimiler la syntaxe et les concepts objets de PHP 7 et s'initier au développement d'applications web professionnelles",
                "prix"=>"29.90",
                "reference"=>"eyrolles",
                "auteur" => "jean.engels"
            ],
            [
                "titre"=>"Jquery Ajax avec PHP",
                "isbn"=>"9782212137200",
                "parution"=>"2013-06-20",
                "presentation"=>"Grâce à ces 44 ateliers pratiques de difficulté croissante, ...",
                "prix"=>"39.90",
                "reference"=>"eyrolles",
                "auteur" => "jm.defrance"
            ],
            [
                "titre"=>"Javascript pour les Kids",
                "isbn"=>"9782212118506",
                "parution"=>"2016-12-05",
                "presentation"=>"JavaScript pour les kids est une joyeuse introduction aux concepts essentiels de la programmation, ",
                "prix"=>"22.90",
                "reference"=>"eyrolles",
                "auteur" =>"nick.morgan"
            ],

        ];
    }

}