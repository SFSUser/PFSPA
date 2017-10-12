<?php

namespace Acme\SFSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;

class SchemaController extends Controller {
    /*
     * Genera un token para los permisos de modificar, eleminar, crear... etc en las entidades
     */

    public static function genToken($id, $bundle, $entity, $plus = "") {
        UtilsController::includeSFSUtil("Encrypt");
        return \Encrypt::md5EntityCrypt($id, $bundle, $entity, $plus);
    }

    /*
     * Registra un evento de cambios de datos.
     */

    public function addEvent($entity, $event_name, $id) {
        $usr = $this->get('security.context')->getToken()->getUser();
        $user_name = $usr->getUsername();

        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $event = new \Acme\SFSBundle\Entity\SFSSchemaEvent();
        $event->setEntity($entity);
        $event->setAccount($user_name);
        $event->setEvent($event_name);
        $event->setIdentifier($id);
        $manager->persist($event);
        $manager->flush();
    }

    public function getCurrentPermisions($bundle, $entity, $explicit = array(), $element = null) {
        $user = $this->getUser();
        return \Acme\SFSBundle\Entity\SFSAccounts::getCurrentPermisions($user, $bundle, $entity, array(
                    "roles",
                    $element,
                    "admin",
                    $explicit
        ));
    }

    /**
     * SFS_EDITOR
     *
     * @Route("/schema/editor/", name="schema_editor")
     * @Template()
     */
    public function editorAction() {

        UtilsController::includeSFSUtil("Encrypt");
        $export = $this->getRequest()->get("export", "query");
        $id = $this->getRequest()->get("id", 0) + 0;
        $public = $this->getRequest()->get("token_public", "");
        $bundle = $this->getRequest()->get("bundle");
        $perm = $this->getRequest()->get("permisions", array());
        $denied_buttons = $this->getRequest()->get("hide_buttons", array());
        $conds = $this->getRequest()->get("conds", array());
        $title = $this->getRequest()->get("title", null);
        $print_headers = $this->getRequest()->get("modal", null);
        $entity = $this->getRequest()->get("entity");

        if (is_string($perm)) {
            $perm = \Encrypt::decryptJSON($perm, array());
        }

        //echo "<hr>";
        //echo var_dump($conds);
        //echo "<hr>";

        if (is_string($conds)) {
            $conds = \Encrypt::decryptJSON($conds, array());
        }

        //$conds = \Encrypt::blowfishDecrypt($conds);

        $__token = self::genToken($id, $bundle, $entity);
        $__token_public = self::genToken($id, $bundle, $entity, "PUBLIC");
        // $__token = md5("$bundle-$entity-$id");

        /* if (!$this->get('security.context')->isGranted("ROLE_ADMIN") && !$this->getUser()->hasRole("ROLE_$bundle" . "_$entity" . "_LECTURA")) {
          return new \Symfony\Component\HttpFoundation\Response("");
          } */

        $entity2 = $this->getRequest()->get("entity2");
        $id2 = $this->getRequest()->get("id2");

        $doctrine = $this->getDoctrine();
        $repo = $doctrine->getRepository("Acme$bundle" . "Bundle:$entity");
        $entity_path = "\\Acme\\$bundle" . "Bundle\\Entity\\$entity";

        $object_created = true;
        $element = $repo->find($id);
        if ($element === null) {
            $object_created = false;
            $element = new $entity_path();
        }

        $include_template = false;
        $include_template_name = "Acme$bundle" . "Bundle:Schemas:$entity.html.twig";
        if ($this->get('templating')->exists($include_template_name)) {
            $include_template = true;
        }
        $include_sub_template = false;
        $include_sub_template_name = "Acme$bundle" . "Bundle:Schemas:$entity" . "_sub.html.twig";
        if ($this->get('templating')->exists($include_sub_template_name)) {
            $include_sub_template = true;
        }

        $form_object = null;
        $form_type = "\\Acme\\$bundle" . "Bundle\\Form\\Type\\$entity" . "Type";
        if (class_exists($form_type)) {
            $form_object = new $form_type();
        } else {
            $form_object = new \Acme\SFSBundle\Form\Type\SFSFormType($this, $element);
        }
        $form = $this->createForm($form_object, $element);
        UtilsController::includeSFSUtil("EntityUtils");
        $element_object = $element;
        $element = \EntityUtils::entityObjectToArray($doctrine, $element);

        $permisions = $this->getCurrentPermisions($bundle, $entity, $perm, $element_object);
        //echo print_r($permisions);
        
        //Si el token publico no coincide, denegar lectura.
        if (!$permisions["lectura"] && $public != $__token_public) {
            return new \Symfony\Component\HttpFoundation\Response("");
        }

        if ($export === "print") {
            //unset($element["columns"]);

            $template_print = "AcmeSiteBundle:Schemas:$entity" . "_print.html.twig";
            if (!$this->get('templating')->exists($template_print)) {
                $template_print = "AcmeSFSBundle:Schema:editor_print.html.twig";
            }

            return $this->render($template_print, array(
                        //"form" => $form->createView(),

                        "bundle" => $bundle,
                        "entity" => $entity,
                        //"entity2" => $entity2,
                        "id" => $id,
                        //"id2" => $id2,
                        //"conds" => $conds,
                        "element" => $element,
                        "element_object" => $element_object,
                        //"include_template" => $include_template,
                        //"include_template_name" => $include_template_name,
                        //"include_sub_template" => $include_sub_template,
                        //"include_sub_template_name" => $include_sub_template_name,
                        "$bundle$entity" . "_created" => $object_created,
                            //"element_created" => $object_created
            ));
        }

        //echo var_dump($permisions);
        return $this->render("AcmeSFSBundle:Schema:editor.html.twig", array(
                    "__token" => $__token,
                    "form" => $form->createView(),
                    "bundle" => $bundle,
                    "entity" => $entity,
                    "entity2" => $entity2,
                    "title" => $title,
                    "id" => $id,
                    "id2" => $id2,
                    "conds" => $conds,
                    "element" => $element,
                    "element_object" => $element_object,
                    "include_template" => $include_template,
                    "include_template_name" => $include_template_name,
                    "include_sub_template" => $include_sub_template,
                    "include_sub_template_name" => $include_sub_template_name,
                    "$bundle$entity" . "_created" => $object_created,
                    "permisions" => $permisions,
                    "denied_buttons" => $denied_buttons,
                    "element_created" => $object_created,
                    "print_headers" => $print_headers
        ));
    }

