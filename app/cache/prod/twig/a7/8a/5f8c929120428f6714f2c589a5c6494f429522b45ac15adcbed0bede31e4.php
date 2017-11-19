<?php

/* AcmeSiteBundle:OFM:hermanos.html.twig */
class __TwigTemplate_a78a5f8c929120428f6714f2c589a5c6494f429522b45ac15adcbed0bede31e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeWebBundle:Default:base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'title_spacer' => array($this, 'block_title_spacer'),
            'body' => array($this, 'block_body'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_title_spacer($context, array $blocks = array())
    {
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <style>
        .foto {
            width: 100%;
            height: 200px;
            background-size: cover;
        }
        .hermano {
            display: inline-block;
            height: 370px;
            overflow: hidden;
            margin: 5px;
            padding: 5px;
            max-width: 200px;
        }
    </style>
    <div class=\"www-header\" style=\"background-image: linear-gradient(to bottom, transparent, white), url(/img/pfspa_2017.jpg)\">
        <span>                
            ";
        // line 25
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Segment:index", array("identifier" => "OFM_nosotros_title", "type" => "text")));
        echo "
        </span>
        <p>                
            ";
        // line 28
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Segment:index", array("identifier" => "OFM_nosotros_descripcion", "type" => "textarea")));
        echo "
        </p>
    </div>
    <script>
\t\tfunction getListPage(v){
\t\t\tvar find = \$(\"#find_input\").val();
\t\t\t
\t\t\t\$(\"#hermanos_container\").html(\"\");
\t\t\tHermanos.setLoading(true);
\t\t\t\$.ajax({
                    url: \"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("ajax_hermanos_url");
        echo "\",
                    data: {find: find, paginator_page: v},
                    success: function (e) {
                        \$(\"#hermanos_container\").html(e);
                    },
                    error: function (e) {
                        console.log(e);
                    },
                    complete: function () {
                        Hermanos.setLoading(false);
                    }
                });
\t\t}
        var Hermanos = {
\t\t\t
            get: function (find) {
                \$(\"#hermanos_container\").html(\"\");
                this.setLoading(true);
                \$.ajax({
                    url: \"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("ajax_hermanos_url");
        echo "\",
                    data: {find: find},
                    success: function (e) {
                        \$(\"#hermanos_container\").html(e);
                    },
                    error: function (e) {
                        console.log(e);
                    },
                    complete: function () {
                        Hermanos.setLoading(false);
                    }
                });
            },
            setLoading: function (e) {
                if (e) {
                    \$(\"#loading\").show();
                } else {
                    \$(\"#loading\").hide();
                }
            }
        };
        \$(function () {
            var find = \$(\"#find_input\").val();
            Hermanos.get(find);
            \$(\"#hermanos_form\").submit(function (e) {
                e.preventDefault();
                var find = \$(\"#find_input\").val();
                Hermanos.get(find);
            });
        });
    </script>


    <div class=\"www-gradient-page  sty-box-overflow-auto\" style=\"min-height: 800px;\">

        <div class=\"sty-box-overflow-auto fixer sheet-art sty-box-padding-5 sty-box-radius-10\">

            <div class=\"col-md-8\">
                <b>Ingrese el nombre, apellido o cargo:</b>
            </div>
            <div class=\"col-md-4\"> 
                <form id=\"hermanos_form\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <input id=\"find_input\" placeholder=\"Buscar hermanos...\" name=\"find\" type=\"text\" class=\"form-control\">
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-default\" type=\"submit\">Buscar</button>
                            </span> 
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <center>
            <div id=\"hermanos_container\" class=\"sty-box-overflow-auto\"></div>
            <div style=\"display: none;\" id=\"loading\" class=\"sty-box-padding-5 sty-box-margin-bottom-10\">
                <div>
                    <center>
                        <img style=\"border-radius: 100px;\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/img/loading.gif"), "html", null, true);
        echo "\"/>
                        <h3>Buscando....</h3>
                        <p>Por favor, espere los resultados.</p>
                    </center>
                </div>
            </div>
        </center>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:OFM:hermanos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 115,  103 => 57,  81 => 38,  68 => 28,  62 => 25,  43 => 8,  40 => 7,  35 => 6,  30 => 4,);
    }
}
