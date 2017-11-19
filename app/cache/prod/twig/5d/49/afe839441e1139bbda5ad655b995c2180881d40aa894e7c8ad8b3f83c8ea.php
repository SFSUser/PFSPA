<?php

/* AcmeSiteBundle:Web:noticia.html.twig */
class __TwigTemplate_5d49afe839441e1139bbda5ad655b995c2180881d40aa894e7c8ad8b3f83c8ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'component' => array($this, 'block_component'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getContext($context, "template_parent"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "\tProvincia de San Pablo Ap�stol
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"www-header\" style=\"height: 200px; background-image: linear-gradient(to bottom, transparent, white),  url(/img/editor.jpeg)\">
        <span>Noticia</span>
    </div>
    <div class=\"fixer sheet-art sty-box-padding-5\">
        ";
        // line 11
        $this->displayBlock('component', $context, $blocks);
        // line 12
        echo "    </div>
";
    }

    // line 11
    public function block_component($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("component", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:Web:noticia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 11,  47 => 12,  45 => 11,  39 => 7,  36 => 6,  31 => 4,  28 => 3,);
    }
}
