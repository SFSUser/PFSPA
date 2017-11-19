<?php

/* AcmeWebBundle:Sections:noticia.html.twig */
class __TwigTemplate_cf57c96f336a32e5d95f29ce446ad8df638fa780ec83746ef1e0f831d43def46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeWebBundle:Default:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'component' => array($this, 'block_component'),
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "titulo"), "html", null, true);
        echo "
";
    }

    // line 5
    public function block_component($context, array $blocks = array())
    {
        echo "  
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/plugins/fotorama/fotorama.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/plugins/fotorama/fotorama.js"), "html", null, true);
        echo "\"></script>

    <div class=\"page-header\">
        <a class=\"btn btn-danger pull-right\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("noticias_url");
        echo "\">Más noticias</a>
        <h2>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "titulo"), "html", null, true);
        echo "</h2>
        <span class=\"label label-danger\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "categoria"), "html", null, true);
        echo "</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "fecha_formatted"), "html", null, true);
        echo " - <span  title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "fecha_formatted"), "html", null, true);
        echo "\">hace ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "fecha_friendly"), "html", null, true);
        echo "</span>
        <div class=\"pull-right\">
            ";
        // line 14
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Utils:modify", array("bundle" => "SFS", "entity" => "SFSNoticias", "id" => $this->getAttribute($this->getContext($context, "data"), "id"))), array());
        // line 15
        echo "        </div>
    </div>

    ";
        // line 18
        if ((!twig_test_empty($this->getAttribute($this->getContext($context, "data"), "imagenes_all")))) {
            // line 19
            echo "        <center>
            <div class=\"fotorama sh\" data-width=\"700\" data-ratio=\"700/467\" data-max-width=\"100%\"  data-nav=\"thumbs\">
                ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "imagenes_all"));
            foreach ($context['_seq'] as $context["_key"] => $context["imagen"]) {
                // line 22
                echo "                    ";
                // line 23
                echo "                    <img style=\"width:100%\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "titulo"), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "imagen"), "original"), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imagen'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            </div>
        </center>
        <hr class=\"featurette-divider\"/>
    ";
        }
        // line 29
        echo "    <div class=\"segment-content\">";
        echo $this->getAttribute($this->getContext($context, "data"), "contenido");
        echo "</div>
    <hr class=\"featurette-divider\"/>
    <b>Visitas: </b> <span>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "visitas"), "html", null, true);
        echo "</span>
    <b>Tags: </b> 
    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "tags_array"));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 34
            echo "        <span class=\"label label-default\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "x"), "html", null, true);
            echo "</span>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    
    
    <div class=\"sty-box-overflow-auto\">
        <div class=\"pull-right\">
            ";
        // line 40
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Utils:social", array("share_link" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getUri", array(), "method"), "site_link" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getHost", array(), "method"), "description" => $this->getAttribute($this->getContext($context, "data"), "titulo"))));
        // line 42
        echo "
        </div>
    </div>
    <hr class=\"featurette-divider\"/>
    <div>
        ";
        // line 47
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Utils:facebookcomments", array("url" => $this->env->getExtension('routing')->getPath("noticia_url", array("id" => $this->getAttribute($this->getContext($context, "data"), "id"))))));
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeWebBundle:Sections:noticia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 47,  141 => 42,  139 => 40,  133 => 36,  124 => 34,  120 => 33,  115 => 31,  109 => 29,  103 => 25,  92 => 23,  90 => 22,  86 => 21,  82 => 19,  80 => 18,  75 => 15,  73 => 14,  62 => 12,  58 => 11,  54 => 10,  48 => 7,  32 => 3,  29 => 2,  49 => 8,  44 => 6,  42 => 8,  39 => 5,  36 => 6,  31 => 4,  28 => 3,);
    }
}
