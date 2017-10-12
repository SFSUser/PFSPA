<?php

namespace Acme\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UsuarioController extends Controller {

    /**
     * @Route("/usuario/login", name="url_usuario_login")
     */
    public function usuarioLoginAction() {
        //$man = $this->getDoctrine()->getManager();
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("EntityUtils");
        $repo = $this->getDoctrine()->getRepository("AcmeSiteBundle:Hermanos");
        $r = $this->getRequest();
        $user = $r->get("usuario", "");
        $pass = $r->get("contrasenia", "");
        $act = $r->get("mode", "login");
        $result = 0;

        $users = $repo->findOneBy(array(
            "nick" => $user,
            "clave" => $pass
        ));

        if ($users !== null) {
            $this->getRequest()->getSession()->set("hermano_id", $users->getId());
            $user_data = \EntityUtils::entityObjectToArray($this->getDoctrine(), $users);
            $this->getRequest()->getSession()->set("hermano_data", $user_data);
            $result = 1;
        }
        if ($act == "unlogin") {
            $this->getRequest()->getSession()->set("hermano_id", null);
            $result = 1;
        }
        if ($act == "redirect") {
            $this->getRequest()->getSession()->set("hermano_id", null);
            return new \Symfony\Component\HttpFoundation\RedirectResponse("/");
        }
        if ($act == "save") {
            $nombre = $r->get("nombre", "");
            $apellidos = $r->get("apellidos", "");
            $imagen = $r->get("imagen", "");
            $telefono = $r->get("telefono", "");
            $lugar = $r->get("lugar", "");
            $cargo = $r->get("cargo", "");
            $cargoprov = $r->get("cargoprov", "");
            
            $nacimiento = $r->get("nacimiento", "now");
            $fallecido = $r->get("fallecido", "now");
            $vsimples = $r->get("vsimples", "now");
            $vsolemnes = $r->get("vsolemnes", "now");
            $ordenacion = $r->get("ordenacion", "now");
            
            $biografia = $r->get("biografia", "");
            $hid = $this->getRequest()->getSession()->get("hermano_id", 0) + 0;
            $man = $this->getDoctrine()->getManager();
            $h = $repo->find($hid);
            $h->setNombre($nombre);
            $h->setApellidos($apellidos);
            $h->setImagen($imagen);
            $h->setTelefono($telefono);
            $h->setLugar($lugar);
            $h->setCargo($cargo);
            $h->setCargoprov($cargoprov);
            
            $h->setNacimiento(new \DateTime($nacimiento));
            $h->setFallecido(new \DateTime($fallecido));
            $h->setVsimples(new \DateTime($vsimples));
            $h->setVsolemnes(new \DateTime($vsolemnes));
            $h->setOrdenacion(new \DateTime($ordenacion));
            
            $h->setBiografia($biografia);
            $man->persist($h);
            $man->flush();
            //sesión cerrada!
            $result = array("result" => 1);
            if ($hid < 1) {
                return new \Symfony\Component\HttpFoundation\JsonResponse(array("result" => 0));
            }

            return new \Symfony\Component\HttpFoundation\JsonResponse($result);
        }

        return new \Symfony\Component\HttpFoundation\JsonResponse(array(
            "result" => $result,
            "data" => "$user-$pass"
        ));
    }

    /**
     * @Route("/usuario", name="url_usuario")
     */
    public function usuarioAction() {
        $man = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository("AcmeSiteBundle:Hermanos");

        $id = $this->getRequest()->getSession()->get("hermano_id", 0) + 0;

        $data = $repo->find($id);
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("EntityUtils");
        $data2 = \EntityUtils::entityObjectToArray($this->getDoctrine(), $data);


        return $this->render("AcmeSiteBundle:OFM:usuario.html.twig", array(
                    "data" => $data,
                    "data2" => $data2
        ));
    }

    /**
     * @Route("/usuario/data", name="url_usuario_data")
     */
    public function usuarioDataAction() {
        $man = $this->getDoctrine()->getManager();
        $repo = $this->getDoctrine()->getRepository("AcmeSiteBundle:Hermanos");

        $id = $this->getRequest()->getSession()->get("hermano_id", 0) + 0;

        $data = $repo->find($id);
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("EntityUtils");
        $data2 = \EntityUtils::entityObjectToArray($this->getDoctrine(), $data);


        return $this->render("AcmeSiteBundle:OFM:usuario.html.twig", array(
                    "data" => $data,
                    "data2" => $data2
        ));
    }

}
