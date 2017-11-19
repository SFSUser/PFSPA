<?php

/* AcmeSFSBundle:Utils:headers.html.twig */
class __TwigTemplate_1931c34f52ea4211fca42222d4c5230e2a36f3a4ae7c1bd5e35e5dc16e73f16f extends Twig_Template
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
        if ((($this->getContext($context, "header") == "jquery") || ($this->getContext($context, "header") == ""))) {
            // line 3
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/jquery/jquery-ui.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <script src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/jquery/jquery-1.11.1.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    <script src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/jquery/jquery-ui.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        }
        // line 7
        echo "
";
        // line 8
        if ((($this->getContext($context, "header") == "bootstrap") || ($this->getContext($context, "header") == ""))) {
            // line 9
            echo "    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
            echo "\">
    <link rel=\"stylesheet\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/plugins/bootstrap/css/bootstrap-theme.min.css"), "html", null, true);
            echo "\">
    <script src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
            echo "\"></script>
";
        }
        // line 13
        echo "
";
        // line 15
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/plugins/sweetalert-master/dist/sweetalert-dev.js"), "html", null, true);
        echo "\"></script>
\t<link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/plugins/sweetalert-master/dist/sweetalert.css"), "html", null, true);
        echo "\">
\t<script>
\t\t//Reemplazar el alert feooooo
\t\t//Pendiente reemplazar el confirm y el prompt!
\t\talert = swal;
\t\tsconfirm = function(title, msg, evt){
\t\t\tswal({   
\t\t\t\ttitle: title,   
\t\t\t\ttext: msg,   
\t\t\t\ttype: \"warning\",  
\t\t\t\tshowCancelButton: true,   
\t\t\t\tconfirmButtonColor: \"#DD6B55\",   
\t\t\t\tconfirmButtonText: \"Confirmar\",   
\t\t\t\tcancelButtonText: \"No, cancelar\",   
\t\t\t\tcloseOnConfirm: true,   
\t\t\t\tcloseOnCancel: true
\t\t\t}, function(isConfirm){   
\t\t\t\tif(evt !== undefined){
\t\t\t\t\tevt(isConfirm);
\t\t\t\t} else {
\t\t\t\t\tconsole.log(\"Confirmado: \" + (isConfirm ? \"SI\" : \"NO\"));
\t\t\t\t}
\t\t\t});
\t\t}
\t</script>
";
        // line 42
        echo "
";
        // line 43
        if ((($this->getContext($context, "header") == "site") || ($this->getContext($context, "header") == ""))) {
            // line 44
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/website.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/css/styles.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/animations/animations.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <script src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/animations/animations.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    <script src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/js/imgur.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    <script src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/js/messages.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    <script src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/js/actions.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    <script src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/js/md5.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    <script src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/js/utils.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    <script src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/js/sfs.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
    <script src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/js/editor.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
";
        }
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Utils:headers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 53,  128 => 52,  124 => 51,  116 => 49,  112 => 48,  100 => 45,  95 => 44,  93 => 43,  90 => 42,  38 => 8,  26 => 4,  21 => 3,  19 => 2,  193 => 50,  187 => 15,  182 => 9,  151 => 9,  139 => 7,  136 => 54,  131 => 52,  123 => 51,  120 => 50,  113 => 49,  88 => 29,  81 => 28,  74 => 24,  70 => 23,  62 => 16,  58 => 19,  54 => 13,  50 => 14,  45 => 10,  42 => 11,  30 => 5,  27 => 1,  383 => 148,  376 => 144,  373 => 143,  359 => 137,  351 => 136,  344 => 134,  339 => 131,  335 => 130,  327 => 128,  324 => 127,  321 => 126,  319 => 125,  314 => 124,  312 => 123,  307 => 122,  305 => 121,  301 => 120,  298 => 119,  294 => 118,  291 => 117,  289 => 116,  286 => 115,  280 => 111,  274 => 110,  264 => 108,  261 => 107,  257 => 106,  252 => 104,  239 => 94,  235 => 93,  231 => 92,  227 => 91,  221 => 87,  219 => 86,  213 => 83,  206 => 78,  195 => 75,  190 => 74,  184 => 71,  179 => 70,  176 => 8,  173 => 68,  171 => 67,  166 => 66,  164 => 65,  159 => 7,  157 => 63,  154 => 62,  150 => 61,  145 => 8,  134 => 56,  129 => 55,  119 => 53,  108 => 47,  104 => 46,  99 => 49,  94 => 48,  66 => 22,  57 => 15,  49 => 11,  43 => 7,  40 => 9,  35 => 7,  28 => 3,);
    }
}
