<?php

namespace ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ContactBundle\Form\Type\ContactFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class SendMailController extends Controller
{
    /**
     * @Route("/sendmail")
     */
    public function indexAction()
    {
      $form = $this->createForm(ContactFormType::class, null, array(
        "action" => $this->generateUrl("submit")
      ));
      return $this->render('ContactBundle:SendMail:index.html.twig', array(
          "form" => $form->createView()
      ));
    }

    /**
     * @Route("/sendmail/submit", name="submit")
     */
    public function submitAction(Request $request) {
      $form = $this->createForm(ContactFormType::class);
      $form->handleRequest($request);
      if (!$form->isValid() || !$form->isSubmitted()) {
        return $this->redirectToRoute("sendmail");
      }
      return new Response("<body>".dump($form->getData())."</body>");
      $mail =
        \Swift_Message::newInstance()
          ->setSubject("test envoi mail")
          ->from()
    }

}
