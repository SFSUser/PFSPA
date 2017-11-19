<?php

/* AcmeSiteBundle:OFM:muro_get.html.twig */
class __TwigTemplate_58d28ce8db4d3d53ccc89633daec2563f90027644d9fd46886e231ab4adb407a extends Twig_Template
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
        echo "
";
        // line 2
        echo $this->getContext($context, "buttons");
        echo "
      ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 4
            echo "        <div id=\"post_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "id"), "html", null, true);
            echo "\" class=\"post\">
          <img style=\"width:50px;border-radius:50px;\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "x"), "refhermano"), "imagen"), "html", null, true);
            echo "\"/>
          <a target=\"_blank\" href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("url_hermano", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "x"), "refhermano"), "id"))), "html", null, true);
            echo "\">@";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "x"), "refhermano"), "nick"), "html", null, true);
            echo "</a>
          <b>";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "titulo"), "html", null, true);
            echo "</b>
          ";
            // line 8
            if (($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "hermano_id"), "method") == $this->getAttribute($this->getContext($context, "x"), "hermano")))) {
                // line 9
                echo "          <button style=\"float:right;margin-left: 10px;\" class=\"btn btn-danger\" onclick=\"Muro.remove(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "id"), "html", null, true);
                echo ");\">Eliminar</button>
          ";
            }
            // line 11
            echo "           <a style=\"float:right;margin-left: 10px;\" class=\"btn btn-info\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("url_muro_post", array("id" => $this->getAttribute($this->getContext($context, "x"), "id"))), "html", null, true);
            echo "\">Abrir</a>

          <i style=\"float:right;\">";
            // line 13
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "fecha"), "Y/m/d - H:m:s"), "html", null, true);
            echo "</i>
          <div>
            ";
            // line 15
            echo $this->getAttribute($this->getContext($context, "x"), "descripcionFinal");
            echo "
          </div>

          <i style=\"float:right;\"><b>Tags: </b>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "tags"), "html", null, true);
            echo "</i>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      ";
        echo $this->getContext($context, "buttons");
        echo "
";
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:OFM:muro_get.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  74 => 18,  68 => 15,  63 => 13,  57 => 11,  51 => 9,  49 => 8,  45 => 7,  39 => 6,  35 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
