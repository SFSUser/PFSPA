<?php

/* AcmeSFSBundle:Utils:facebook_comments.html.twig */
class __TwigTemplate_5c23dde76ae872a76b74f2edc52b8b31fd650484d3cf048ffdb94ad270a6123f extends Twig_Template
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
        echo "
<div class=\"fb-comments\" data-href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
        echo "\" data-width=\"100%\" data-numposts=\"5\" data-colorscheme=\"light\"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = \"//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=641444865880778&version=v2.0\";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>";
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Utils:facebook_comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 3,  38 => 4,  56 => 9,  50 => 8,  30 => 5,  24 => 4,  21 => 3,  19 => 2,  148 => 47,  141 => 42,  139 => 40,  133 => 36,  124 => 34,  120 => 33,  115 => 31,  109 => 29,  103 => 25,  92 => 23,  90 => 22,  86 => 21,  82 => 19,  80 => 18,  75 => 15,  73 => 14,  62 => 12,  58 => 11,  54 => 10,  48 => 7,  32 => 3,  29 => 2,  49 => 8,  44 => 6,  42 => 5,  39 => 7,  36 => 6,  31 => 4,  28 => 3,);
    }
}
