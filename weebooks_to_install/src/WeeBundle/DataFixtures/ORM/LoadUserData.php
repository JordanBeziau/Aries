<?php


namespace WeeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use WeeBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{

    public function load(ObjectManager $manager)
    {

        foreach ($this->getData() as $data)
        {
            $user = new User();
            $user->setEmail($data['email']);
            $user->setPlainPassword($data['plainPassword']);
            $user->setNom($data['nom']);
            $user->setPrenom($data['prenom']);
            $user->setRoles($data['roles']);
            $this->addReference(strstr($user->getEmail(),"@", true), $user);
            $manager->persist($user);
        }

        $manager->flush();
    }


    public function getData()
    {
        return [
          [
            'email'=>'admin@weebooks.fr',
            'plainPassword' => 'topsecret',
            'prenom' =>'',
            'nom' =>'',
            'roles' => ['ROLE_ADMIN']
          ],
          [
            'email'=>'jean.engels@weebooks.fr',
            'plainPassword' => 'secret',
            'prenom'=>'Jean',
            'nom' =>'Engels',
            'roles' => ['ROLE_USER']
          ],
          [
            'email'=>'christian.soutou@weebooks.fr',
            'plainPassword' => 'secret',
            'prenom'=>'Christian',
            'nom' =>'Soutou',
            'roles' => ['ROLE_USER']
          ],
          [
            'email'=>'jm.defrance@weebooks.fr',
            'plainPassword' => 'secret',
            'prenom'=>'Jean-Marie',
            'nom' =>'Defrance',
            'roles' => ['ROLE_USER']
          ],
          [
            'email'=>'nick.morgan@weebooks.fr',
            'plainPassword' => 'secret',
            'prenom'=>'Nick',
            'nom' =>'Morgan',
            'roles' => ['ROLE_USER']
          ],
        ];
    }

    public function getOrder()
    {
        return 2;
    }


}