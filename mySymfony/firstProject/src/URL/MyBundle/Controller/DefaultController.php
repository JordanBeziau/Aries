<?php

namespace URL\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
  /**
   * @Route("/mybundle", name="myBundle")
   */
  public function indexAction()
  {
      return $this->render('MyBundle:Default:index.html.twig', array(
        "bundle" => "My bundle !"
      ));
  }

  /**
   * @Route("/mybundle/about", name="myBundle-about")
   */
  public function aboutAction()
  {
    return $this->render('MyBundle:Default:about.html.twig', array(
      "bundle" => "My bundle !",
      "name" => "Jack"
    ));
  }

  /**
   * @Route("/mybundle/bundleInfo/{name}", name="bundleInfo", defaults={"name" = ""})
   * @param $name
   * @return mixed
   */
  public function infoAction($name) {
    return $this->render("MyBundle:Default:info.html.twig", array(
      "name" => $name
    ));
  }
}
