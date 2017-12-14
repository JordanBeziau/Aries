<?php

namespace WeeBundle\Security;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use WeeBundle\Form\LoginForm;

class LoginFormAuthenticator extends AbstractFormLoginAuthenticator
{

    private $formFactory;
    private $em;
    private $router;
    private $passwordEncoder;
    private $roles;

    public function __construct(FormFactoryInterface $formFactory,
                                EntityManager $em,
                                RouterInterface $router,
                                UserPasswordEncoder $passwordEncoder)
    {
        $this->formFactory =  $formFactory;
        $this->em =  $em;
        $this->router =  $router;
        $this->passwordEncoder = $passwordEncoder;
        $this->roles = [];
    }

    /**
     * @param Request $request
     * @return mixed
     *
     * called on every request. The returned data is used by getUser()
     */

    public function getCredentials(Request $request)
    {
        $isLoginSubmit = $request->getPathInfo() === "/login" && $request->isMethod("POST");
        if(!$isLoginSubmit){
            return;
        }
        $form = $this->formFactory->create(LoginForm::class);
        $form->handleRequest($request);
        return $form->getData();

    }

    /**
     * @param mixed $credentials
     * @param UserProviderInterface $userProvider
     * @return null|object
     *
     * Try to fetch the username & password and return them.
     * Guard calls checkCredentials()
     */


    public function getUser($credentials, UserProviderInterface $userProvider)
    {
        $username =  $credentials['_username'];

        $user =  $this->em
            ->getRepository("WeeBundle:User")
            ->findOneBy(['email'=>$username]);
        $this->roles =  $user->getRoles();
        return $user;
    }

    /**
     * @param mixed $credentials
     * @param UserInterface $user
     * @return bool
     *
     * Checks the password
     */


    public function checkCredentials($credentials, UserInterface $user) {
      $password = $credentials['_password'];
      if($this->passwordEncoder->isPasswordValid($user, $password)){
          return true;
      }
      return false;
    }

    /**
     * @return string
     *
     * handle a bad login. return a route to the form login
     */


    protected function getLoginUrl()
    {
        return $this->router->generate("security_login");
    }

    /**
     * @return string
     * Handle a success login.
     * return a route to admin or another one
     */


    protected function getDefaultSuccessRedirectUrl()
    {
        if(in_array("ROLE_USER", $this->roles)) {
           return $this->router->generate("admin");
        }
    }

}