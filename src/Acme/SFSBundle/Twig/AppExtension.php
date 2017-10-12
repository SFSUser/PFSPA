<?php

namespace Acme\SFSBundle\Twig;

class AppExtension extends \Twig_Extension {

    var $security = null;
    var $doctrine = null;
    var $container = null;

    public function __construct($container, \Symfony\Bridge\Doctrine\RegistryInterface $doctrine, \Symfony\Component\Security\Core\SecurityContext $security) {
        //echo get_class($container). ".";
        //echo get_class($security).".";
        $this->container = $container;
        $this->doctrine = $doctrine;
        $this->security = $security;

        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("Utils");
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("Encrypt");
    }

    public function getGlobals() {
        return array(
            'sfs_forms' => "AcmeSFSBundle:Schema:inputs.html.twig",
        );
    }

    function renderController($function, $params) {
        $controller = new \Symfony\Component\HttpKernel\Controller\ControllerReference($function, $params);
        return $this->container->get('fragment.handler')->render($controller, 'inline');
    }

    public function getFunctions() {
        $raw = array('is_safe' => array('html'));
        $env = array('needs_environment' => true, "is_safe" => array("html"));
        return array(
            new \Twig_SimpleFunction('is_assoc', array($this, 'isAssoc')),
            new \Twig_SimpleFunction('in_array', array($this, 'inArray')),
            new \Twig_SimpleFunction('sfs_render', array($this, 'renderController'), $raw),
            new \Twig_SimpleFunction('sfs_editor', array($this, 'editor'), $raw),
            new \Twig_SimpleFunction('sfs_list', array($this, 'listado'), $raw),
            new \Twig_SimpleFunction('sfs_list_select', array($this, 'listado_select'), $raw),
            new \Twig_SimpleFunction('sfs_util', array($this, 'util'), $raw),
            //new \Twig_SimpleFunction('sfs_forms', array($this, 'fForms'), $raw),
            new \Twig_SimpleFunction('sfs_field_list', array($this, 'fList'), $raw),
            new \Twig_SimpleFunction('sfs_field_image', array($this, 'fImage'), $raw),
            new \Twig_SimpleFunction('sfs_field_imagenes', array($this, 'fImagenes'), $raw),
            new \Twig_SimpleFunction('sfs_entity_data', array($this, 'fEntity'), $raw),
            new \Twig_SimpleFunction('sfs_entity_query', array($this, 'fEntityQuery'), $raw),
            new \Twig_SimpleFunction('sfs_field_search', array($this, 'fSearch'), $raw),
            new \Twig_SimpleFunction('sfs_field_uploader', array($this, 'fUploader'), $raw),
            new \Twig_SimpleFunction('sfs_field_option', array($this, 'fOption'), $raw),
            new \Twig_SimpleFunction('sfs_field_entities', array($this, 'fEntities'), $raw),
            new \Twig_SimpleFunction('array_mix', array($this, 'arrayMix')),
            new \Twig_SimpleFunction('sfs_granted', array($this, 'entityGranted')),
            new \Twig_SimpleFunction('role_granted', array($this, 'roleGranted')),
            new \Twig_SimpleFunction('granted', array($this, 'granted')),
            new \Twig_SimpleFunction('token', array($this, 'token')),
            new \Twig_SimpleFunction('get_doctrine', array($this, 'getDoctrine')),
        );
    }
    public function getDoctrine(){
        return $this->doctrine;
    }

    public function fEntity($p) {
        $entity = \Utils::getParam($p, "entity", "");
        $label = \Utils::getParam($p, "label", "");
        $id = \Utils::getParam($p, "id", "id");
        $conds = \Utils::getParam($p, "conds", array());
        if($id === "null"){
            $id = null;
        }
        if($label === "null"){
            $label = null;
        }
        return \Acme\SFSBundle\Controller\FieldController::getEntityData($this->doctrine, $entity, $label, $id, $conds);
    }
    public function fEntityQuery($p) {
        return \Acme\SFSBundle\Controller\FieldController::getEntityQuery($this->doctrine, $p);
    }

    public function fEntities() {
        return $this->renderController("AcmeSFSBundle:Field:fieldEntities", array());
    }

    public function fOption($params) {
        return $this->renderController("AcmeSFSBundle:Field:fieldOption", $params);
    }

