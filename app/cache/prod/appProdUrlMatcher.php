<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // url_account
        if ($pathinfo === '/account') {
            return array (  '_controller' => 'Acme\\WebBundle\\Controller\\DefaultController::userAction',  '_route' => 'url_account',);
        }

        // web_sitemap_url
        if ($pathinfo === '/web/sitemap') {
            return array (  '_format' => 'xml',  '_controller' => 'Acme\\WebBundle\\Controller\\DefaultController::sitemapAction',  '_route' => 'web_sitemap_url',);
        }

        // url_stats
        if (0 === strpos($pathinfo, '/secured') && preg_match('#^/secured/(?P<id>[^/]++)/stats$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'url_stats')), array (  '_controller' => 'Acme\\WebBundle\\Controller\\DefaultController::statsAction',));
        }

        // url_missing
        if ($pathinfo === '/missing') {
            return array (  '_controller' => 'Acme\\WebBundle\\Controller\\DefaultController::missingAction',  '_route' => 'url_missing',);
        }

        if (0 === strpos($pathinfo, '/sec')) {
            if (0 === strpos($pathinfo, '/secured')) {
                // url_mensajes
                if ($pathinfo === '/secured/mensajes') {
                    return array (  '_controller' => 'Acme\\WebBundle\\Controller\\DefaultController::mensajesAction',  '_route' => 'url_mensajes',);
                }

                // url_accounts
                if ($pathinfo === '/secured/accounts') {
                    return array (  '_controller' => 'Acme\\WebBundle\\Controller\\DefaultController::accountsAction',  '_route' => 'url_accounts',);
                }

                // url_roles
                if ($pathinfo === '/secured/roles') {
                    return array (  '_controller' => 'Acme\\WebBundle\\Controller\\DefaultController::rolesAction',  '_route' => 'url_roles',);
                }

                // url_events
                if ($pathinfo === '/secured/events') {
                    return array (  '_controller' => 'Acme\\WebBundle\\Controller\\DefaultController::eventsAction',  '_route' => 'url_events',);
                }

            }

            if (0 === strpos($pathinfo, '/seccion')) {
                // url_seccion
                if (preg_match('#^/seccion/(?P<seccion>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'url_seccion')), array (  '_controller' => 'Acme\\WebBundle\\Controller\\DefaultController::seccionAction',));
                }

                // url_seccion_element
                if (0 === strpos($pathinfo, '/secciones') && preg_match('#^/secciones/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'url_seccion_element')), array (  '_controller' => 'Acme\\WebBundle\\Controller\\DefaultController::seccionAction',));
                }

            }

        }

        // adminlogin
        if ($pathinfo === '/admin/login') {
            return array (  '_controller' => 'Acme\\WebBundle\\Controller\\DefaultController::loginAction',  '_route' => 'adminlogin',);
        }

        if (0 === strpos($pathinfo, '/se')) {
            if (0 === strpos($pathinfo, '/secured')) {
                // add_editor
                if (preg_match('#^/secured/(?P<bundle>[^/]++)/(?P<entity>[^/]++)/add$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_editor')), array (  '_controller' => 'Acme\\WebBundle\\Controller\\DefaultController::listpageAction',));
                }

                // list_editor
                if (preg_match('#^/secured/(?P<bundle>[^/]++)/(?P<entity>[^/]++)/list$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_editor')), array (  '_controller' => 'Acme\\WebBundle\\Controller\\DefaultController::listpageAction',));
                }

            }

            // url_serial
            if ($pathinfo === '/serial') {
                return array (  '_controller' => 'Acme\\WebBundle\\Controller\\DefaultController::serialAction',  '_route' => 'url_serial',);
            }

            // url_serials
            if ($pathinfo === '/secured/seriales') {
                return array (  '_controller' => 'Acme\\WebBundle\\Controller\\DefaultController::serialsAction',  '_route' => 'url_serials',);
            }

        }

        if (0 === strpos($pathinfo, '/noticias')) {
            // noticia_url
            if (preg_match('#^/noticias/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'noticia_url')), array (  '_controller' => 'Acme\\WebBundle\\Controller\\NoticiasController::noticiaAction',));
            }

            // noticias_url
            if ($pathinfo === '/noticias') {
                return array (  '_controller' => 'Acme\\WebBundle\\Controller\\NoticiasController::noticiasAction',  '_route' => 'noticias_url',);
            }

            // acme_web_noticias_noticias
            if (rtrim($pathinfo, '/') === '/noticias') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'acme_web_noticias_noticias');
                }

                return array (  '_controller' => 'Acme\\WebBundle\\Controller\\NoticiasController::noticiasAction',  '_route' => 'acme_web_noticias_noticias',);
            }

        }

        // ajax_noticias_url
        if ($pathinfo === '/ajax/noticias') {
            return array (  '_controller' => 'Acme\\WebBundle\\Controller\\NoticiasController::ajaxnoticiasAction',  '_route' => 'ajax_noticias_url',);
        }

        // contacto_url
        if ($pathinfo === '/contacto') {
            return array (  '_controller' => 'Acme\\WebBundle\\Controller\\PortafolioController::contactoAction',  '_route' => 'contacto_url',);
        }

        if (0 === strpos($pathinfo, '/acerca')) {
            // acerca_id_url
            if (preg_match('#^/acerca(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acerca_id_url')), array (  'id' => 0,  '_controller' => 'Acme\\WebBundle\\Controller\\PortafolioController::acercaAction',));
            }

            // acerca_url
            if ($pathinfo === '/acerca') {
                return array (  'id' => 0,  '_controller' => 'Acme\\WebBundle\\Controller\\PortafolioController::acercaAction',  '_route' => 'acerca_url',);
            }

        }

        if (0 === strpos($pathinfo, '/portafolio')) {
            // portafolio_ca_url
            if (0 === strpos($pathinfo, '/portafolio/seccion') && preg_match('#^/portafolio/seccion(?:/(?P<ca>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'portafolio_ca_url')), array (  'id' => 0,  'ca' => 0,  '_controller' => 'Acme\\WebBundle\\Controller\\PortafolioController::indexAction',));
            }

            // portafolio_id_url
            if (preg_match('#^/portafolio(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'portafolio_id_url')), array (  'id' => 0,  'ca' => 0,  '_controller' => 'Acme\\WebBundle\\Controller\\PortafolioController::indexAction',));
            }

            // portafolio_url
            if ($pathinfo === '/portafolio') {
                return array (  'id' => 0,  'ca' => 0,  '_controller' => 'Acme\\WebBundle\\Controller\\PortafolioController::indexAction',  '_route' => 'portafolio_url',);
            }

        }

        if (0 === strpos($pathinfo, '/biblioteca')) {
            // url_biblioteca
            if ($pathinfo === '/biblioteca') {
                return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\BibliotecaController::bibliotecaLoginAction',  '_route' => 'url_biblioteca',);
            }

            // url_biblioteca_book
            if (preg_match('#^/biblioteca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'url_biblioteca_book')), array (  '_controller' => 'Acme\\SiteBundle\\Controller\\BibliotecaController::bookAction',));
            }

        }

        // acme_site_default_path
        if ($pathinfo === '/paths') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::pathAction',  '_route' => 'acme_site_default_path',);
        }

        // consult_relations
        if ($pathinfo === '/consultar/usuario') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::consultaAction',  '_route' => 'consult_relations',);
        }

        // acme_site_default_test2
        if ($pathinfo === '/testing2') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::test2Action',  '_route' => 'acme_site_default_test2',);
        }

        // url_nosotros
        if (0 === strpos($pathinfo, '/nosotros') && preg_match('#^/nosotros(?:/(?P<seccion>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'url_nosotros')), array (  'seccion' => 'nosotros',  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::nosotrosAction',));
        }

        // url_calendario
        if ($pathinfo === '/calendario') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::calendarioAction',  '_route' => 'url_calendario',);
        }

        // url_fraternidad
        if (0 === strpos($pathinfo, '/fraternidad') && preg_match('#^/fraternidad/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'url_fraternidad')), array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::fraternidadAction',));
        }

        // url_hermano
        if (0 === strpos($pathinfo, '/hermano') && preg_match('#^/hermano/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'url_hermano')), array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::hermanoAction',));
        }

        // ajax_hermanos_url
        if ($pathinfo === '/ajax/hermanos') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::ajaxnoticiasAction',  '_route' => 'ajax_hermanos_url',);
        }

        // url_fraternidades
        if ($pathinfo === '/fraternidades') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::fraternidadesAction',  '_route' => 'url_fraternidades',);
        }

        // url_hermanos
        if ($pathinfo === '/hermanos') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::hermanosAction',  '_route' => 'url_hermanos',);
        }

        // acme_site_default_test
        if ($pathinfo === '/testing') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::testAction',  '_route' => 'acme_site_default_test',);
        }

        // url_main
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'url_main');
            }

            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::indexAction',  '_route' => 'url_main',);
        }

        // url_render
        if ($pathinfo === '/services/render') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::renderAction',  '_route' => 'url_render',);
        }

        // url_empresas
        if ($pathinfo === '/empresas') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::empresasAction',  '_route' => 'url_empresas',);
        }

        // url_usuarios
        if ($pathinfo === '/usuarios') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::usuariosAction',  '_route' => 'url_usuarios',);
        }

        // url_datos_empresa
        if ($pathinfo === '/empresa/datos') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::datosempresaAction',  '_route' => 'url_datos_empresa',);
        }

        // url_productos_servicios
        if ($pathinfo === '/productos_servicios') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::productosserviciosAction',  '_route' => 'url_productos_servicios',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // url_cotizaciones
            if ($pathinfo === '/cotizaciones') {
                return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::cotizacionesAction',  '_route' => 'url_cotizaciones',);
            }

            // url_certificados
            if ($pathinfo === '/certificados') {
                return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::certificadosAction',  '_route' => 'url_certificados',);
            }

        }

        // url_facturacion
        if ($pathinfo === '/facturacion') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::facturacionAction',  '_route' => 'url_facturacion',);
        }

        // url_especialistas
        if ($pathinfo === '/especialistas') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::especialistasAction',  '_route' => 'url_especialistas',);
        }

        // url_sgi_procesos
        if ($pathinfo === '/sgi/procesos') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::sgiprocesosAction',  '_route' => 'url_sgi_procesos',);
        }

        // url_notificaciones_cartera
        if ($pathinfo === '/notificaciones/cartera') {
            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::carteraAction',  '_route' => 'url_notificaciones_cartera',);
        }

        if (0 === strpos($pathinfo, '/desarrollo')) {
            // url_desarrollo_historial
            if ($pathinfo === '/desarrollo/historial') {
                return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::desarrollohistorialAction',  '_route' => 'url_desarrollo_historial',);
            }

            // url_desarrollo_bugs
            if ($pathinfo === '/desarrollo/bugs') {
                return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\DefaultController::desarrollobugsAction',  '_route' => 'url_desarrollo_bugs',);
            }

        }

        if (0 === strpos($pathinfo, '/muro')) {
            // url_muro_del
            if ($pathinfo === '/muro/del') {
                return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\MuroController::muroDelAction',  '_route' => 'url_muro_del',);
            }

            // url_muro_add
            if ($pathinfo === '/muro/add') {
                return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\MuroController::muroAddAction',  '_route' => 'url_muro_add',);
            }

            // url_muro_get
            if ($pathinfo === '/muro/get') {
                return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\MuroController::muroGetAction',  '_route' => 'url_muro_get',);
            }

            // url_muro
            if ($pathinfo === '/muro') {
                return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\MuroController::muroLoginAction',  '_route' => 'url_muro',);
            }

            // url_muro_post
            if (preg_match('#^/muro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'url_muro_post')), array (  '_controller' => 'Acme\\SiteBundle\\Controller\\MuroController::postAction',));
            }

        }

        if (0 === strpos($pathinfo, '/u')) {
            // url_uploads_backup
            if ($pathinfo === '/uploads/backup') {
                return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\ServicesController::uploadsbackupAction',  '_route' => 'url_uploads_backup',);
            }

            // url_usuarios_imagenes_backup
            if ($pathinfo === '/usuarios/imagenes/backup') {
                return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\ServicesController::imagesbackupAction',  '_route' => 'url_usuarios_imagenes_backup',);
            }

        }

        // acme_site_services_imgur
        if (rtrim($pathinfo, '/') === '/backup/img') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'acme_site_services_imgur');
            }

            return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\ServicesController::imgurAction',  '_route' => 'acme_site_services_imgur',);
        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // url_usuario_login
            if ($pathinfo === '/usuario/login') {
                return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\UsuarioController::usuarioLoginAction',  '_route' => 'url_usuario_login',);
            }

            // url_usuario
            if ($pathinfo === '/usuario') {
                return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\UsuarioController::usuarioAction',  '_route' => 'url_usuario',);
            }

            // url_usuario_data
            if ($pathinfo === '/usuario/data') {
                return array (  '_controller' => 'Acme\\SiteBundle\\Controller\\UsuarioController::usuarioDataAction',  '_route' => 'url_usuario_data',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admincheck
            if ($pathinfo === '/admin/check') {
                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\AdminController::checkAction',  '_route' => 'admincheck',);
            }

            // adminlogout
            if ($pathinfo === '/admin/logout') {
                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\AdminController::logoutsAction',  '_route' => 'adminlogout',);
            }

        }

        // create_blogs
        if ($pathinfo === '/secured/blogs/crear') {
            return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\BlogController::createAction',  '_route' => 'create_blogs',);
        }

        // captcha
        if ($pathinfo === '/captcha') {
            return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\CaptchaController::formAction',  '_route' => 'captcha',);
        }

        // generate_captcha
        if ($pathinfo === '/generatecaptcha') {
            return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\CaptchaController::generateAction',  '_route' => 'generate_captcha',);
        }

        // check_captcha
        if ($pathinfo === '/checkcaptcha') {
            return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\CaptchaController::checkAction',  '_route' => 'check_captcha',);
        }

        if (0 === strpos($pathinfo, '/getcomment')) {
            // get_comment
            if (rtrim($pathinfo, '/') === '/getcomment') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'get_comment');
                }

                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\CommentController::getcommentAction',  '_route' => 'get_comment',);
            }

            // get_comment_ant
            if (rtrim($pathinfo, '/') === '/getcommentant') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'get_comment_ant');
                }

                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\CommentController::getcommentantAction',  '_route' => 'get_comment_ant',);
            }

        }

        // comments_index
        if (0 === strpos($pathinfo, '/comments') && preg_match('#^/comments/(?P<hilo>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'comments_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comments_index')), array (  '_controller' => 'Acme\\SFSBundle\\Controller\\CommentController::indexAction',));
        }

        // add_comment
        if (rtrim($pathinfo, '/') === '/addcomment') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'add_comment');
            }

            return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\CommentController::addcommentAction',  '_route' => 'add_comment',);
        }

        // remove_comment
        if (rtrim($pathinfo, '/') === '/secured/removecomment') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'remove_comment');
            }

            return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\CommentController::removecommentAction',  '_route' => 'remove_comment',);
        }

        // vote_comment
        if (rtrim($pathinfo, '/') === '/votecomment') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'vote_comment');
            }

            return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\CommentController::votecommentAction',  '_route' => 'vote_comment',);
        }

        if (0 === strpos($pathinfo, '/contact')) {
            // contact_box
            if ($pathinfo === '/contact_box') {
                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\ContactController::contactAction',  '_route' => 'contact_box',);
            }

            // contacts
            if ($pathinfo === '/contacts') {
                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\ContactController::indexAction',  '_route' => 'contacts',);
            }

        }

        if (0 === strpos($pathinfo, '/secured/getcontact')) {
            // get_contactlist
            if ($pathinfo === '/secured/getcontactlist') {
                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\ContactController::getlistAction',  '_route' => 'get_contactlist',);
            }

            // get_contact
            if ($pathinfo === '/secured/getcontact') {
                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\ContactController::getAction',  '_route' => 'get_contact',);
            }

        }

        // add_contact
        if ($pathinfo === '/addcontact') {
            return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\ContactController::addAction',  '_route' => 'add_contact',);
        }

        // remove_contact
        if ($pathinfo === '/secured/removecontact') {
            return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\ContactController::removeAction',  '_route' => 'remove_contact',);
        }

        // url_logged
        if ($pathinfo === '/is_login') {
            return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\DefaultController::isloggedaAction',  '_route' => 'url_logged',);
        }

        if (0 === strpos($pathinfo, '/create_')) {
            // _create_schema
            if ($pathinfo === '/create_schema') {
                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\DefaultController::createschemaAction',  '_route' => '_create_schema',);
            }

            // acme_sfs_default_createdb
            if ($pathinfo === '/create_entities') {
                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\DefaultController::createdbAction',  '_route' => 'acme_sfs_default_createdb',);
            }

            // _create_db
            if ($pathinfo === '/create_db') {
                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\DefaultController::createdbAction',  '_route' => '_create_db',);
            }

        }

        // _install_assets
        if ($pathinfo === '/install_assets') {
            return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\DefaultController::assetsAction',  '_route' => '_install_assets',);
        }

        // openshift_url
        if ($pathinfo === '/openshift') {
            return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\DefaultController::mysqlAction',  '_route' => 'openshift_url',);
        }

        if (0 === strpos($pathinfo, '/secured')) {
            // remove_editor
            if ($pathinfo === '/secured/editor/remove') {
                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\EditorController::removeAction',  '_route' => 'remove_editor',);
            }

            // url_ajaxeditor
            if ($pathinfo === '/secured/ajax/editor') {
                return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\EditorController::ajaxeditorAction',  '_route' => 'url_ajaxeditor',);
            }

        }

        // url_entityajax
        if ($pathinfo === '/ajax/editor') {
            return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\EditorController::ajaxeditorAction',  '_route' => 'url_entityajax',);
        }

        if (0 === strpos($pathinfo, '/services/search')) {
            // url_search_input
            if ($pathinfo === '/services/search/form') {
                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\FieldController::fieldSearchAction',  '_route' => 'url_search_input',);
            }

            // url_search_service
            if ($pathinfo === '/services/search/autocomplete') {
                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\FieldController::fieldSearchServiceAction',  '_route' => 'url_search_service',);
            }

        }

        // manage_user_info
        if (rtrim($pathinfo, '/') === '/manageuserinfo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'manage_user_info');
            }

            return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\LoginController::proccesAction',  '_route' => 'manage_user_info',);
        }

        // user_login
        if (rtrim($pathinfo, '/') === '/login') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user_login');
            }

            return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\LoginController::loginAction',  '_route' => 'user_login',);
        }

        // user_register
        if (rtrim($pathinfo, '/') === '/register') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'user_register');
            }

            return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\LoginController::registerAction',  '_route' => 'user_register',);
        }

        if (0 === strpos($pathinfo, '/user')) {
            // user_register_action
            if (rtrim($pathinfo, '/') === '/user/register') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_register_action');
                }

                return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\LoginController::registerUserAction',  '_route' => 'user_register_action',);
            }

            // user_login_action
            if (rtrim($pathinfo, '/') === '/user/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_login_action');
                }

                return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\LoginController::loginUserAction',  '_route' => 'user_login_action',);
            }

            // user_check_action
            if (rtrim($pathinfo, '/') === '/user/check') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_check_action');
                }

                return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\LoginController::checkUserAction',  '_route' => 'user_check_action',);
            }

        }

        if (0 === strpos($pathinfo, '/s')) {
            // url_simplemail
            if ($pathinfo === '/secured/services/simplemail') {
                return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\MailController::simplemailAction',  '_route' => 'url_simplemail',);
            }

            if (0 === strpos($pathinfo, '/schema')) {
                // schema_editor
                if (rtrim($pathinfo, '/') === '/schema/editor') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'schema_editor');
                    }

                    return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\SchemaController::editorAction',  '_route' => 'schema_editor',);
                }

                if (0 === strpos($pathinfo, '/schema/select/list')) {
                    // schema_selectlist
                    if ($pathinfo === '/schema/select/list') {
                        return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\SchemaController::listselectAction',  '_route' => 'schema_selectlist',);
                    }

                    // get_schema_selectlist
                    if ($pathinfo === '/schema/select/list/get') {
                        return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\SchemaController::ajaxlistselectAction',  '_route' => 'get_schema_selectlist',);
                    }

                }

                if (0 === strpos($pathinfo, '/schema/list')) {
                    // schema_list
                    if ($pathinfo === '/schema/list') {
                        return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\SchemaController::listAction',  '_route' => 'schema_list',);
                    }

                    // get_schema_list
                    if ($pathinfo === '/schema/list/get') {
                        return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\SchemaController::ajaxlistAction',  '_route' => 'get_schema_list',);
                    }

                }

                if (0 === strpos($pathinfo, '/schema/ajax')) {
                    // schema_ajaxjoineditor
                    if ($pathinfo === '/schema/ajax/join/editor') {
                        return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\SchemaController::ajaxjoineditorAction',  '_route' => 'schema_ajaxjoineditor',);
                    }

                    if (0 === strpos($pathinfo, '/schema/ajax/editor')) {
                        // schema_ajaxeditor
                        if ($pathinfo === '/schema/ajax/editor') {
                            return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\SchemaController::ajaxeditorAction',  '_route' => 'schema_ajaxeditor',);
                        }

                        // schema_ajaxeditor_multiple
                        if ($pathinfo === '/schema/ajax/editor/multiple') {
                            return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\SchemaController::ajaxemultipleditorAction',  '_route' => 'schema_ajaxeditor_multiple',);
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/se')) {
                // create_segment
                if ($pathinfo === '/secured/segment/create') {
                    return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\SegmentController::createAction',  '_route' => 'create_segment',);
                }

                if (0 === strpos($pathinfo, '/serial')) {
                    // url_serialrevisar
                    if ($pathinfo === '/serial/estado') {
                        return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\SerialController::revisarAction',  '_route' => 'url_serialrevisar',);
                    }

                    // url_serialgenerar
                    if ($pathinfo === '/serial/generar') {
                        return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\SerialController::generarAction',  '_route' => 'url_serialgenerar',);
                    }

                    // url_serialcheck
                    if ($pathinfo === '/serial/check') {
                        return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\SerialController::checkAction',  '_route' => 'url_serialcheck',);
                    }

                }

                if (0 === strpos($pathinfo, '/secured')) {
                    // stats
                    if (rtrim($pathinfo, '/') === '/secured/stats') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'stats');
                        }

                        return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\StatsController::indexAction',  '_route' => 'stats',);
                    }

                    // get_stats
                    if (rtrim($pathinfo, '/') === '/secured/getstats') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'get_stats');
                        }

                        return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\StatsController::getstatsAction',  '_route' => 'get_stats',);
                    }

                }

            }

        }

        // test
        if (rtrim($pathinfo, '/') === '/test') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'test');
            }

            return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\TestController::indexAction',  '_route' => 'test',);
        }

        // uploacer_download_file
        if (0 === strpos($pathinfo, '/uploader/download') && preg_match('#^/uploader/download/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'uploacer_download_file')), array (  '_controller' => 'Acme\\SFSBundle\\Controller\\UploaderController::redirectuploadAction',));
        }

        if (0 === strpos($pathinfo, '/service/uploader')) {
            // url_uploaderzip
            if ($pathinfo === '/service/uploader/zip') {
                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\UploaderController::zipAction',  '_route' => 'url_uploaderzip',);
            }

            // url_uploadercounter
            if ($pathinfo === '/service/uploader/count') {
                return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\UploaderController::countAction',  '_route' => 'url_uploadercounter',);
            }

            // url_uploaderremove
            if ($pathinfo === '/service/uploader/remove') {
                return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\UploaderController::removeAction',  '_route' => 'url_uploaderremove',);
            }

        }

        // url_uploader
        if ($pathinfo === '/uploader') {
            return array (  'service' => false,  'remove_secure' => false,  'compact' => false,  'disable_delete' => false,  '_controller' => 'Acme\\SFSBundle\\Controller\\UploaderController::uploaderAction',  '_route' => 'url_uploader',);
        }

        if (0 === strpos($pathinfo, '/service/upload')) {
            // url_uploaderget
            if ($pathinfo === '/service/uploader/get') {
                return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\UploaderController::getAction',  '_route' => 'url_uploaderget',);
            }

            // url_uploadfiles
            if ($pathinfo === '/service/upload') {
                return array (  '_format' => 'json',  '_controller' => 'Acme\\SFSBundle\\Controller\\UploaderController::uploadAction',  '_route' => 'url_uploadfiles',);
            }

        }

        // imgur_url_upload
        if ($pathinfo === '/imgur') {
            return array (  '_controller' => 'Acme\\SFSBundle\\Controller\\UtilsController::imgurAction',  '_route' => 'imgur_url_upload',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
