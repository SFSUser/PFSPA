<?php

/* AcmeSiteBundle:OFM:hermanos_query.html.twig */
class __TwigTemplate_7029032079362629c521264a75914713ae29e7b7a69eda418c97eda63959a180 extends Twig_Template
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
        // line 2
        echo $this->getContext($context, "buttons");
        echo "
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 4
            echo "    <div class=\"hermano sheet-art\">
        <div style=\"background-image: url(";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "imagen"), "html", null, true);
            echo ")\" class=\"foto\"></div>
        ";
            // line 7
            echo "        <b>Fray ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "x"), "nombre") . " ") . $this->getAttribute($this->getContext($context, "x"), "apellidos")), "html", null, true);
            echo "</b><br>
        <i>";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "cargo"), "html", null, true);
            echo " - <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "cargoprov"), "html", null, true);
            echo "</b></i><br>
        <p>";
            // line 9
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getContext($context, "x"), "biografia"), 0, 100), "html", null, true);
            echo " [...] <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("url_hermano", array("id" => $this->getAttribute($this->getContext($context, "x"), "id"))), "html", null, true);
            echo "\"> Más información </a></p>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        if (twig_test_empty($this->getContext($context, "data"))) {
            // line 13
            echo "    <h2>No se encontraron resultados</h2>
";
        }
        // line 15
        echo $this->getContext($context, "buttons");
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:OFM:hermanos_query.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  58 => 13,  56 => 12,  45 => 9,  39 => 8,  34 => 7,  30 => 5,  27 => 4,  23 => 3,  19 => 2,);
    }
}
