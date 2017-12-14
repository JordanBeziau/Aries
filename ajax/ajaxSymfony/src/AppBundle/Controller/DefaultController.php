<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Qcm;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
  /**
   * @Route("/", name="homepage")
   */
  public function indexAction(Request $request)
  {
    // replace this example code with whatever you need
    return $this->render('default/index.html.twig', [
    ]);
  }

  /**
   * @Route("count_qcm", name="count_qcm")
   * @return number of qcm
   */

  public function get_count_qcm()
  {
    $manager = $this->getDoctrine()->getManager()->getRepository(QCM::class);
    $count =  $manager->count();
    return new JsonResponse($count);
  }

  /**
   * @param Request $request
   * NB : $request->query   pour GET
   *      $request->request pour POST
   * @Route("current_qcm", name="current_qcm")
   * @return Json current qcm data
   */
  public function get_current_qcm(Request $request)
  {
    $id = $request->request->get('numero');
    $manager = $this->getDoctrine()->getManager()->getRepository(QCM::class);
    $qcm = $manager->findQuestionsBy($id);
    return new JsonResponse($qcm);
  }
}
// 'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,