<?php

namespace Acme\SFSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;

class FieldController extends Controller {


   public function fieldListAction($name, $columns = array("valor")) {
       UtilsController::includeSFSUtil("Utils");
       $token = \Utils::generateRandomPass(10);
       $r = $this->getRequest();
       $title = $r->get("title", "Listado de elementos");

       return $this->render("AcmeSFSBundle:Schema:field_list.html.twig", array(
                   "name" => $name,
                   "columns" => $columns,
                   "token" => $token,
                   "title" => $title
       ));
   }

    public function fieldEntitiesAction() {

        $fixed = array();
        $em = $this->getDoctrine()->getManager();
        $meta = $em->getMetadataFactory()->getAllMetadata();
        foreach ($meta as $x) {
            $parts = $x->getName();
            $parts = explode("\\", $parts);

            $entity = $parts[3];
            $bundle = str_replace("Bundle", "", $parts[1]);
            $name = "$bundle:" . $parts[3];
            $fixed[] = array(
                "label" => $name
            );
        }

        return $this->render("AcmeSFSBundle:Schema:field_options.html.twig", array(
                    "data" => $fixed
        ));
    }

    public static function getEntityElement($entity) {
        $parts = self::getEntityParts($entity);
        $entity_path = "\\Acme\\" . $parts["bundle"] . "Bundle\\Entity\\" . $parts["entity"];
        return new $entity_path();
    }

    public static function getEntityParts($entity) {
        $bundle = "";
        $entity_name = "";
        $entity_parts = explode(":", $entity);
        if (count($entity_parts) > 1) {
            $bundle = $entity_parts[0];
            $bundle = str_replace("Acme", "", $bundle);
            $bundle = str_replace("Bundle", "", $bundle);
            $entity_name = $entity_parts[1];
        }

        return array(
            "bundle" => $bundle,
            "entity" => $entity_name
        );
    }

    /**
     * @Route("/services/search/form", name="url_search_input")
     * @Template()
     */
    public function fieldSearchAction() {
        //$name, $entity, $key, $search_in) {
        $r = $this->getRequest();
        $name = $r->get("name");
        $entity = $r->get("entity");
        $required = $r->get("required", true);
        $key = $r->get("key");
        $value_def = $r->get("value");
        $search_in = $r->get("search_in", array());
        $conds = $r->get("conds", array());
        $perm = $r->get("permisions", array());
        $readonly = $r->get("readonly", false);
        UtilsController::includeSFSUtil("EntityUtils");
        UtilsController::includeSFSUtil("Utils");
        $doctrine = $this->getDoctrine();
        $repo = $doctrine->getRepository($entity);

        $entity_parts = self::getEntityParts($entity);
        $element = self::getEntityElement($entity);

        $user = $this->getUser();
        $perm = \Acme\SFSBundle\Entity\SFSAccounts::getCurrentPermisions($user,
                $entity_parts["bundle"],
                $entity_parts["entity"]);


        $entity_metadata = $doctrine->getManager()->getClassMetadata(get_class($element));

        //Columnas especificadas en el codigo
        $column_names = array();
        //Listado predeterminado de campos disponibles
        $column_names_allow = array();
        $column_names_final = array();

        foreach ($entity_metadata->fieldMappings as $value) {
            $col_name = $value["columnName"];
            $column_names[] = $col_name;
            switch ($col_name) {
                case "id":
                case "nombre":
                case "apellido":
                case "documento":
                case "nit":
                case "name":
                case "title":
                case "titulo":
                    $column_names_allow[] = $col_name;
                    break;
            }
        }

        foreach ($search_in as $x) {
            $sx = str_replace("%", "", $x);
            //\Utils::containsArrayInsensitive($x, $column_names)
            if (in_array($sx, $column_names)) {
                $column_names_final[] = $x;
            }
        }

        if (empty($column_names_final)) {
            $column_names_final = $column_names_allow;
        }

        $token = \Utils::generateRandomPass(10);
        return $this->render("AcmeSFSBundle:Schema:field_search.html.twig", array(
                    "value" => $value_def,
                    "name" => $name,
                    "token" => $token,
                    "entity" => $entity,
                    "entity_name" => $entity_parts["entity"],
                    "permisions" => $perm,
                    "bundle" => $entity_parts["bundle"],
                    "key" => $key,
                    "search_in" => $column_names_final,
                    "conds" => $conds,
                    "required" => $required,
                    "readonly" => $readonly
        ));
    }

