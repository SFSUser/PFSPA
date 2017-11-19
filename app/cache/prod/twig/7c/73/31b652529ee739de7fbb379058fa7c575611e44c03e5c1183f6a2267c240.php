<?php

/* AcmeSiteBundle:Web:header.html.twig */
class __TwigTemplate_7c7331b652529ee739de7fbb379058fa7c575611e44c03e5c1183f6a2267c240 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div style=\"padding:10px;position:absolute; width:100%\">
    <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"/\">PFSPA</a>
            </div>
            
            ";
        // line 15
        $context["section"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route"), "method"), $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "attributes"), "get", array(0 => "_route_params"), "method"));
        // line 16
        echo "
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li ";
        // line 20
        if (("/" == $this->getContext($context, "section"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/\">Inicio <span class=\"sr-only\">(current)</span></a></li>
                    <li ";
        // line 21
        if (twig_in_filter("noti", $this->getContext($context, "section"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("noticias_url");
        echo "\">Noticias</a></li>

                    <li  ";
        // line 23
        if ((twig_in_filter("nosotr", $this->getContext($context, "section")) || twig_in_filter("herm", $this->getContext($context, "section")))) {
            echo "class=\"active\"";
        }
        echo " class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Provincia <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("url_nosotros");
        echo "\">Quienes somos</a></li>
                            <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("url_hermanos");
        echo "\">Hermanos</a></li>
                            
                                ";
        // line 31
        echo "                            ";
        // line 32
        echo "                            
                        </ul>
                    </li>
                    ";
        // line 50
        echo "                    <li ";
        if (twig_in_filter("frater", $this->getContext($context, "section"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("url_fraternidades");
        echo "\">Fraternidades</a></li>
                    <li ";
        // line 51
        if (twig_in_filter("contacto", $this->getContext($context, "section"))) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("contacto_url");
        echo "\">Contáctenos</a></li>
                </ul>
                <form class=\"navbar-form navbar-left\">
                    <div class=\"form-group\">
                        <input type=\"text\" class=\"form-control\" placeholder=\"Noticias\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\">Buscar</button>
                </form>
                <ul class=\"nav navbar-nav navbar-right\">
                    ";
        // line 60
        if ((!(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "session"), "get", array(0 => "hermano_id"), "method")))) {
            // line 61
            echo "                        ";
            $context["data"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "session"), "get", array(0 => "hermano_data"), "method");
            // line 62
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><img style=\"max-height: 25px;border-radius: 5px;\" src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "imagen_small_square"), "html", null, true);
            echo "\"/> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "nick"), "html", null, true);
            echo "<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">                                
                                <li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("url_usuario");
            echo "\">Mi perfil</a></li>

                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
            // line 68
            echo $this->env->getExtension('routing')->getPath("url_usuario_login", array("mode" => "redirect"));
            echo "\">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    ";
        } else {
            // line 72
            echo "                        <li style=\"background-color: #C6E8C4\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("url_usuario");
            echo "\">Iniciar sesión</a></li>
                        ";
        }
        // line 74
        echo "                        ";
        if ((!$this->env->getExtension('app_extension')->roleGranted("ADMIN"))) {
            // line 75
            echo "                        <li ><a href=\"";
            echo $this->env->getExtension('routing')->getPath("adminlogin");
            echo "\">Iniciar sesión</a></li>
                        ";
        } else {
            // line 77
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Sesión  - ";
            // line 78
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")), "html", null, true);
            echo "<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\">Mi cuenta</a></li>
                                <li><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_editor", array("bundle" => "Site", "entity" => "Fraternidad")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> Fraternidades</a></li>
                                <li><a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_editor", array("bundle" => "Site", "entity" => "Hermanos")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> Hermanos</a></li>
                                <li><a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_editor", array("bundle" => "Site", "entity" => "Posts")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> Posts</a></li>
                                <li><a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_editor", array("bundle" => "Web", "entity" => "WebNoticias")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> Noticias</a></li>

                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
            // line 87
            echo $this->env->getExtension('routing')->getPath("adminlogout");
            echo "\">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    ";
        }
        // line 91
        echo "                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>

<div class=\"sty-box-padding-10\" style=\"position: fixed;bottom: 0;left:0;right: 0;\">

</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:Web:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 87,  167 => 83,  163 => 82,  153 => 78,  144 => 75,  141 => 74,  135 => 72,  122 => 65,  115 => 63,  109 => 61,  107 => 60,  91 => 51,  82 => 50,  77 => 32,  75 => 31,  37 => 16,  132 => 53,  128 => 68,  124 => 51,  116 => 49,  112 => 62,  100 => 45,  95 => 44,  93 => 43,  90 => 42,  38 => 8,  26 => 4,  21 => 3,  19 => 1,  193 => 50,  187 => 15,  182 => 9,  151 => 9,  139 => 7,  136 => 54,  131 => 52,  123 => 51,  120 => 50,  113 => 49,  88 => 29,  81 => 28,  74 => 24,  70 => 27,  62 => 16,  58 => 23,  54 => 13,  50 => 14,  45 => 10,  42 => 11,  30 => 5,  27 => 1,  383 => 148,  376 => 144,  373 => 143,  359 => 137,  351 => 136,  344 => 134,  339 => 131,  335 => 130,  327 => 128,  324 => 127,  321 => 126,  319 => 125,  314 => 124,  312 => 123,  307 => 122,  305 => 121,  301 => 120,  298 => 119,  294 => 118,  291 => 117,  289 => 116,  286 => 115,  280 => 111,  274 => 110,  264 => 108,  261 => 107,  257 => 106,  252 => 104,  239 => 94,  235 => 93,  231 => 92,  227 => 91,  221 => 87,  219 => 86,  213 => 83,  206 => 78,  195 => 75,  190 => 74,  184 => 91,  179 => 70,  176 => 8,  173 => 68,  171 => 84,  166 => 66,  164 => 65,  159 => 81,  157 => 63,  154 => 62,  150 => 77,  145 => 8,  134 => 56,  129 => 55,  119 => 53,  108 => 47,  104 => 46,  99 => 49,  94 => 48,  66 => 26,  57 => 15,  49 => 21,  43 => 20,  40 => 9,  35 => 15,  28 => 3,);
    }
}
