<?php

/* AcmeSFSBundle:Contact:form.html.twig */
class __TwigTemplate_d2b0703e054eeb095d5c235538eb510e38c4f6b69463dbb186c9dff074458529 extends Twig_Template
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
        echo "<script>
    \$(function() {
        \$(\"#contact_form\").submit(function(e) {
            e.preventDefault();
            submitContact();
        });
    });
    function submitContact() {
        setElementDisableState(\"#contact_form\", false);
        \$.ajax({
            url: \"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("add_contact");
        echo "\",
            data: {
                \"categoria\": \"Empresa\",
                \"contenido\": makeMessage(),
                \"titulo\": \$(\"#titulo_msg\").html()
            },
            success: function() {
                \$(\"#contact_box\").hide();
                \$(\"#contact_success_box\").show();
                setElementDisableState(\"#contact_form\", true);
            },
            error: function() {
                setElementDisableState(\"#contact_form\", true);
            }
        });
        return false;
    }
    function resend() {
        \$(\"#contact_box\").show();
        \$(\"#contact_success_box\").hide();
    }
    function makeMessage() {
        var title = \$(\"#titulo_msg\");
        var my_templ = \$(\"#contact_template\");
        \$(\"#contact_form\").find(\"textarea, input\").each(function() {
            var id = \$(this).attr(\"id\");
            var value = \$(this).val();
            \$(title).find(\".\" + id).html(value);
            \$(my_templ).find(\".\" + id).html(value);
        });
        return \$(my_templ).html();
    }
</script>


<div class=\"contact-form sty-box-smuth sty-box-text-center sty-box-padding-10\" style=\"max-width: 400px;\">
    <div id=\"contact_box\">
        ";
        // line 49
        $this->env->loadTemplate("AcmeSFSBundle:Contact:template.html.twig")->display($context);
        // line 50
        echo "    </div>

    <div style=\"display: none;\" id=\"contact_success_box\">
        <img height=\"100\" src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/logo.png"), "html", null, true);
        echo "\" align=\"middle\"/><br>
        <span class=\"sty-label-blue sty-font-20\">Correcto: Gracias por contactarnos</span>
        <br>
        <a href=\"javascript:resend()\" class=\"btn btn-info\">Volver a enviar mensaje</a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Contact:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 53,  71 => 49,  19 => 2,  73 => 50,  69 => 30,  60 => 24,  56 => 23,  48 => 21,  44 => 19,  52 => 22,  47 => 12,  45 => 11,  39 => 7,  36 => 8,  31 => 12,  28 => 4,);
    }
}
