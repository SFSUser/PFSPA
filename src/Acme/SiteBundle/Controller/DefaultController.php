<?php

namespace Acme\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller {

    /**
     * @Route("/paths")
     */
    public function pathAction() {
        global $selected_db;
        return $this->render('AcmeSiteBundle:Default:testing.html.twig', array(
                    "url1" => __DIR__,
                    "url2" => $this->container->get('kernel')->getRootdir(),
                    "url3" => realpath("."),
                    "url4" => getEnv("OPENSHIFT_DATA_DIR"),
                    "data1" => getEnv("SERVER_NAME"),
                    "data2" => $selected_db
        ));
    }

    public function defineCurrentUser() {
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("EntityUtils");
        $doctrine = $this->getDoctrine();
        $repo = $doctrine->getRepository("AcmeSiteBundle:Especialistas");

        $user = $this->getUser();
        $id = -1;
        if (method_exists($user, "getId")) {
            $id = $user->getId();
        }
        $especialista = $repo->findOneBy(array(
            "account" => $id
        ));
        if ($especialista) {
            //El array productos y servicios no se serializa, por lo tanto hay que convertirlo a array
            $especialista->productosservicios = \EntityUtils::convertArrayFromCollection($especialista->productosservicios);
        }
        $this->getRequest()->getSession()->set("current_especialista", $especialista);
    }

    /**
     * @Route("/consultar/usuario", name="consult_relations")
     */
    public function consultaAction() {
        $cedula = $this->getRequest()->get("cedula", 0);
        $entity = $this->getRequest()->get("entity", "");
        $bundle = $this->getRequest()->get("bundle", "");
        $remote_ref = $this->getRequest()->get("remote", "");
        $cedula = trim($cedula);
        $doctrine = $this->getDoctrine();

        $repo_usuarios = $doctrine->getRepository("AcmeSiteBundle:Usuarios");
        $repo_modulo = $doctrine->getRepository("Acme$bundle" . "Bundle:$entity");
        $result = $repo_usuarios->findOneBy(array(
            "documento" => $cedula
        ));

        $usuario_id = 0;
        $modulo_id = 0;
        if ($result) {
            $usuario_id = $result->getId();
            $modulo = null;
            if ($remote_ref !== "") {
                $modulo = $repo_modulo->findOneBy(array(
                    "$remote_ref" => $usuario_id
                ));
            }
            if ($modulo) {
                $modulo_id = $modulo->getId();
            }
        }

        return new \Symfony\Component\HttpFoundation\JsonResponse(array(
            "Usuario" => $usuario_id,
            "$entity" => $modulo_id
        ));
    }

    /**
     * @Route("/testing2")
     */
    public function test2Action() {

        $str = "<h1>pailes</h1>";
        $dt = new \DateTime("2015-08-06T01:00");
        $str = $dt->format('Y-m-d H:i:s');
        ;
        return new \Symfony\Component\HttpFoundation\Response($str);
    }

        /**
         * @Route("/nosotros/{seccion}", name="url_nosotros")
         */
        public function nosotrosAction($seccion = "nosotros") {

            return $this->render("AcmeSiteBundle:OFM:nosotros.html.twig", array(
                        "seccion" => $seccion//            "data" => $data
            ));
        }
        
    /**
     * @Route("/calendario", name="url_calendario")
     */
    public function calendarioAction() {
        $man = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository("AcmeSiteBundle:Fraternidad");
        $data = $repo->find($id);
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("EntityUtils");
        $data2 = \EntityUtils::entityObjectToArray($this->getDoctrine(), $data);

        return $this->render("AcmeSiteBundle:OFM:calendario.html.twig", array(
                    "data" => $data
        ));
    }

    /**
     * @Route("/fraternidad/{id}", name="url_fraternidad")
     */
    public function fraternidadAction($id) {
        $man = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository("AcmeSiteBundle:Fraternidad");
        $data = $repo->find($id);
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("EntityUtils");
        $data2 = \EntityUtils::entityObjectToArray($this->getDoctrine(), $data);

        return $this->render("AcmeSiteBundle:OFM:fraternidad.html.twig", array(
                    "data" => $data,
                    "data2" => $data2
        ));
    }