    /**
     *
     *
     * @Route("/schema/select/list", name="schema_selectlist")
     * @Template()
     */
    public function listselectAction() {
        $r = $this->getRequest();
        UtilsController::includeSFSUtil("Encrypt");
        UtilsController::includeSFSUtil("Utils");

        //$bundle = $r->get("bundle", "");
        $perm = $this->getRequest()->get("permisions", array());
        $entity_full = $r->get("entity", "");
        $id2 = $r->get("id2", 0) + 0;
        $field = $r->get("field", "");
        $entity2 = $r->get("entity2", "");
        $title = $r->get("title", null);
        $selectable = $r->get("selectable", false) ? "true" : "false";
        $search_in = $r->get("search_in", array());
        $conds = $r->get("conds", array());
        $conds_e = $r->get("conds_e", "");

        $parts = FieldController::getEntityParts($entity_full);
        $bundle = $parts["bundle"];
        $entity = $parts["entity"];

        $token = \Utils::generateRandomPass(10);

        $permisions = $this->getCurrentPermisions($bundle, $entity, $perm);
        $perm_e = \Encrypt::encryptJSON($permisions);
        return $this->render("AcmeSFSBundle:Schema:list_select.html.twig", array(
                    "permisions" => $permisions,
                    "permisions_encrypt" => $perm_e,
                    "bundle" => $bundle,
                    "entity" => $entity,
                    "entity_full" => $entity_full,
                    "entity2" => $entity2,
                    "id2" => $id2,
                    "field" => $field,
                    "token" => $token,
                    "title" => $title,
                    "selectable" => $selectable,
                    "search_in" => $search_in,
                    "conds" => $conds,
                    "conds_e" => $conds_e
        ));
    }

    /**
     *
     *
     * @Route("/schema/select/list/get", name="get_schema_selectlist")
     * @Template()
     */
    public function ajaxlistselectAction() {
        $r = $this->getRequest();
        UtilsController::includeSFSUtil("Utils");
        UtilsController::includeSFSUtil("Encrypt");
        UtilsController::includeSFSUtil("EntityUtils");

        $perm = $r->get("permisions");
        $token = $r->get("token", "");
        $id2 = $r->get("id2", 0) + 0;
        $entity = $r->get("entity", "");
        $entity2 = $r->get("entity2", "");
        $field = $r->get("field", "");
        $conds_e = $r->get("conds_e", "and") === "and";
        $conds = $r->get("conds", array());
        $selectable = $r->get("selectable", "false");
        $perm = \Encrypt::decryptJSON($perm, array());

        $data_final = array();
        $joined_data = $data = array();
        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $repo = $doctrine->getRepository($entity);

        //echo "<h2>$selectable</h2>";

        if ($selectable === "true") {
			$qb = $manager->createQueryBuilder();
			$qb->select('e')->from($entity, 'e');
			$qb->where('1=1');
			$p_count = 0;
			foreach($conds as $k => $v){
				++$p_count;
				//if($conds_e){
					$qb->andWhere("e.$k like :par_$p_count");
				//} else {
				//	$qb->orWhere("e.$k like :par_$p_count");
				//}
				$qb->setParameter("par_$p_count", $v);
			}
			$data = $qb->getQuery()->getResult();
            //$data = $repo->findBy($conds);
        }
        $joined = $this->getJoinedData($entity, $entity2, $id2, $field);

        //OJO: aca se ignoran las condiciones
        if ($joined["pred"] !== null) {
            $data = $joined["pred"];
        }
        //if (!empty($joined["data"])) {
        $joined_data = $joined["data"];
        //}
        //Add joined data
        foreach ($joined_data as $x) {
            $x->joined = true;
            $data_final[] = $x;
        }
        //Add data
        foreach ($data as $x) {
            $is = false;
            foreach ($joined_data as $y) {
                if ($x->getId() === $y->getId())
                    $is = true;;
            }
            if ($is)
                continue;
            $x->joined = false;
            $data_final[] = $x;
        }

        foreach ($data_final as &$x) {
            $e_id = $x->getId();
            $label = \EntityUtils::getElementString($x, "Elemento " + $e_id);
            $x->label = $label;
        }

        return $this->render("AcmeSFSBundle:Schema:list_select_query.html.twig", array(
                    "permisions" => $perm,
                    "data" => $data_final,
                    "entity2" => $entity2,
                    "id2" => $id2,
                    "token" => $token
        ));
    }

