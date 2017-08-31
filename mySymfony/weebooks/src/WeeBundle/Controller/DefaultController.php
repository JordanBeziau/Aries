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
      $entityManager = $this->getDoctrine()->getManager();
      $books = $entityManager->getRepository(Livre::class)->findAll();
      dump($books);
      return $this->render('WeeBundle:Default:index.html.twig',
        array(
          "books" => $books
        ));
    }
}
