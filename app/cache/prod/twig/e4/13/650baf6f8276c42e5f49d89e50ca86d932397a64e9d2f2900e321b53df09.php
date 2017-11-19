<?php

/* AcmeWebBundle:Sections:noticias.html.twig */
class __TwigTemplate_e413650baf6f8276c42e5f49d89e50ca86d932397a64e9d2f2900e321b53df09 extends Twig_Template
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

    // line 2
    public function block_component($context, array $blocks = array())
    {
        echo "  
    <script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/plugins/GridALicious/jquery.grid-a-licious.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var categoria = \"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "category"), "method"), "html", null, true);
        echo "\";
        var find = \"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "find"), "method"), "html", null, true);
        echo "\";
        var page = 1;
        \$(function() {
            //\$(\".cats:first\").click();
            reload();
            \$(\"#finder\").submit(function(e) {
                e.preventDefault();
                find = \$(\"#find_input\").val();
                reload();
            });
        });

        function getListPage(id) {
            page = id;
            reload();
        }

        function setCategory(cat) {
            categoria = \$(cat).attr(\"tag\");
            \$(\".cats\").removeClass(\"active\");
            \$(cat).addClass(\"active\");
            reload();
        }
        function reload() {
            \$(\"#loading\").show();
            \$(\"#noticias_container\").css(\"opacity\", \"0.5\");
            \$.ajax({
                data: {
                    category: categoria,
                    find: find,
                    paginator_page: page,
                    paginator_count: 30
                },
                url: '";
        // line 39
        echo $this->env->getExtension('routing')->getPath("ajax_noticias_url");
        echo "',
                type: 'post',
                success: function(d) {
                    \$(\"#noticias_container\").html(d);
                    \$(\"#loading\").hide();
                    \$(\"#noticias_container\").css(\"opacity\", \"1\");
                },
                error: function(d) {
                    \$(\"#noticias_container\").css(\"opacity\", \"1\");
                }
            });
        }
    </script>
    <div class=\"sty-box-overflow-auto sty-box-margin-top-10\" style=\"min-height: 700px;\">
        <div class=\"col-md-3\">
            <div>
                <form id=\"finder\" action=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("noticias_url");
        echo "\" role=\"search\">
                    <div class=\"input-group\">
                        <input id=\"find_input\" placeholder=\"Escriba el texto a buscar...\" name=\"find\" type=\"text\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "find"), "method"), "html", null, true);
        echo "\" class=\"form-control\">
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-default\" type=\"submit\">Buscar</button>
                        </span> 
                    </div>
                    <!-- /input-group -->
                </form>
            </div>
            <div class=\"list-group sty-box-margin-top-5\">
                <a onclick=\"setCategory(this)\" tag=\"\" class=\"cats list-group-item ";
        // line 66
        if (("" == $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "category"), "method"))) {
            echo "active";
        }
        echo "\">Todas las noticias</a>
                ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 68
            echo "                    <a identifier=\"";
            echo twig_escape_filter($this->env, strtr($this->getContext($context, "item"), array("% %" => "_")), "html", null, true);
            echo "\" onclick=\"setCategory(this)\" tag=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "item"), "html", null, true);
            echo "\" class=\"cats list-group-item ";
            if (($this->getContext($context, "item") == $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "get", array(0 => "category"), "method"))) {
                echo "active";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "item"), "html", null, true);
            echo "</a>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "            </div>
        </div>
        <div class=\"col-md-8\">
            <div id=\"loading\" class=\"sheet-art sty-box-padding-5 sty-box-margin-bottom-10\">
                <div>
                    <center>
                        <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/img/loading.gif"), "html", null, true);
        echo "\"/>
                        <h3>Buscando noticias....</h3>
                        <p>Por favor, espere los resultados.</p>
                    </center>
                </div>
            </div>
            <div id=\"noticias_container\"></div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeWebBundle:Sections:noticias.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 76,  141 => 70,  124 => 68,  120 => 67,  114 => 66,  102 => 57,  97 => 55,  78 => 39,  42 => 6,  38 => 5,  33 => 3,  53 => 11,  47 => 12,  45 => 11,  36 => 6,  31 => 4,  28 => 2,);
    }
}