    /**
     * SFS_LIST
     *
     * @Route("/schema/list", name="schema_list")
     * @Template()
     */
    public function listAction() {
        $r = $this->getRequest();

        $bundle = $r->get("bundle", "");
        $entity = $r->get("entity", "");
        $perm = $r->get("permisions", array());
        $conds = $r->get("conds", array());
        $hide = $r->get("hide", array());
        $ress = $r->get("ress", array());
        $tabular = $r->get("tabular", true);
        $title = $r->get("title", null);

        $print_headers = $r->get("modal", null);
        $entity2 = $r->get("entity2");
        $id2 = $r->get("id2");
        $field = $r->get("field", "");

        UtilsController::includeSFSUtil("Utils");
        UtilsController::includeSFSUtil("Encrypt");
        $conds = \Encrypt::encryptJSON($conds);


        $permisions = $this->getCurrentPermisions($bundle, $entity, $perm);
        $perm_e = \Encrypt::encryptJSON($permisions);

        //Bloquea acceso total a la tabla??
        if (!$permisions["lectura"]) {
            return new \Symfony\Component\HttpFoundation\Response("");
        }
        /*
          if (!$this->get('security.context')->isGranted("ROLE_ADMIN") && !$this->getUser()->hasRole("ROLE_$bundle" . "_$entity" . "_LECTURA")) {
          return new \Symfony\Component\HttpFoundation\Response("");
          } */

        $doctrine = $this->getDoctrine();
        $entity_path = "\\Acme\\$bundle" . "Bundle\\Entity\\$entity";
        $element = new $entity_path();
        $entity_metadata = $doctrine->getManager()->getClassMetadata(get_class($element));

        $columns = array();

        $assoc_list = array();
        foreach ($entity_metadata->associationMappings as $value) {
            $rel_entity = $value["targetEntity"];
            if (isset($value["targetToSourceKeyColumns"])) {
                foreach ($value["targetToSourceKeyColumns"] as $column) {
                    $assoc_list[$column] = $rel_entity;
                }
            }
            //$columnName = $value["columnName"];
            //echo "<pre><code>";
            //print_r($value);
            //echo "</code></pre>";
        }

        foreach ($entity_metadata->fieldMappings as $value) {

            $column_type = $value["type"];
            $column_name = $value["columnName"];
            $column_nullable = $value["nullable"];
            $column_length = $value["length"];
            $search_data = array();
            $related_entity = null;
            if (isset($assoc_list[$column_name])) {
                $related_entity = self::reformatEntity($assoc_list[$column_name]);
            }

            if (method_exists($element, "getSearchData")) {
                $data = $element->getSearchData();
                if (isset($data[$column_name])) {
                    $search_data = $data[$column_name];
                }
            }
            $columns[] = array(
                "name" => $column_name,
                "type" => $column_type,
                "search_data" => $search_data,
                "entity" => $related_entity
            );
        }

        $entity2_name = explode(":", $entity2);
        if (count($entity2_name) > 1) {
            $entity2_name = $entity2_name[1];
        }


        return $this->render("AcmeSFSBundle:Schema:list.html.twig", array(
                    "permisions" => $permisions,
                    "permisions_encrypt" => $perm_e,
                    "title" => $title,
                    "bundle" => $bundle,
                    "entity" => $entity,
                    "entity2" => $entity2,
                    "entity2_name" => $entity2_name,
                    "id2" => $id2,
                    "field" => $field,
                    "columns" => $columns,
                    "conds" => $conds,
                    "ress" => $ress,
                    "tabular" => $tabular,
                    "print_headers" => $print_headers,
                    "hide" => $hide
        ));
    }

