<?php

/* AcmeSiteBundle:OFM:nosotros.html.twig */
class __TwigTemplate_03a76495529cec9af329582367d6d0e24f87bd32cf0080120b6acd6241bfc78f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeWebBundle:Default:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'title_spacer' => array($this, 'block_title_spacer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeWebBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    Nuestra provincia: ";
        echo twig_escape_filter($this->env, $this->getContext($context, "seccion"), "html", null, true);
        echo "
";
    }

    // line 8
    public function block_title_spacer($context, array $blocks = array())
    {
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    <style>
        .foto {
            width: 100%;
            height: 200px;
            background-size: cover;
        }
        .hermano {
            display: inline-block;
            height: 370px;
            overflow: hidden;
            margin: 5px;
            padding: 5px;
            max-width: 200px;
        }
    </style>
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 400px;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .fraternidad-box{
            border-bottom-style: solid;
            border-bottom-width: 1px;
            border-bottom-color: gainsboro;
            padding: 5px;

        }
    </style>
    <div class=\"www-header\" style=\"background-image: linear-gradient(to bottom, transparent, white), url(/img/pfspa_2017.jpg)\">
        <span>                
            ";
        // line 47
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Segment:index", array("identifier" => "OFM_nosotros_title", "type" => "text")));
        echo "
        </span>
        <p>                
            ";
        // line 50
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Segment:index", array("identifier" => "OFM_nosotros_descripcion", "type" => "textarea")));
        echo "
        </p>
    </div>
    <script>
        \$(function () {
            \$(\"[section=";
        // line 55
        echo twig_escape_filter($this->env, $this->getContext($context, "seccion"), "html", null, true);
        echo "]\").addClass(\"active\");
        });
    </script>
    <div class=\"www-gradient-page  sty-box-overflow-auto\" style=\"min-height: 800px;\">
        <div class=\"col-md-4\">
            <div class=\"list-group\">
                <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("url_nosotros", array("seccion" => "nosotros"));
        echo "\" section=\"nosotros\" class=\"list-group-item\">Quienes somos</a>
                <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("url_nosotros", array("seccion" => "historia"));
        echo "\" section=\"historia\" class=\"list-group-item\">Historia</a>
                <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("url_nosotros", array("seccion" => "estatutos"));
        echo "\" section=\"estatutos\" class=\"list-group-item\">Estatutos</a>
            </div>
        </div>
        <div class=\"col-md-8\">
            <div class=\"sheet-art sty-box-padding-10\">
                ";
        // line 68
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Blog:index", array("identifier" => ("OFM_" . $this->getContext($context, "seccion")))));
        echo "
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:OFM:nosotros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 68,  118 => 63,  114 => 62,  110 => 61,  101 => 55,  93 => 50,  87 => 47,  48 => 10,  45 => 9,  40 => 8,  33 => 6,  30 => 5,);
    }
}
