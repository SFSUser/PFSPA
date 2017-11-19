<?php

/* AcmeSiteBundle:Web:login.html.twig */
class __TwigTemplate_f637ea621ac53950aae9f74628f403eed007d6adf0161f1474f22951ee65efa6 extends Twig_Template
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
        echo "    Iniciar sesión
";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <div style=\"height: 100px\"></div>
    <center>
        <div class=\"panel panel-default\" style=\"max-width: 400px;\">
            <div class=\"panel-heading\" style=\"text-align: left\">Inicio de sesión</div>
            <div class=\"panel-body\">
                ";
        // line 12
        $this->displayBlock('component', $context, $blocks);
        // line 13
        echo "            </div>
        </div>
    </center>
";
    }

    // line 12
    public function block_component($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("component", $context, $blocks);
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:Web:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  48 => 13,  46 => 12,  39 => 7,  36 => 6,  31 => 4,  28 => 3,);
    }
}