    /**
     * Obtiene una lista de resultados para la lista sfs_list
     *
     * @Route("/schema/list/get", name="get_schema_list")
     */
    public function ajaxlistAction() {
      ini_set('display_errors', 'On');
      ini_set('display_errors', 1);
      error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
      error_reporting(E_ALL);
      error_reporting(-1);
      
        UtilsController::includeSFSUtil("Utils");
        UtilsController::includeSFSUtil("Encrypt");
        UtilsController::includeSFSUtil("EntityUtils");
        UtilsController::includeSFSUtil("PaginatorUtils");

        $export = $this->getRequest()->get("export", "query");
        $order = $this->getRequest()->get("order", array());
        $hide = $this->getRequest()->get("hide", array());
        $conds = $this->getRequest()->get("conds"); // array());
        $perm = $this->getRequest()->get("permisions"); // array());
        $ress = $this->getRequest()->get("ress", array());
        $filters = $this->getRequest()->get("filter", array());
        $bundle = $this->getRequest()->get("bundle", "");
        $entity = $this->getRequest()->get("entity", "");
        $entity2 = $this->getRequest()->get("entity2", "");
        $field = $this->getRequest()->get("field", "");
        $id2 = $this->getRequest()->get("id2", 0) + 0;
        $repo_name = "Acme$bundle" . "Bundle:$entity";
        $doctrine = $this->getDoctrine();
        $repo = $doctrine->getRepository($repo_name);

        $conds = \Encrypt::decryptJSON($conds, array("id" => 0));
        $perm = \Encrypt::decryptJSON($perm, array());
        //var_dump($conds);


        /*
         * OBTIENE TODO LOS JOINTABLE DE ESTE OBJECTO
         * (TENIENDO EN MENTE QUE SOLO HAY UNO)
         * PERO SI HAY MAS???
         */
        $data = null;
        $data_joined = null;
        if ($entity2 !== "") {
            $joined = $this->getJoinedData("Acme$bundle" . "Bundle:$entity", $entity2, $id2, $field);
            $data_joined = $joined["data"];
        }
        /* if ($entity2 !== "") {
          $result = null;
          if ($entity2 !== "" && $id2 > 0) {
          $repo2 = $doctrine->getRepository($entity2);
          $result = $repo2->find($id2);
          //echo 'gets!';
          }
          if ($result !== null) {
          $entity_metadata = $doctrine->getManager()->getClassMetadata(get_class($result));
          foreach ($entity_metadata->associationMappings as $value) {
          if (isset($value["joinTable"])) {
          //TestEmpesa
          $sourceEntity = $value["sourceEntity"];
          $sourceEntity = self::reformatEntity($sourceEntity);
          //Testuser
          $targetEntity = $value["targetEntity"];
          $targetEntity = self::reformatEntity($targetEntity);

          $fieldName = $value["fieldName"];
          //echo "Adedd! $fieldName, orign $sourceEntity target $targetEntity";
          $data_joined = $result->$fieldName; //->add($element);
          }
          }
          }
          } */

        //Obtener los datos

        $qb = $doctrine->getManager()->createQueryBuilder();
        //$qb = new \Doctrine\DBAL\Query\QueryBuilder();
        $qb->select("e");
        $qb->from($repo_name, "e");



        foreach ($order as $key => $value) {
            $key = \Utils::underscoreToCamelCase($key, false);
            $qb->orderBy("e.$key", $value);
        }

        //Aplica las condiciones
        $param_count = 0;
        foreach ($conds as $key => $value) {
            $key = \Utils::underscoreToCamelCase($key, false);
            ++$param_count;
            $qb->andWhere("e.$key = ?$param_count");
            $qb->setParameter($param_count, $value);
        }

        //Aplica los filtros correspondientess.
        foreach ($filters as $column => $filter) {
            $column = \Utils::underscoreToCamelCase($column, false);
            foreach ($filter as $filter_name => $options) {
                ++$param_count;
                switch ($filter_name) {
                    case "search":
                        $qb->andWhere("e.$column like ?$param_count");
                        $qb->setParameter($param_count, "%$options%");
                        ++$param_count;
                        /* $qb->orWhere("e.$column like ?$param_count");
                          $qb->setParameter($param_count, "%$options");
                          ++$param_count;
                          $qb->orWhere("e.$column like ?$param_count");
                          $qb->setParameter($param_count, "$options%");
                          ++$param_count;
                          $qb->orWhere("e.$column like ?$param_count");
                          $qb->setParameter($param_count, "$options"); */
                        break;
                    case "mayor":
                        ++$param_count;
                        $qb->andWhere("e.$column > ?$param_count");
                        $qb->setParameter($param_count, $options);

                        break;
                    case "minor":
                        ++$param_count;
                        $qb->andWhere("e.$column < ?$param_count");
                        $qb->setParameter($param_count, $options);

                        break;
                    case "equal":
                        //Filtro para verdadero y falso, no falla pues debe ser entero o fecha
                        //Si no es asi fallaría.
                        if ($options === "true" || $options === "false") {
                            $options = $options === "true";
                        }
                        ++$param_count;
                        $qb->andWhere("e.$column = ?$param_count");
                        $qb->setParameter($param_count, $options);

                        break;
                    case "between":
                        if (!isset($options["first"]) || !isset($options["last"])) {
                            return;
                        }
                        $first = $options["first"];
                        $last = $options["last"];
                        ++$param_count;
                        $qb->andWhere("e.$column >= ?$param_count AND e.$column <= ?" . ($param_count + 1));
                        $qb->setParameter($param_count, $first);
                        ++$param_count;
                        $qb->setParameter($param_count, $last);
                        break;
                }
            }
        }

        //Paginador
        $paginator = new \PaginatorUtils($this);
        $paginator->callback = "SchemaList_$bundle" . "$entity.paginate";
        $paginator_buttons = $paginator->getButtonList(clone $qb, "e");
        $paginator->addPaginatedQuery($qb);
        $data_object = $qb->getQuery()->getResult();

        $sel_str = "COUNT(e.id) AS conteo_ingnorar,";
        foreach ($ress as $key => $value) {
            $column = \Utils::underscoreToCamelCase($key, false);
            switch ($value) {
                case "sum":
                    $sel_str .= "SUM(e.$column) AS $key,";
                    break;
                case "avg":
                    $sel_str .= "AVG(e.$column) AS $key,";
                    break;
            }
        }
        $qb->select(rtrim($sel_str, ","));
        $qb->setFirstResult(0);
        $qb->setMaxResults(null);
        $ress_data = $qb->getQuery()->getResult();
        if (count($ress_data) > 0) {
            $ress_data = $ress_data[0];
        } else {
            $ress_data = array();
        }


        //$data = $repo->findBy($conds, $order);
        //Obtener despues los botones de paginado, ya que afecta la consulta

        $data = \EntityUtils::entityObjectsToArray($doctrine, $data_object, true);

        if ($data_joined === null) {
            $data_joined = array();
        }

        $data_joined = \EntityUtils::entityObjectsToArray($doctrine, $data_joined, true);

        //$user = $this->getUser();


        /**
         * POTENCIAL BUG LOGICO?????
         *
         * Si no se heredan los permisos de la variable $perm, entonces que pasara
         * con las sublistas que no hereden tales permisos explícitos????
         */
        $user = $this->getUser();
        //En esta parte se quitan los elementos añadidos del resultado original
        foreach ($data_joined as &$x) {
            $el = $x["element"];
            $x["joined"] = true;
            //Permite aplicar la regla a cada elemento de la lista.
            //$x["permisions"] = $this->getCurrentPermisions($bundle, $entity, $perm, $el);
            $x["permisions"] = \Acme\SFSBundle\Entity\SFSAccounts::getCurrentPermisions($user, $bundle, $entity, array(
                        "roles",
                        $perm,
                        $el,
                        "admin"
            ));
        }
        $data_final = array();
        foreach ($data as &$x) {
            $el = $x["element"];
            $in = false;
            foreach ($data_joined as $y) {
                if ($x["id"] === $y["id"]) {
                    $in = true;
                }
            }
            $x["joined"] = $in;
            //$x["permisions"] = $this->getCurrentPermisions($bundle, $entity, $perm, $el);
            $x["permisions"] = \Acme\SFSBundle\Entity\SFSAccounts::getCurrentPermisions($user, $bundle, $entity, array(
                        "roles",
                        $perm,
                        $el,
                        "admin"
            ));
            if (!$in) {
                $data_final[] = $x;
            }
        }

        if ($export === "excel") {
            $response = new \Symfony\Component\HttpFoundation\Response();

            $response->headers->set('Content-Type', 'application/vnd.ms-excel; charset=utf-8');
            $response->headers->set('Content-Disposition', "attachment; filename=$entity.xls");
            $response->send();

            $text = \EntityUtils::getExcelText($data);

            return new \Symfony\Component\HttpFoundation\Response($text);
        }
        if ($export === "print") {
            $template_print = "AcmeSiteBundle:Schemas:$entity" . "_list_print.html.twig";
            if (!$this->get('templating')->exists($template_print)) {
                $template_print = "AcmeSFSBundle:Schema:list_print.html.twig";
            }
            return $this->render($template_print, array(
                        "bundle" => $bundle,
                        "entity" => $entity,
                        "entity2" => $entity2,
                        "id2" => $id2,
                        "data" => $data,
                        "element_objects" => $data_object,
                        "data_joined" => $data_joined,
                        "resultados" => $ress_data,
                        "hide" => $hide
            ));
        }

        return $this->render("AcmeSFSBundle:Schema:list_query.html.twig", array(
                    "permisions" => $perm,
                    "buttons" => $paginator_buttons,
                    "bundle" => $bundle,
                    "entity" => $entity,
                    "entity2" => $entity2,
                    "id2" => $id2,
                    "data" => $data,
                    "data_joined" => $data_joined,
                    "resultados" => $ress_data,
                    "hide" => $hide
        ));
    }

