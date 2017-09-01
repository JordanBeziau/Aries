<?php

namespace WeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WeeBundle\Form\LoginType;

class SecurityController extends Controller {
  /**
   * @Route("/login", name="securityLogin")
   */
  public function loginAction() {
    # Service security
    $authenticationUtils = $this->get("security.authentication_utils");
    # error
    $error = $authenticationUtils->getLastAuthenticationError();
    # last login
    $lastUsername = $authenticationUtils->getLastUsername();

    # Form here
    $form = $this->createForm(LoginType::class, array(
      "username" => $lastUsername
    ));

    return $this->render('WeeBundle:Security:login.html.twig',
      array(
        "form" => $form->createView(),
        'error' => $error
    ));
  }

  /**
   * @Route("/logout", name="securityLogout")
   */
  public function logoutAction() {
    throw new \Exception("This should not be reached");
  }

}
