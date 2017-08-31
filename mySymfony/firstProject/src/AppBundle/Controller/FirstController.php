<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FirstController extends Controller
{
  /**
   * @return mixed
   * @Route("/", name="homepage")
   */
  public function indexAction() {
    return $this->render("AppBundle:First:index.html.twig", array(
      // ...
    ));
  }
  /**
   * @Route("/about", name="aboutMe")
   */
  public function aboutAction()
  {
    $name = "Jack";
    $number = mt_rand(1,50);
    return $this->render('AppBundle:First:about.html.twig', array(
      "name" => $name,
      "number" => $number
    ));
  }

  /**
   * @Route("/info/{id}/{name}", name="info", requirements={"id":"\d+", "name":"[a-zA-Z]+"})
   * @param $id, $name
   * @return mixed
   */
  public function infoAction($id = 0, $name="") {
    return $this->render("AppBundle:First:info.html.twig", array(
      "name" => $name,
      "number" => $id
    ));
  }

  /**
   * @Route("/list/{id}", name="list", requirements={"id":"\d+"})
   */
  public function listAction($id = 0) {
    $names = array("Jack", "Jason", "Olly");
    return $this->render("AppBundle:First:list.html.twig", array(
      "names" => $names,
      "number" => $id
    ));
  }

}
