<?php

namespace WeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="securityLogin")
     */
    public function loginAction()
    {
        return $this->render('WeeBundle:Security:login.html.twig', array(
            // ...
        ));
    }

}