    /*
     * Funcion que simplifica la llamada entre una ejecucion de persistencia de datos
     * sencilla y una multiple.
     */

    function editor($params) {
        UtilsController::includeSFSUtil("Utils");
        //$request = $this->getRequest();

        $id = \Utils::getParam($params, "id", 0) + 0; //$request->get("id", 0) + 0;
        $entity2 = \Utils::getParam($params, "entity2", ""); //$request->get("entity2", "");
        $id2 = \Utils::getParam($params, "id2", ""); ////$request->get("id2", "");
        $token = \Utils::getParam($params, "__token", 0); ////$request->get("__token", 0);
        $bundle = \Utils::getParam($params, "bundle", ""); ////$request->get("bundle", "");
        $entity_original = \Utils::getParam($params, "entity", ""); //$request->get("entity", "");
        $action = \Utils::getParam($params, "action", "get"); //$request->get("action", "get");
        $c_order = \Utils::getParam($params, "consult_order", array("id" => "ASC")); //$request->get("consult_order", array("id" => "ASC"));
        $c_conds = \Utils::getParam($params, "consult_conditions", array()); //$request->get("consult_conditions", array());
        //Es modificado mas adelante
        $entity = $entity_original;

        //Permiso para crear cambios
        $allow_token = self::genToken($id, $bundle, $entity) == $token;

        //Crianza. Asamblea. Asda
        $allow_token_delete = self::genToken($id, $bundle, $entity, "ELIMINAR") == $token;

        //Permiso para el control total
        $allow_token_all = self::genToken("", $bundle, $entity, "ALL") == $token;

        if (!($allow_token || $allow_token_all || $allow_token_delete)) {
            return array("result" => 0, "message" => "Invalid token");
        }

        $action = strtolower($action);
        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $entity_full_name = "Acme$bundle" . "Bundle:$entity";
        $repository = $doctrine->getRepository($entity_full_name);
        $entity_path = "\\Acme\\$bundle" . "Bundle\\Entity\\$entity";
        $exec_action = "get";

        $element = null;
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("ImgurImage");
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("Utils");
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("EntityUtils");

        $element = $repository->find($id);
        $types = array();

        if ($action == "create" || $action === "update" || $action === "save") {
            //Indica si el elemnto es nuevo, para redefinir el comportamiento de los valores
            //por defecto de los campos sin definir.
            //$is_new_element = false;
            if ($element === null) {
                $exec_action = "created";
                $is_new_element = true;
                $element = new $entity_path();
            } else {
                $exec_action = "updated";
            }

            $entity_metadata = $doctrine->getManager()->getClassMetadata(get_class($element));
            UtilsController::includeSFSUtil("Utils");
            //$ignored_fields = array();

            foreach ($entity_metadata->fieldMappings as $value) {
                $column_type = $value["type"];
                $types[] = $column_type;
                $column_name = $value["columnName"];
                $column_nullable = $value["nullable"];
                $column_unique = $value["unique"];
                $column_length = $value["length"];



                $getter = "get" . \Utils::underscoreToCamelCase($column_name);
                $setter = "set" . \Utils::underscoreToCamelCase($column_name);

                $predefined = null;
                if (method_exists($element, $getter)) {
                    $predefined = $element->$getter();
                    //echo "$getter ($predefined)<br>";
                }

                if ($predefined === null) {
                    switch ($column_type) {
                        case "boolean":
                            $predefined = false;
                            break;
                        case "datetime":
                            $predefined = new \DateTime();
                            break;
                        default:
                        case "string":
                        case "text":
                            $predefined = "";
                            break;
                        case "number":
                        case "integer":
                            $predefined = 0;
                            break;
                    }
                }

                $value = \Utils::getParam($params, $column_name, $predefined); //$request->get($column_name, $predefined);
                //Checar si ya esta repetido el campo único
                if ($column_unique) {
                    $result = $repository->findOneBy(array(
                        $column_name => $value
                    ));
                    if ($result !== null && $result->getId() !== $element->getId()) {
                        return array(
                            "result" => 3,
                            "column" => $column_name,
                            "value" => $value,
                            "id" => $result->getId(),
                            "message" => "Se repite un valor único!");
                    }
                }

                //$ignored_fields[$column_name] = ($is_empty_param && !$is_new_element);
                //echo "<h1>($column_name) Get:$value</h1>";

                if (strstr($column_type, "date") !== FALSE && !($value instanceof \DateTime)) {
                    $value = new \DateTime($value);
                }
                if ($column_type === "boolean" && !is_bool($value)) {
                    $value = strtolower($value) == "true" ? true : false;
                }

                if ($column_length > 0) { // && $column_type === "string"
                    $value = substr($value, 0, $column_length);
                    if ($value === false) {
                        $value = "";
                    }
                }
                if (method_exists($element, $setter)) {
                    //echo "$setter ($value)<br>";
                    $element->$setter($value);
                }
            }
            $fieldName = "";
            //Obtener todas las asocianes con otras tablas
            foreach ($entity_metadata->associationMappings as $value) {

                //Formatear la ruta del entity para obtener el repositorio.
                $entity = $value["targetEntity"];
                $entity = self::reformatEntity($entity);

                $repo = $doctrine->getRepository($entity);
                //El nombre del campo de la entidad actual.
                $fieldName = $value["fieldName"];
                //echo"<pre><code>";print_r($value);echo "</code></pre>";
                //Procesar Columnas Unidas directamente.
                if (isset($value["joinColumns"])) {
                    foreach ($value["joinColumns"] as $x) {
                        //echo"<pre><code>";print_r($x);echo "</code></pre>";

                        $setter_column = "set" . \Utils::underscoreToCamelCase($x["name"]);
                        $getter_column = "get" . \Utils::underscoreToCamelCase($x["name"]);
                        $pred_value = $element->$getter_column();

                        //echo "|$joined_column : " . $x["name"] . "|";
                        $id_join = \Utils::getParam($params, $x["name"], $pred_value); //$request->get($x["name"], $pred_value); //$element->$joined_column();

                        $referenced_column = \Utils::underscoreToCamelCase($x["referencedColumnName"]);
                        $res = $repo->findOneBy(array($x["referencedColumnName"] => $id_join));
                        //echo "<h1>$setter_column FOUND:" . $fieldName . ($res !== null ? "SI" : "NO") . ":$id_join</h1>";
                        //echo "|" . $res->getId() . "|";


                        $element->$fieldName = $res;
                        //Quita el problema del error por no tener el campo que haga referencia a un objeto que no existe (One to one al numero 0) definiendole antes como NULO
                        $element->$setter_column($id_join > 0 ? $id_join : null);
                        //echo "$setter_column ($id_join)";
                    }
                }

                //Procesar Tabla Unida: (Many to Many)

                /**/
                //$element->$fieldName = null;
            }

            //////////aca esaabdbasdhajsbhdasd
            self::manytomany($doctrine, $element, $entity2, $id2, true, $fieldName);

            //echo "<h1>Before: " . $element->getConcepto() ." AND " . ($element->refconcepto->getNombre()) . "</h1>";



            $manager->persist($element);
            $manager->flush();
        }

        $last_id = $element->getId();

        if ($action === "delete" || $action === "remove") {
            if (!($allow_token_delete || $allow_token_all)) {
                return array("result" => 0, "Invalid delete token!");
            }
            $exec_action = "deleted";
            $manager->remove($element);
            $manager->flush();
        }

        if ($action === "getall") {
            $data = $repository->findBy($c_conds, $c_order);
            $data = \EntityUtils::entityObjectsToArray($doctrine, $data);
            return array("data" => $data);
        }

        $this->addEvent($entity_full_name, $exec_action, $last_id);

        $data = \EntityUtils::entityObjectToArray($doctrine, $element);
        //$data["__token"] = $__token;

        $__token = self::genToken($last_id, $bundle, $entity_original);
        return array(
            "result" => 1,
            "id" => $last_id,
            "__token" => $__token,
            "data" => $data,
            "exec_action" => $exec_action,
            "types" => $types
        );
    }

