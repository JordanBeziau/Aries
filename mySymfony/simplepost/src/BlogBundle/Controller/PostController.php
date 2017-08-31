<?php

namespace BlogBundle\Controller;

use BlogBundle\BlogBundle;
use BlogBundle\Entity\Article;
use BlogBundle\Entity\Commentaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PostController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
      $em = $this->getDoctrine()->getManager();
      $articles =
        $em
          ->getRepository(Article::class)
          ->findAll();
      dump($articles);
      return $this->render('BlogBundle:Default:index.html.twig',
        array(
          "articles" => $articles,
        )
      );
    }

  /**
   * @Route("/article/{id}", name="articleDetail", requirements={"id":"\d+"})
   */
  public function articleDetailAction($id) {
    $em = $this->getDoctrine()->getManager();
    $article =
      $em
        ->getRepository(Article::class)
        ->find($id);
    $comment =
      $em
        ->getRepository(Commentaire::class)
        ->findByArticle($article->getId());
    dump($comment);
    return $this->render("BlogBundle:Default:article.html.twig",
      array(
        "article" => $article,
        "comments" => $comment
      ));
  }

    /**
     * @Route("article/test", name="test")
     */
    public function testAction() {
      $article =
        (new Article())
          ->setTitre("Un titre")
          ->setContenu("Un nouvel article...");
      $em = $this->getDoctrine()->getManager();
      $em->persist($article);
      $comment =
        (new Commentaire())
          ->setContenu("Le commentaire du nouvel article...")
          ->setArticle($article)
          ->setCreatedAt(new \DateTime("Europe/Paris"));
      $em->persist($comment);
      $em->flush();
      return $this->redirectToRoute("home");
    }
}
