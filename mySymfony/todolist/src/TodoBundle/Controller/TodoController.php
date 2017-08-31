<?php

namespace TodoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TodoBundle\Entity\Todo;
use TodoBundle\Form\TodoType;
use TodoBundle\TodoBundle;

class TodoController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
      $entityManager = $this->getDoctrine()->getManager();
      $todolist =
        $entityManager
          ->getRepository(Todo::class)
          ->findAll();
      return $this->render('TodoBundle:Default:index.html.twig',
        array(
          "todolist" => $todolist,
        ));
    }

    /**
     * @Route("/edit/{id}", name="edit", requirements={"id"="\d+"})
     */
  public function editAction(Request $request, $id) {
    # Récupérer les données
    $entityManager = $this->getDoctrine()->getManager();
    $todo = $entityManager->getRepository(Todo::class)->find($id);
    $form = $this->createForm(TodoType::class, $todo);

    # Gestion des données en POST
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $entityManager->flush();
      $this->addFlash("success", "La Todo a bien été modifiée.");
      return $this->redirectToRoute("edit", array("id" => $todo->getId()));
    }
    return $this->render("TodoBundle:Default:edit.html.twig",
      array(
        "form" => $form->createView(),
      ));
  }

    /**
     * @Route("/create", name="create")
     */
    public function createAction(Request $request) {
      $form = $this->createForm(TodoType::class);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
        $data = $form->getData();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($data);
        $entityManager->flush();
        $this->addFlash("success", "La Todo a bien été créée.");
        return $this->redirectToRoute("home", array());
      }

      return $this->render("TodoBundle:Default:create.html.twig",
        array(
          "form" => $form->createView(),
        ));
    }

    /**
     * @Route("/remove", name="remove")
     */
  public function removeAction(Request $request) {
    $id = $request->get("id");
    $entityManager = $this->getDoctrine()->getManager();
    $todo = $entityManager->getRepository(Todo::class)->find($id);
    $entityManager->remove($todo);
    $entityManager->flush();

    return $this->redirectToRoute("home", array());
  }

  /**
   * @Route("/show/{id}", name="show")
   */
  public function show(Request $request, $id) {
    $entityManger = $this->getDoctrine()->getManager();
    $todo = $entityManger->getRepository(Todo::class)->find($id);
    return $this->render("TodoBundle:Default:show.html.twig",
      array(
        "todo" => $todo,
      ));
  }
}
