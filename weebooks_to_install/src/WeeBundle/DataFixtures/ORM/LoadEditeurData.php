<?php

namespace WeeBundle\DataFixture\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use WeeBundle\Entity\Editeur;

class LoadEditeurData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        $editeur =  (new Editeur())
            ->setNom("Editions eyrolles");

        $this->addReference('eyrolles', $editeur);
        $manager->persist($editeur);
        $manager->flush();

    }
    public function getOrder()
    {
        return 1;
    }
}