    /**
     * @Route("/services/search/autocomplete", name="url_search_service")
     * @Template()
     */
    public function fieldSearchServiceAction() {
        UtilsController::includeSFSUtil("EntityUtils");
        UtilsController::includeSFSUtil("Utils");
        $entity = $this->getRequest()->get("entity", null);

        if ($entity === null) {
            return new \Symfony\Component\HttpFoundation\Response("{No entity}");
        }
        $entity_parts = explode(":", $entity);
        $entity_bundle = $entity_parts[0];
        $entity_name = "";
        if (count($entity_parts) > 1) {
            $entity_name = $entity_parts[1];
        }

        $token = $this->getRequest()->get("token", "");
        $search = $this->getRequest()->get("search", "");
        $id = $this->getRequest()->get("id", null);
        $key = $this->getRequest()->get("key", "id");
        $search_in = $this->getRequest()->get("search_in", array());
        $conds = $this->getRequest()->get("conds", array());
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        //$repo = $doctrine->getRepository($entity);
        $qb = $em->createQueryBuilder();

        $qb->select('e')->from($entity, 'e');
        //$conteo = 0;
        if ($id !== null) {
            $qb->where("e.$key = :id");
            $qb->setParameter("id", $id);
        } else if ($search !== "") {
            foreach ($conds as $k => $v) {
                $qb->andWhere("e.$k like :param_cond_$k");
                $qb->setParameter("param_cond_$k", $v);
            }
            foreach ($search_in as $x) {
                //++$conteo;
                //$like = \Utils::containsString($x, "%");
                //Opera solo en valores numericos
                if(!is_numeric($search)){
                    $x = "%$x%";
                }

                //Sanitized column name
                $stx = str_replace("%", "", $x);
                $find = str_replace($stx, $search, $x);

                $qb->orWhere("e.$stx like :param$stx");
                $qb->setParameter("param$stx", "$find");
                //if (is_numeric($search) && !$like) {
                //    $qb->setParameter("param$x", "$find");
                //} else {
                //}
            }
        }
        $query = $qb->getQuery();
        $result = $query->getResult();
        //->orderBy('e.name', 'ASC')
        $data = array();

        foreach ($result as $x) {
            $label = \EntityUtils::getElementString($x);
            $getter = "get" . ucfirst($key);
            $id = 0;
            //echo $getter;
            if (method_exists($x, $getter)) {
                $id = $x->$getter();
            }
            $data[] = array(
                "label" => $label,
                "key" => $id
            );
        }

        if (empty($data)) {
            return new \Symfony\Component\HttpFoundation\Response("");
        }

        $template_print = "AcmeSFSBundle:Schema:field_search_options.html.twig";
        $template_search = "AcmeSiteBundle:Schemas:$entity_name" . "_search.html.twig";
        $exist_search = $this->get('templating')->exists($template_search);

        $ajax_value = \EntityUtils::entityObjectsToArray($this->getDoctrine(), $result);
        $html_out = $this->render($template_print, array(
                    "token" => $token,
                    "basic_data" => $data,
                    "data" => $result,
                    "exist_search" => $exist_search,
                    "template_search" => $template_search))->getContent();

        return new \Symfony\Component\HttpFoundation\JsonResponse(array(
            "html_out" => $html_out,
            "ajax_data" => $ajax_value
        ));

        //return new \Symfony\Component\HttpFoundation\JsonResponse(array(
        //    "result" => 1,
        //    "data" => $data
        //));
    }

    public function fieldImageAction($name, $image = "http://i.imgur.com/lY8kuJ4.png") {
        UtilsController::includeSFSUtil("Utils");
        $token = \Utils::generateRandomPass(10);
        return $this->render("AcmeSFSBundle:Schema:field_image.html.twig", array(
                    "name" => $name,
                    "token" => $token,
                    "image" => $image
        ));
    }

    public static function getEntityQuery($doctrine, $p) {
        UtilsController::includeSFSUtil("Utils");
        $entity = \Utils::getParam($p, "entity", "");
        $group = \Utils::getParam($p, "group", "");
        $conds = \Utils::getParam($p, "conds", array());
        $order = \Utils::getParam($p, "order", array());
        $limit = \Utils::getParam($p, "limit", null);
        $repo = $doctrine->getRepository($entity);
        $data = $repo->findBy($conds, $order, $limit);
        if ($group !== "") {
            $getter = "get" . \Utils::underscoreToCamelCase($group);
            $arr_r = array();
            foreach ($data as $x) {
                if (method_exists($x, $getter)) {
                    $value = $x->$getter();
                    $arr_r[$value][] = $x;
                }
            }
            return $arr_r;
        }
        return $data;
    }

    public static function getEntityData($doctrine, $entity, $label = "", $id = "id", $conds = array()) {
        if ($id == null) {
            $el = self::getEntityElement($entity);
            $sd = array();
            if (method_exists($el, "getSearchData")) {
                $sd = $el->getSearchData();
            }
            if (isset($sd[$label])) {
                $sd = $sd[$label];
            } else {
                $sd = array();
            }
            return $sd;
        }

        UtilsController::includeSFSUtil("EntityUtils");

        //$doctrine = $this->getDoctrine();
        $repo = $doctrine->getRepository($entity);
        $data = $repo->findAll($conds);
        //$data = \EntityUtils::entityObjectsToArray($doctrine, $data);

        $fixed = array();

        foreach ($data as $x) {
            if ($label === null) {
                $fixed[] = $x;
                continue;
            }

            $id_t = $x->getId();
            $label_t = "Sin etiqueta $id_t";
            $method_label = "get" . ucfirst($label);
            //$method_id = "get" . ucfirst($id);

            if (method_exists($x, $method_label)) {
                $label_t = $x->$method_label();
            } else {
                $label_t = \EntityUtils::getElementString($x, $label_t);
            }

            $fixed[$id_t] = $label_t;
        }

        return $fixed;
    }

    public function fieldOptionAction($entity, $label, $id = "id") {
        $data = $this->getEntityData($this->getDoctrine(), $entity, $label, $id);
        return $this->render("AcmeSFSBundle:Schema:field_options_default.html.twig", array(
                    "data" => $data
        ));
    }

}