    /**
     * Agrega un nuevo elemento a un JoinTable via Ajax
     *
     * @Route("/schema/ajax/join/editor", name="schema_ajaxjoineditor")
     * @Template()
     */
    public function ajaxjoineditorAction() {
        $request = $this->getRequest();
        $id = $request->get("id", 0) + 0;
        $entity2 = $request->get("entity2", "");
        $id2 = $request->get("id2", "");
        $bundle = $request->get("bundle", "");
        $entity = $request->get("entity", "");
        $field = $request->get("field", "");
        $action = $request->get("action", "add");

        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $repository = $doctrine->getRepository("Acme$bundle" . "Bundle:$entity");

        $element = $repository->find($id);

        if ($element == null) {
            return new \Symfony\Component\HttpFoundation\JsonResponse(array(
                "result" => 0
            ));
        }

        $op_field = "no_action";
        switch ($action) {
            case "add":
                $op_field = self::manytomany($doctrine, $element, $entity2, $id2, true, $field);
                break;
            case "remove":
                $op_field = self::manytomany($doctrine, $element, $entity2, $id2, false, $field);
                break;
        }

        $manager->flush();

        return new \Symfony\Component\HttpFoundation\JsonResponse(array(
            "result" => 1,
            "action" => $action,
            "id" => $id,
            "id2" => $id2,
            "entity" => $entity,
            "entity2" => $entity2,
            "field" => $op_field
        ));
    }

