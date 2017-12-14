<?php

namespace WeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use WeeBundle\Entity\Livre;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        $em =  $this->getDoctrine()->getManager();
        $livres = $em
            ->getRepository(Livre::class)
            ->findAll();
        //dump($livres); exit;

        return $this->render('WeeBundle:Default:index.html.twig',[
            'livres' => $livres
        ]);
    }

}