    /**
     * @Route("/hermano/{id}", name="url_hermano")
     */
    public function hermanoAction($id) {
        $man = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository("AcmeSiteBundle:Hermanos");
        $data = $repo->find($id);

        return $this->render("AcmeSiteBundle:OFM:hermano.html.twig", array(
                    "data" => $data
        ));
    }

    /**
     * @Route("/ajax/hermanos", name="ajax_hermanos_url")
     */
    public function ajaxnoticiasAction() {
        $doctrine = $this->getDoctrine();

        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("EntityUtils");
        $repo = $doctrine->getRepository("AcmeSiteBundle:Hermanos");
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("PaginatorUtils");

        $cols = array();
        //$category = $this->getRequest()->get("category", "");
        $find = $this->getRequest()->get("find", "");

        //////
        $paginator = new \PaginatorUtils($this);
        //$paginator->count=1;
        $query = $repo->createQueryBuilder("c");


        /* if ($category != "") {
          $query->andWhere('c.categoria = :categoria');
          $query->setParameter('categoria', $category);
          } */
        if ($find != "") {
            $query->orWhere('c.nombre like :find');
            $query->orWhere('c.apellidos like :find');
            $query->orWhere('c.cargo like :find');
            $query->orWhere('c.cargoprov like :find');
            $query->setParameter('find', "%$find%");
        }

        $query->add('orderBy', 'c.nombre DESC');

        //Only count
        $buttons = "No hubo botones :(";
        //$query->select("count(c.id)");
        $buttons = $paginator->getButtonList($query, "c", "button");

        //Select all elements
        //$query->select("c");
        $data = $paginator->getQueriedPaginated($query, "c"); //$query->getQuery()->getResult();
        $data = \EntityUtils::entityObjectsToArray($doctrine, $data);

        return $this->render('AcmeSiteBundle:OFM:hermanos_query.html.twig', array('data' => $data, "buttons" => $buttons));
    }

    /**
     * @Route("/fraternidades", name="url_fraternidades")
     */
    public function fraternidadesAction() {
        $man = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository("AcmeSiteBundle:Fraternidad");
        $all = $repo->findAll();
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("EntityUtils");
        $data = \EntityUtils::entityObjectsToArray($this->getDoctrine(), $all);

        return $this->render("AcmeSiteBundle:OFM:fraternidades.html.twig", array(
                    "data" => $data, //count($data->testtelefonos),
                        //            "object" => $element
        ));
    }

    /**
     * @Route("/hermanos", name="url_hermanos")
     */
    public function hermanosAction() {
        $man = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository("AcmeSiteBundle:Hermanos");
        //$repo2 = $this->getDoctrine()->getRepository("AcmeSiteBundle:TestEmpresa");
        //$data = $repo->find(1);
        //$data = $man->getClassMetadata(get_class(new \Acme\SiteBundle\Entity\VacunaDosis()));
        //$element = $repo2->find(1);
        //if($element !== null){
        //    $element = $element->testtelefonos;
        //}
        $all = $repo->findAll();

        return $this->render("AcmeSiteBundle:OFM:hermanos.html.twig", array(
                    "data" => $all, //count($data->testtelefonos),
                        //            "object" => $element
        ));
    }

    /**
     * @Route("/testing")
     */
    public function testAction() {
        $man = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository("AcmeSiteBundle:TestUser");
        $repo2 = $this->getDoctrine()->getRepository("AcmeSiteBundle:TestEmpresa");
        $data = $repo->find(1);
        $data = $man->getClassMetadata(get_class(new \Acme\SiteBundle\Entity\VacunaDosis()));
        $element = $repo2->find(1);
        //if($element !== null){
        //    $element = $element->testtelefonos;
        //}

        return $this->render("AcmeSiteBundle:Default:test.html.twig", array(
                    "data" => $data, //count($data->testtelefonos),
                    "object" => $element
        ));
    }

