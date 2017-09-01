<?php

namespace WeeBundle\Security;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Guard\Authenticator\AbstractFormLoginAuthenticator;
use WeeBundle\Form\LoginType;

class LoginFormAuthenticator extends AbstractFormLoginAuthenticator {
  private $formFactory;
  private $entityManager;
  private $router;

  public function __construct(FormFactoryInterface $formFactory, EntityManager $entityManager, RouterInterface $router) {
    $this->formFactory = $formFactory;
    $this->entityManager = $entityManager;
    $this->router = $router;
  }

  protected function getLoginUrl() {
    return $this->router->generate("securityLogin");
  }

  public function getCredentials(Request $request) {
    $isLoginSubmit = $request->getPathInfo() === "/login" && $request ->isMethod("POST");
    if (!$isLoginSubmit) {
      return;
    }
    $form = $this->formFactory->create(LoginType::class);
    $form->handleRequest($request);
    $data = $form->getData();
    return $data;
  }

  public function checkCredentials($credentials, UserInterface $user) {
    $password = $credentials["password"];
    return $password === "secret" ? true : false;
  }

  public function getUser($credentials, UserProviderInterface $userProvider) {
    $username = $credentials["username"];
    return
      $this->entityManager
        ->getRepository("WeeBundle:User")
        ->findOneBy(["email" => $username]);
  }

  public function getDefaultSuccessRedirectUrl() {
    return $this->router->generate("home");
  }

}