    public function fUploader($params) {
        return $this->renderController("AcmeSFSBundle:Uploader:uploader", $params);
    }

    public function fImage($params) {
        return $this->renderController("AcmeSFSBundle:Field:fieldImage", $params);
    }

     public function fList($params) {
         return $this->renderController("AcmeSFSBundle:Field:fieldList", $params);
     }

    public function fImagenes($params) {
        return $this->renderController("AcmeSFSBundle:Utils:imagenes", $params);
    }

    public function fSearch($params) {
        return $this->renderController("AcmeSFSBundle:Field:fieldSearch", $params);
    }

    public function util($util, $params) {
        return $this->renderController("AcmeSFSBundle:Utils:$util", $params);
    }

    public function editor($params) {
        return $this->renderController("AcmeSFSBundle:Schema:editor", $params);
    }

    public function listado($params) {
        return $this->renderController("AcmeSFSBundle:Schema:list", $params);
    }
    public function listado_select($params) {
        return $this->renderController("AcmeSFSBundle:Schema:listselect", $params);
    }

    public function entityGranted($bundle, $entity, $roles, $single_roles = array()) {
        $user = $this->security->getToken()->getUser();
        return \Acme\SFSBundle\Entity\SFSAccounts::entityGranted($user, $bundle, $entity, $roles, $single_roles);
    }

    public function roleGranted($roles) {
        //return $this->entityGranted("", "", array(), $roles);
        $user = $this->security->getToken()->getUser();
        return \Acme\SFSBundle\Entity\SFSAccounts::entityGranted($user, "", "", array(), $roles);
    }

    public function granted($roles) {
        $user = $this->security->getToken()->getUser();
        return \Acme\SFSBundle\Entity\SFSAccounts::granted($user, $roles);
    }

    public function isAssoc($ar) {
        return \Utils::isAssocArray($ar);
    }
    public function arrayMix($ar, $ar2) {
        $var_ar = $ar;
        foreach($ar2 as $k => $v){
            $var_ar[$k] = $v;
        }
        return $var_ar;
    }

    public function inArray($val, $array) {
        if (!is_array($array))
            return false;
        foreach ($array as $value) {
            if ($value === $val) {
                return true;
            }
        }
        return false;
    }
    public function token($size = 10) {
        return \Utils::generateRandomPass($size);
    }

    public function getFilters() {
        return array(
            new \Twig_SimpleFilter('md5', array($this, 'md5Crypt')),
            new \Twig_SimpleFilter('hash', array($this, 'md5EntityCrypt')),
            //new \Twig_SimpleFilter('hash_plus', array($this, 'md5EntityCryptPlus')),
            new \Twig_SimpleFilter('imgur', array($this, 'imgur')),
            new \Twig_SimpleFilter('friendly_time', array($this, 'friendly_time')),
            new \Twig_SimpleFilter('encrypt', array($this, 'encrypt')),
            new \Twig_SimpleFilter('decrypt', array($this, 'decrypt')),
        );
    }

    /**
     * Returns an encrypted & utf8-encoded
     */
    public static function encrypt($pure_string, $encryption_key) {
        return \Encrypt::rijndaelEncrypt($pure_string, $encryption_key);
    }

    /**
     * Returns decrypted original string
     */
    public static function decrypt($encrypted_string, $encryption_key) {
        return \Encrypt::rijndaelDecrypt($encrypted_string, $encryption_key);
    }

    public static function md5EntityCrypt($id, $bundle, $entity, $plus = "") {
        return \Encrypt::md5EntityCrypt($id, $bundle, $entity, $plus);
    }

    //public static function md5EntityCryptPlus($id, $bundle, $entity, $plus) {
    //    return \Encrypt::md5EntityCrypt($id, $bundle, $entity, $plus);
    //}

    public function friendly_time($time) {
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("Utils");
        $cls = \ReflectionClass("DateTime");
        if (!$cls->isInstance((object) $time)) {
            \Utils::getFriendlyTime($time);
        }
        return \Utils::getFriendlyTimeFromDatetime($time);
    }

    public function imgur($text) {
        \Acme\SFSBundle\Controller\UtilsController::includeSFSUtil("ImgurImage");
        $imgur = new \ImgurImage($text);
        return $imgur;
    }

    public function md5Crypt($text) {
        return md5($text);
    }

    public function getName() {
        return 'app_extension';
    }

}