    /**
     * @Route("/", name="url_main")
     */
    public function indexAction() {
        $doctrine = $this->getDoctrine();

        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("EntityUtils");
        $repo = $doctrine->getRepository("AcmeWebBundle:WebNoticias");
        //$repo_fotos = $doctrine->getRepository("AcmeSiteBundle:CatedralFotos");

        $data = $repo->findBy(array(), array(
            "fecha" => "desc"
                ), 20);
        $data = \EntityUtils::entityObjectsToArray($doctrine, $data);
        /* $data2 = $repo_fotos->findBy(array(), array(
          "fecha" => "desc"
          ), 20);
          $data2 = \EntityUtils::entityObjectsToArray($doctrine, $data2); */

        return $this->render('AcmeSiteBundle:Web:home.html.twig', array(
                    "name" => "Cambia esto please",
                    'data' => $data,
                    "template_parent" => "AcmeWebBundle:Sections:home.html.twig",
                    "fotos" => array()
        ));
    }

    /**
     * @Route("/services/render", name="url_render")
     */
    public function renderAction() {
        $name = $this->getRequest()->get("name", "main");
        return $this->render('AcmeSiteBundle:Default:render.html.twig', array(
                    "name" => $name
        ));
    }

    /**
     * @Route("/empresas", name="url_empresas")
     */
    public function empresasAction() {
        return $this->render('AcmeSiteBundle:Empresas:index.html.twig', array());
    }

    /**
     * @Route("/usuarios", name="url_usuarios")
     */
    public function usuariosAction() {
        return $this->render('AcmeSiteBundle:Usuarios:index.html.twig', array());
    }

    /**
     * @Route("/empresa/datos", name="url_datos_empresa")
     */
    public function datosempresaAction() {
        return $this->render('AcmeSiteBundle:Datos:empresa.html.twig', array());
    }

    /**
     * @Route("/productos_servicios", name="url_productos_servicios")
     */
    public function productosserviciosAction() {
        return $this->render('AcmeSiteBundle:ProductosServicios:index.html.twig', array());
    }

    /**
     * @Route("/cotizaciones", name="url_cotizaciones")
     */
    public function cotizacionesAction() {
        $this->defineCurrentUser();
        return $this->render('AcmeSiteBundle:Ventas:index.html.twig', array());
    }

    /**
     * @Route("/certificados", name="url_certificados")
     */
    public function certificadosAction() {
        $this->defineCurrentUser();
        return $this->render('AcmeSiteBundle:Certificados:index.html.twig', array());
    }

    /**
     * @Route("/facturacion", name="url_facturacion")
     */
    public function facturacionAction() {
        $this->defineCurrentUser();
        return $this->render('AcmeSiteBundle:Facturacion:index.html.twig', array());
    }

    /**
     * @Route("/especialistas", name="url_especialistas")
     */
    public function especialistasAction() {
        return $this->render('AcmeSiteBundle:Especialistas:index.html.twig', array());
    }

    /**
     * @Route("/sgi/procesos", name="url_sgi_procesos")
     */
    public function sgiprocesosAction() {
        return $this->render('AcmeSiteBundle:SGIProcesos:index.html.twig', array());
    }

    /**
     * @Route("/notificaciones/cartera", name="url_notificaciones_cartera")
     */
    public function carteraAction() {
        return $this->render('AcmeSiteBundle:Notificaciones:index.html.twig', array());
    }

    /**
     * @Route("/desarrollo/historial", name="url_desarrollo_historial")
     */
    public function desarrollohistorialAction() {
        return $this->render('AcmeSiteBundle:Desarrollo:historial.html.twig', array());
    }

    /**
     * @Route("/desarrollo/bugs", name="url_desarrollo_bugs")
     */
    public function desarrollobugsAction() {
        return $this->render('AcmeSiteBundle:Desarrollo:bugs.html.twig', array());
    }

}