    /**
     * Ejecuta una accion sencilla de persistencia de datos.
     *
     * @Route("/schema/ajax/editor", name="schema_ajaxeditor")
     * @Template()
     */
    public function ajaxeditorAction() {
        //Posibles errores? tocara ver...
        $params = array_merge($_POST, $_REQUEST, $_GET);
        //echo var_dump($params);
        $response = $this->editor($params);
        return new \Symfony\Component\HttpFoundation\JsonResponse($response);
    }

    /**
     * Ejecuta multiples acciones de persistencia de datos.
     *
     * @Route("/schema/ajax/editor/multiple", name="schema_ajaxeditor_multiple")
     * @Template()
     */
    public function ajaxemultipleditorAction() {
        $r = $this->getRequest();
        $data = $r->get("data", array());
        //echo var_dump($data);
        $responses = array();
        foreach ($data as $k => $v) {
            //try{
                $responses[] = $this->editor($v);
            /*} catch(\Doctrine\ORM\ORMException $e) {
                $responses[] = array(
                    "error_type" => "orm",
                    "msg" => $e->getMessage()
                );
            } catch(\Doctrine\DBAL\DBALException $e) {
                $responses[] = array(
                    "error_type" => "DBAL",
                    "msg" => $e->getMessage()
                );
            } catch(Exception $e){
                $responses[] = array(
                    "msg" => $e->getMessage()
                );
            }*/
        }
        return new \Symfony\Component\HttpFoundation\JsonResponse(array(
            "responses" => $responses
        ));
    }

    /*     * *************************** GENERAL EDITOR *********************************** */
    /*     * *************************** GENERAL EDITOR *********************************** */
    /*     * *************************** GENERAL EDITOR *********************************** */
    /*     * *************************** GENERAL EDITOR *********************************** */
    /*     * *************************** GENERAL EDITOR *********************************** */
    /*     * *************************** GENERAL EDITOR *********************************** */
    /*     * *************************** GENERAL EDITOR *********************************** */
    /*     * *************************** GENERAL EDITOR *********************************** */
    /*     * *************************** GENERAL EDITOR *********************************** */

    /**
     * Que es esto????
     */
    public function addpageAction($bundle, $entity) {
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("EditorManager");
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("Utils");

        //$doctrine = $this->getDoctrine();
        $params = array(
            //"categorias" => self::getCategories($doctrine),
            //"tipos" => self::getTipos($doctrine),
            "section" => "add"
        );

        self::callEvent($this, $entity, $this->getRequest()->get("id"), "onModifyEditor");

        $class_name = "\\Acme\\" . $bundle . "Bundle\\Entity\\$entity";
        $producto = new $class_name();

        return \EditorManager::proccess(
                        $this, $bundle, $entity, $producto, $params);
    }

