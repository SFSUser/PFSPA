<?php

namespace Acme\SFSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;

class SerialController extends Controller {
    /**
     * @Route("/serial/estado", name="url_serialrevisar")
     * @Template()
     */
    public function revisarAction() {
        $r = $this->getRequest();
        $doctrine = $this->getDoctrine();
        $repo = $doctrine->getRepository("AcmeSFSBundle:SFSSerial");
        $serials = $repo->findBy(array(), array("id" => "ASC"));
        $redirect_vencimiento = $r->get("redirect", "false") !== "false";


        $curdate = new \DateTime();
        $curdate->setTime(0, 0, 0);
        $last_license = null;
        $valid_licence = null;
        foreach ($serials as $x) {
            $last_license = $x;
            if ($x->getFechaVencimiento() >= $curdate) {
                $valid_licence = $x;
            }
        }

        $datediff = 0;
        if ($valid_licence !== null) {
            $datediff = $valid_licence->getFechaVencimiento()->getTimestamp() - time();
            $datediff = floor($datediff / (60 * 60 * 24)) + 1;
        }
        return $this->render("AcmeSFSBundle:Admin:serial_status.html.twig", array(
                    "last_license" => $last_license,
                    "valid_license" => $valid_licence,
                    "diferencia" => $datediff,
                    "redirect" => $redirect_vencimiento
        ));
    }

    /**
     * @Route("/serial/generar", name="url_serialgenerar")
     * @Template()
     */
    public function generarAction() {
        UtilsController::includeSFSUtil("Encrypt");
        $r = $this->getRequest();
        $dias = $r->get("dias", 0) + 0;
        $host = $r->getHost();
        $fecha = new \DateTime();
        $fecha = $fecha->format("Y-m-d");
        $key_u = "$host|$dias|$fecha";

        $key = \Encrypt::encrypt($key_u);
        $key = base64_encode($key);
        $key = str_replace("=", "", $key);
        return new \Symfony\Component\HttpFoundation\JsonResponse(array(
            "key" => $key,
            "string" => $key_u
        ));
    }

    /**
     * @Route("/serial/check", name="url_serialcheck")
     * @Template()
     */
    public function checkAction() {
        $r = $this->getRequest();
        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $repo = $doctrine->getRepository("AcmeSFSBundle:SFSSerial");
        $serial = $r->get("serial", "");
        $serial = trim($serial);
        UtilsController::includeSFSUtil("Encrypt");

        $res = base64_decode($serial);
        $res = \Encrypt::decrypt($res);

        $parts = explode("|", $res);
        $domain = $parts[0];
        $cur_host = $r->getHost();
        if (count($parts) < 3 && $cur_host !== $domain) {
            return new \Symfony\Component\HttpFoundation\JsonResponse(array(
                "result" => 1,
                "decoded" => $res,
                "key" => $serial
            ));
        }
        $serials = $repo->findBy(array(), array("id" => "DESC"));

        //El serial ya fue utilizado?
        foreach ($serials as $x) {
            if ($x->getClave() == $serial) {
                return new \Symfony\Component\HttpFoundation\JsonResponse(array(
                    "result" => 2,
                    "key" => $serial
                ));
            }
        }

        $days = $parts[1] + 0;
        $exp = $parts[2];
        $so = new \Acme\SFSBundle\Entity\SFSSerial();
        $so->setClave($serial);
        $so->setDias($days);
        $so->setValor($res);

        $fecha = new \DateTime();
        $fecha->add(new \DateInterval('P' . $days . 'D'));
        $so->setFechaVencimiento($fecha);

        $manager->persist($so);
        $manager->flush();
        return new \Symfony\Component\HttpFoundation\JsonResponse(array("result" => 0));
    }

}
