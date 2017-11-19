<?php

/* AcmeWebBundle:Sections:editor.html.twig */
class __TwigTemplate_f7fc39c71b504b8ac37a45428ddcba387a26ee2d145fed1dc20a491ae0190e54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeWebBundle:Default:base.html.twig");

        $this->blocks = array(
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
    public function block_component($context, array $blocks = array())
    {
        echo "  
    ";
        // line 3
        if (($this->getContext($context, "redirect") != "")) {
            // line 4
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "redirect"), "html", null, true);
            echo "\" class=\"btn btn-danger pull-right\">Volver a la pagina anterior</a>
    ";
        }
        // line 6
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Schema:list", array("bundle" => $this->getContext($context, "bundle"), "entity" => $this->getContext($context, "entity"))));
        echo "
    ";
        // line 7
        if (($this->getContext($context, "id") > 0)) {
            // line 8
            echo "        <script>
            \$(function(){
                SchemaList_";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, "bundle"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
            echo ".editElement(";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo ");
            });
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "AcmeWebBundle:Sections:editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  46 => 7,  41 => 6,  35 => 4,  33 => 3,  52 => 10,  47 => 12,  45 => 11,  39 => 7,  36 => 6,  31 => 4,  28 => 2,);
    }
}
