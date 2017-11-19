<?php

namespace Acme\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MuroController extends Controller {
  /**
   * @Route("/muro/del", name="url_muro_del")
   */
  public function muroDelAction() {
    $repo_posts = $this->getDoctrine()->getRepository("AcmeSiteBundle:Posts");
    $man = $this->getDoctrine()->getManager();
    $r = $this->getRequest();
    $id = $r->get("id", 0) + 0;
    $el = $repo_posts->find($id);
    $man->remove($el);
    $result = 0;
    $msg = "";
    try {
      $man->flush();
      $result = 1;
    } catch(\Exception $ex){
      $msg .= $ex->getMessage();
    }

    return new \Symfony\Component\HttpFoundation\JsonResponse(array(
        "result" => $result,
        "msg" => $msg
    ));
  }

      /**
       * @Route("/muro/add", name="url_muro_add")
       */
      public function muroAddAction() {
        $repo_hermano = $this->getDoctrine()->getRepository("AcmeSiteBundle:Hermanos");
        $man = $this->getDoctrine()->getManager();
        $r = $this->getRequest();
        $titulo = $r->get("titulo","Sin titulo");
        $descripcion = $r->get("descripcion","Descripcion");
        $tags = $r->get("tags","Descripcion");
        $hermano = $this->getRequest()->getSession()->get("hermano_id");

        $el = new \Acme\SiteBundle\Entity\Posts();
        $el->setTitulo($titulo);
        $el->setDescripcion($descripcion);
        $el->setTags($tags);
        $el->setHermano($hermano);
        $el->refhermano = $repo_hermano->find($hermano);

        $man->persist($el);
        $result = 0;
        $msg = "$hermano";
        try {
          $man->flush();
          $result = 1;
        } catch(\Exception $ex){
          $msg .= $ex->getMessage();
        }

        return new \Symfony\Component\HttpFoundation\JsonResponse(array(
            "result" => $result,
            "msg" => $msg
        ));
      }


    /**
     * @Route("/muro/get", name="url_muro_get")
     */
    public function muroGetAction() {

              \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("PaginatorUtils");
              \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("EntityUtils");
              $repo = $this->getDoctrine()->getRepository("AcmeSiteBundle:Posts");

              //////
              $paginator = new \PaginatorUtils($this);
              //$paginator->count=1;
              $query = $repo->createQueryBuilder("c");


              /* if ($category != "") {
                $query->andWhere('c.categoria = :categoria');
                $query->setParameter('categoria', $category);
                } */
              /*if ($find != "") {
                  $query->orWhere('c.nombre like :find');
                  $query->orWhere('c.apellidos like :find');
                  $query->orWhere('c.cargo like :find');
                  $query->orWhere('c.cargoprov like :find');
                  $query->setParameter('find', "%$find%");
              }*/

              $query->add('orderBy', 'c.fecha DESC');

              //Only count
              $buttons = "No hubo botones :(";
              //$query->select("count(c.id)");
              $buttons = $paginator->getButtonList($query, "c", "button");

              //Select all elements
              //$query->select("c");
              $data = $paginator->getQueriedPaginated($query, "c"); //$query->getQuery()->getResult();
              //$data = \EntityUtils::entityObjectsToArray($this->getDoctrine(), $data);



      return $this->render("AcmeSiteBundle:OFM:muro_get.html.twig", array(
                  "data" => $data,
                  "buttons" => $buttons
      ));
    }

    /**
     * @Route("/muro", name="url_muro")
     */
    public function muroLoginAction() {
        //$man = $this->getDoctrine()->getManager();

        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("PaginatorUtils");
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("EntityUtils");
        $repo = $this->getDoctrine()->getRepository("AcmeSiteBundle:Posts");

        //////
        $paginator = new \PaginatorUtils($this);
        //$paginator->count=1;
        $query = $repo->createQueryBuilder("c");


        /* if ($category != "") {
          $query->andWhere('c.categoria = :categoria');
          $query->setParameter('categoria', $category);
          } */
        /*if ($find != "") {
            $query->orWhere('c.nombre like :find');
            $query->orWhere('c.apellidos like :find');
            $query->orWhere('c.cargo like :find');
            $query->orWhere('c.cargoprov like :find');
            $query->setParameter('find', "%$find%");
        }*/

        $query->add('orderBy', 'c.fecha DESC');

        //Only count
        $buttons = "No hubo botones :(";
        //$query->select("count(c.id)");
        $buttons = $paginator->getButtonList($query, "c", "button");

        //Select all elements
        //$query->select("c");
        $data = $paginator->getQueriedPaginated($query, "c"); //$query->getQuery()->getResult();
        //$data = \EntityUtils::entityObjectsToArray($this->getDoctrine(), $data);



        return $this->render("AcmeSiteBundle:OFM:muro.html.twig", array(
                    "data" => $data
        ));
    }

    /**
     * @Route("/muro/{id}", name="url_muro_post")
     */
    public function postAction() {
        $man = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository("AcmeSiteBundle:Posts");

        $id = $this->getRequest()->get("id", 0) + 0;

        $data = $repo->find($id);
        //\Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("EntityUtils");
        //U$data2 = \EntityUtils::entityObjectToArray($this->getDoctrine(), $data);


        return $this->render("AcmeSiteBundle:OFM:post.html.twig", array(
                    "data" => $data
        ));
    }
}
