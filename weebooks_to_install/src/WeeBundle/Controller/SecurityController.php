<?php

namespace WeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use WeeBundle\Form\LoginForm;

class SecurityController extends Controller
{
    /**
     * @Route("/login",name="security_login")
     */
    public function loginAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        # get login error
        $error = $authenticationUtils->getLastAuthenticationError();
        # last user entered
        $lastUsername = $authenticationUtils->getLastUsername();

        # Use the class LoginForm
        $form = $this->createForm(LoginForm::class, [
            '_username' => $lastUsername
        ]);

        return $this->render("WeeBundle:Security:login.html.twig", [
            'form' => $form->createView(),
            'error' => $error
        ]);
    }

    /**
     * @Route("/logout", name="security_logout")
     */
    public function logoutAction()
    {
        throw  new \Exception("This should not be reached");
    }

}
