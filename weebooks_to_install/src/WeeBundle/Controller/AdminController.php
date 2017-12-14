<?php

namespace WeeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use WeeBundle\Entity\Livre;
use WeeBundle\Form\LivreType;
use Symfony\Component\HttpFoundation\Request;

class AdminController extends Controller
{
    /**
     * @Route("admin", name="admin")
     * @Security("is_granted('ROLE_ADMIN') or is_granted('ROLE_USER')")
     */
    public function indexAction() {
      if($this->getUser()->getRoles()[0] === "ROLE_ADMIN") {
        # Tout sélectionner findAll()
        $livres = $this
          ->getDoctrine()
          ->getRepository(Livre::class)
          ->findAllBooksAuthor();
      } else {
        # Sélectionner les livres de l'auteur authentifié
        $livres = $this
          ->getDoctrine()
          ->getRepository(Livre::class)
          ->findByAuteur($this->getUser());
      }
      return $this->render('WeeBundle:Admin:index.html.twig', array(
          'livres' => $livres
      ));
    }

    /**
     * @Route("edit/{id}", name="edit", requirements={"id": "\d+"})
     */
    public function editAction(Request $request, $id) {
      $manager = $this->getDoctrine()->getManager();
      $livre = $manager->getRepository(Livre::class)->find($id);

      $form = $this->createForm(LivreType::class, $livre);
      $form->handleRequest($request);
      if($form->isValid() && $form->isSubmitted()) {
        $manager->flush();
        $this->addFlash('success', 'Le livre a bien été modifié');
        return $this->redirectToRoute('edit', array('id'=> $livre->getId()));
      }
        return $this->render('WeeBundle:Admin:edit.html.twig', array(
            'our_form' => $form->createView()
        ));
    }

    /**
     * @Route("/new", name="create")
     */
    public function newAction(Request $request) {
      $manager = $this->getDoctrine()->getManager();
      $form = $this->createForm(LivreType::class);
      $form->handleRequest($request);
      if($form->isValid() && $form->isSubmitted()) {
        $fileBag = $form->getData()->getImageFile();
        $fileName = $fileBag->getClientOriginalName();
        $fileBag->move(
          $this->getParameter('upload'),
          $fileName
        );
        $livre = $form->getData();
        $livre->setImageName($fileName);
        $livre->setAuteur($this->getUser());
        $manager->persist($livre);
        $manager->flush();
        return $this->redirectToRoute('admin');
      }
      return $this->render('WeeBundle:Admin:new.html.twig', array(
        'our_form' => $form->createView()
      ));
    }

  /**
   * @Route("/delete", name="delete")
   */
  public function deleteAction()
  {
    return $this->render('WeeBundle:Admin:new.html.twig', array(
      // ...
    ));
  }

}
