<?php

/* AcmeSiteBundle:Web:editor.html.twig */
class __TwigTemplate_8d93d7590e81f10bcbfa82c444b31bef7fc86bede08c7ea504d55206da9117ff extends Twig_Template
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
        echo "    Editor
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"www-header\" style=\"height: 200px; background-image: linear-gradient(to bottom, transparent, white),  url(/img/editor.jpeg)\">
        <span>Editor de contenidos</span>
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
        return "AcmeSiteBundle:Web:editor.html.twig";
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
