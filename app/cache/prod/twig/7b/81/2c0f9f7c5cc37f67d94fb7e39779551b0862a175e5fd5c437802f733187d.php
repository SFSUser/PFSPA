<?php

/* AcmeWebBundle:Sections:home.html.twig */
class __TwigTemplate_7b812c0f9f7c5cc37f67d94fb7e39779551b0862a175e5fd5c437802f733187d extends Twig_Template
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

    // line 3
    public function block_component($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeWebBundle:Sections:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 148,  376 => 144,  373 => 143,  359 => 137,  351 => 136,  344 => 134,  339 => 131,  335 => 130,  327 => 128,  324 => 127,  321 => 126,  319 => 125,  314 => 124,  312 => 123,  307 => 122,  305 => 121,  301 => 120,  298 => 119,  294 => 118,  291 => 117,  289 => 116,  286 => 115,  280 => 111,  274 => 110,  264 => 108,  261 => 107,  257 => 106,  252 => 104,  239 => 94,  235 => 93,  231 => 92,  227 => 91,  221 => 87,  219 => 86,  213 => 83,  206 => 78,  195 => 75,  190 => 74,  184 => 71,  179 => 70,  176 => 69,  173 => 68,  171 => 67,  166 => 66,  164 => 65,  159 => 64,  157 => 63,  154 => 62,  150 => 61,  145 => 58,  134 => 56,  129 => 55,  119 => 53,  108 => 52,  104 => 51,  99 => 49,  94 => 48,  66 => 22,  57 => 16,  49 => 11,  43 => 7,  40 => 6,  35 => 5,  28 => 3,);
    }
}