    /*
     * Obtiene los elementos unidos al primer Joindtable
     */

    function getJoinedData($entity, $entity2, $id2, $field = null) {
        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();

        $datas_joined = array(
            "data" => array(),
            "pred" => null
        );
        $data_joined = null;

        if ($entity2 !== "") {
            $result = null;
            if ($entity2 !== "" && $id2 > 0) {
                $repo2 = $doctrine->getRepository($entity2);
                $result = $repo2->find($id2);
                //echo 'gets!';
            }
            if ($result !== null) {
                $entity_metadata = $manager->getClassMetadata(get_class($result));

                if (method_exists($result, "getSelectListDefaults")) {
                    $datas_joined["pred"] = $result->getSelectListDefaults();
                }

                //$elementEntity = $manager->getClassMetadata(get_class($element))->getName();
                //$elementEntity = self::reformatEntity($elementEntity);

                foreach ($entity_metadata->associationMappings as $value) {
                    if (isset($value["joinTable"])) {
                        //TestEmpesa
                        $sourceEntity = $value["sourceEntity"];
                        $sourceEntity = self::reformatEntity($sourceEntity);
                        //Testuser
                        $targetEntity = $value["targetEntity"];
                        $targetEntity = self::reformatEntity($targetEntity);

                        if ($targetEntity !== $entity)
                            continue;

                        $fieldName = $value["fieldName"];
                        if (($field === null || $field === "") && !\Utils::containsString($fieldName, "pred_")) {
                            $field = $fieldName;
                        }

                        /* if($field !== null && $fieldName !== $field){
                          continue;
                          } */

                        //echo "Adedd! $fieldName, orign $sourceEntity target $targetEntity";
                        $data_joined = $result->$fieldName; //->add($element);
                        if ($field == $fieldName) {
                            $datas_joined["data"] = $data_joined;
                            continue;
                        }

                        /* if (!\Utils::containsString($field, "pred_") && \Utils::containsString($fieldName, "pred_")) {
                          $datas_joined["pred"] = $data_joined;
                          continue;
                          } */

                        //$datas_joined["data"] = $data_joined;


                        /*
                          $repo_source = $sourceEntity;

                          foreach ($value["joinTable"] as $x) {

                          }
                         */
                    }
                }
            }
        }
        return $datas_joined;
    }

    /*
     * Convierte de ruta de clase al nombre de la entidad.
     */

    public static function reformatEntity($entity) {
        $entity = str_replace("\\Entity\\", ":", $entity);
        $entity = str_replace("\\", "", $entity);
        return $entity;
    }

    /*
     * Agrega un elemento ManyToMany con JoinTable
     */

    public static function manytomany($doctrine, &$element, $entity2, $id2, $add, $field = null) {
        UtilsController::includeSFSUtil("Utils");

        //Si no hay ninguna entidad relacionada, ignorar el resto de siguiente código
        $result = null;
        if ($entity2 !== "" && $id2 > 0) {
            $repo2 = $doctrine->getRepository($entity2);
            $result = $repo2->find($id2);
            //echo 'gets!';
        }
        if ($result !== null) {
            $manager = $doctrine->getManager();
            $entity_metadata2 = $manager->getClassMetadata(get_class($result));
            $elementEntity = $manager->getClassMetadata(get_class($element))->getName();
            $elementEntity = self::reformatEntity($elementEntity);

            foreach ($entity_metadata2->associationMappings as $value) {
                if (isset($value["joinTable"])) {
                    //TestEmpesa
                    $sourceEntity = $value["sourceEntity"];
                    $sourceEntity = self::reformatEntity($sourceEntity);
                    //Testuser
                    $targetEntity = $value["targetEntity"];
                    $targetEntity = self::reformatEntity($targetEntity);

                    //echo "<h1>$sourceEntity  - $targetEntity - $elementEntity</h1>";
                    if ($targetEntity !== $elementEntity)
                        continue;

                    $fieldName = $value["fieldName"];

                    //Si no coinciden los fields!!
                    if (($field === null || $field === "") && !\Utils::containsString($fieldName, "pred_")) {
                        $field = $fieldName;
                    }

                    if ($field !== $fieldName)
                        continue;

                    //Ignora la lista de predeterminados
                    //if (!\Utils::containsString($field, "pred_") && \Utils::containsString($fieldName, "pred_")) {
                    //    continue;
                    //}
                    //echo "--$fieldName--";
                    //echo "Adedd! $fieldName, orign $sourceEntity target $targetEntity";
                    if ($add) {
                        if (!$result->$fieldName->contains($element)) {
                            $result->$fieldName->add($element);
                        }
                        return $fieldName;
                    } else {
                        //$copy = $result->$fieldName->clear();
                        //$result->$fieldName = new \Doctrine\Common\Collections\ArrayCollection();
                        $result->$fieldName->removeElement($element);
                        //foreach($copy as $value){
                        //    $result->$fieldName->add($value);
                        //}
                        return $fieldName;
                    }
                    /*
                      $repo_source = $sourceEntity;

                      foreach ($value["joinTable"] as $x) {

                      } */
                }
            }
        }
        return "";
    }

}
