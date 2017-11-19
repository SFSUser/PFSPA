<?php

/* AcmeWebBundle:Default:base.html.twig */
class __TwigTemplate_e5a09d1e4d2957672783146ce806073eb90013f6d01187ec42f3fe5687fe9971 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'site_seo' => array($this, 'block_site_seo'),
            'title' => array($this, 'block_title'),
            'title2' => array($this, 'block_title2'),
            'title_spacer' => array($this, 'block_title_spacer'),
            'description' => array($this, 'block_description'),
            'keywords' => array($this, 'block_keywords'),
            'og_type' => array($this, 'block_og_type'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "www_lang"), "html", null, true);
        echo "\" class=\"no-js\">
    <head>
        <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/favicon.png"), "html", null, true);
        echo "\" rel=\"Shortcut Icon\" type=\"image/png\">

        ";
        // line 6
        $this->displayBlock('site_seo', $context, $blocks);
        // line 11
        echo "
        ";
        // line 12
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Utils:header", array("header" => "")));
        echo "

        <meta property=\"og:site_name\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "www_og_site_name"), "html", null, true);
        echo "\"/>
        <meta property=\"og:type\" content=\"";
        // line 15
        $this->displayBlock('og_type', $context, $blocks);
        echo "\"/>
        ";
        // line 19
        echo "        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\"> 
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"> 
        <meta http-equiv=\"content-language\" name=\"\" content=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "www_lang"), "html", null, true);
        echo "\">
        <meta http-equiv=\"\" name=\"copyright\" content=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getContext($context, "www_copyright"), "html", null, true);
        echo "\">
        <meta http-equiv=\"\" name=\"date\" content=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, "www_date"), "html", null, true);
        echo "\">
        <meta http-equiv=\"\" name=\"author\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "www_autor"), "html", null, true);
        echo "\">
        <meta http-equiv=\"\" name=\"robots\" content=\"All\">
        <meta id=\"view_port\" name=\"viewport\" content=\"width=device-width\">

        ";
        // line 28
        try {
            $this->env->loadTemplate("AcmeSiteBundle:Web:headers.html.twig")->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 29
        echo "
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', '";
        // line 43
        echo twig_escape_filter($this->env, $this->getContext($context, "www_ga"), "html", null, true);
        echo "', 'auto');
            ga('send', 'pageview');
        </script>
        <script src= \"http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js\"></script>
    </head>
    <body>
    ";
        // line 49
        try {
            $this->env->loadTemplate("AcmeSiteBundle:Web:header.html.twig")->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 50
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "    ";
        try {
            $this->env->loadTemplate("AcmeSiteBundle:Web:footer.html.twig")->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 52
        echo "</body>
</html>";
    }

    // line 6
    public function block_site_seo($context, array $blocks = array())
    {
        // line 7
        echo "            <title>";
        $this->displayBlock('title', $context, $blocks);
        $this->displayBlock('title2', $context, $blocks);
        echo "</title>
            <meta name=\"description\" content=\"";
        // line 8
        $this->displayBlock('description', $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "www_description"), "html", null, true);
        echo "\">
            <meta name=\"keywords\" content=\"";
        // line 9
        $this->displayBlock('keywords', $context, $blocks);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getContext($context, "www_keywords"), "html", null, true);
        echo " \">
        ";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
    }

    public function block_title2($context, array $blocks = array())
    {
        $this->displayBlock('title_spacer', $context, $blocks);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "www_title"), "html", null, true);
    }

    public function block_title_spacer($context, array $blocks = array())
    {
        echo " - ";
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        echo "ingnova";
    }

    // line 9
    public function block_keywords($context, array $blocks = array())
    {
    }

    // line 15
    public function block_og_type($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getContext($context, "www_og_type"), "html", null, true);
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeWebBundle:Default:base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 50,  187 => 15,  182 => 9,  151 => 9,  139 => 7,  136 => 6,  131 => 52,  123 => 51,  120 => 50,  113 => 49,  88 => 29,  81 => 28,  74 => 24,  70 => 23,  62 => 21,  58 => 19,  54 => 15,  50 => 14,  45 => 12,  42 => 11,  30 => 2,  27 => 1,  383 => 148,  376 => 144,  373 => 143,  359 => 137,  351 => 136,  344 => 134,  339 => 131,  335 => 130,  327 => 128,  324 => 127,  321 => 126,  319 => 125,  314 => 124,  312 => 123,  307 => 122,  305 => 121,  301 => 120,  298 => 119,  294 => 118,  291 => 117,  289 => 116,  286 => 115,  280 => 111,  274 => 110,  264 => 108,  261 => 107,  257 => 106,  252 => 104,  239 => 94,  235 => 93,  231 => 92,  227 => 91,  221 => 87,  219 => 86,  213 => 83,  206 => 78,  195 => 75,  190 => 74,  184 => 71,  179 => 70,  176 => 8,  173 => 68,  171 => 67,  166 => 66,  164 => 65,  159 => 7,  157 => 63,  154 => 62,  150 => 61,  145 => 8,  134 => 56,  129 => 55,  119 => 53,  108 => 52,  104 => 43,  99 => 49,  94 => 48,  66 => 22,  57 => 16,  49 => 11,  43 => 7,  40 => 6,  35 => 4,  28 => 3,);
    }
}
