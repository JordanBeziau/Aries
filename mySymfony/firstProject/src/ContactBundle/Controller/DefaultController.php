<?php

namespace ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/contact", name="contact")
     */
    public function indexAction(Request $request)
    {
      $form =
        $this->createFormBuilder()
          ->setAction($this->generateUrl("contact"))
          ->add("name", TextType::class)
          ->add("submit", SubmitType::class, array(
            "label" => "Submit",
            "attr" => array(
              "class" => "btn btn-success"
            )
          ))
          ->getForm();
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $name = $form->getData()["name"];
      }
      return $this->render('ContactBundle:Default:index.html.twig', array(
        "form" => $form->createView(),
      ));
    }
}
