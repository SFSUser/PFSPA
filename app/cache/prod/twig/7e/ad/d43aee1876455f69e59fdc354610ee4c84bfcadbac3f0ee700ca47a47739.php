<?php

/* AcmeSFSBundle:Utils:modify.html.twig */
class __TwigTemplate_7eadd43aee1876455f69e59fdc354610ee4c84bfcadbac3f0ee700ca47a47739 extends Twig_Template
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
        if ($this->env->getExtension('app_extension')->roleGranted("ROLE_ADMIN")) {
            // line 3
            echo "<div>
    <a class=\"button\" href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("add_editor", array("bundle" => $this->getContext($context, "bundle"), "entity" => $this->getContext($context, "entity"))), "html", null, true);
            echo "?id=";
            echo twig_escape_filter($this->env, $this->getContext($context, "index"), "html", null, true);
            echo "\">
        <img style=\"width:16px\" src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/img_icons/edit.png"), "html", null, true);
            echo "\" align=\"top\"/>";
            if ($this->getContext($context, "label")) {
                echo " Editar";
            }
            // line 6
            echo "    </a>
    <button class=\"button\" onclick=\"removeEntityElement('";
            // line 7
            echo $this->env->getExtension('routing')->getPath("remove_editor");
            echo "', '";
            echo twig_escape_filter($this->env, $this->getContext($context, "entity_path"), "html", null, true);
            echo "', ";
            echo twig_escape_filter($this->env, $this->getContext($context, "index"), "html", null, true);
            echo ", '#";
            echo twig_escape_filter($this->env, $this->getContext($context, "element"), "html", null, true);
            echo "', '/";
            echo "')\">
        <img style=\"width:16px\" src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/img_icons/remove.png"), "html", null, true);
            echo "\" align=\"top\"/>";
            if ($this->getContext($context, "label")) {
                echo " Eliminar";
            }
            // line 9
            echo "    </button>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Utils:modify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  50 => 8,  30 => 5,  24 => 4,  21 => 3,  19 => 2,  148 => 47,  141 => 42,  139 => 40,  133 => 36,  124 => 34,  120 => 33,  115 => 31,  109 => 29,  103 => 25,  92 => 23,  90 => 22,  86 => 21,  82 => 19,  80 => 18,  75 => 15,  73 => 14,  62 => 12,  58 => 11,  54 => 10,  48 => 7,  32 => 3,  29 => 2,  49 => 8,  44 => 6,  42 => 8,  39 => 7,  36 => 6,  31 => 4,  28 => 3,);
    }
}
