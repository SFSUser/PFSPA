<?php

/* AcmeSiteBundle:Web:home.html.twig */
class __TwigTemplate_e37995c493a6bfa7beddf06e98c01004ed52a9f6f6cb735b1d86750490cd1330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'title_spacer' => array($this, 'block_title_spacer'),
            'body' => array($this, 'block_body'),
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
        echo "Hermanos
";
    }

    // line 5
    public function block_title_spacer($context, array $blocks = array())
    {
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <style>
    </style>
    <div class=\"www-header\" style=\"background-image: linear-gradient(to bottom, transparent, white), url(/img/asis.jpg);\">
        <div class=\"col-md-2\">
            <img style=\"max-height: 180px;\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/logo.png"), "html", null, true);
        echo "\"/>
        </div>
        <div class=\"col-md-10\">
            <span>Provincia Franciscana de San Pablo Apóstol</span>
            <p>
                ";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Segment:index", array("identifier" => "OFM_main_descripcion", "type" => "textarea")));
        echo "
            </p>
        </div>
    </div>
    <div class=\"www-section sty-box-overflow-auto sty-box-text-center\">
        <div class=\"col-md-4\">
            ";
        // line 23
        echo "            <b>Mesa del señor</b><br>
            La mesa del Señor nace de la necesidad de que los hermanos del mundo colaboren en la construcción y propuesta del reino de Dios.<br>
            <a target=\"_blank\" href=\"http://mesadelsenor.co\" type=\"button\" class=\"btn btn-warning\">Mas información...</a>
        </div>
        <div class=\"col-md-4\">
            <b>Fraternidades</b><br>
            Estamos ubicados en varios departamentos del país en zonas marginales, conozca aqui donde estamos ubicados.
            <button type=\"button\" href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("url_fraternidades");
        echo "\" class=\"btn btn-warning\">Mas información...</button>
        </div>
        <div class=\"col-md-4\">
            <b>¿Quienes somos?</b><br>
            Conozca más sobre nuestra provinciay su historia.
            <button type=\"button\" class=\"btn btn-warning\">Mas información...</button>
        </div>
    </div>
    <div class=\"sty-box-overflow-auto sty-box-margin-10\">
        <div class=\"col-md-4\">
            <a class=\"twitter-timeline\" data-lang=\"es\" data-height=\"400\" href=\"https://twitter.com/Pontifex_es\">Tweets by Pontifex_es</a> <script async src=\"//platform.twitter.com/widgets.js\" charset=\"utf-8\"></script>
        </div>

        <div class=\"col-md-8\">
            <div class=\"sheet-art sty-box-section sty-box-padding-5\">
                <center>
                    <h3>Noticias recientes</h3>
                </center>

                ";
        // line 50
        echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sliders/CSS3FluidParallaxSlideshow/css/style.css"), "html", null, true);
        echo "\" />
                <script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sliders/CSS3FluidParallaxSlideshow/js/modernizr.custom.04022.js"), "html", null, true);
        echo "\"></script>
                <div class=\"sp-slideshow\">
                    ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, $this->getContext($context, "data"))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 54
            echo "                        <input id=\"button-";
            echo twig_escape_filter($this->env, $this->getContext($context, "item"), "html", null, true);
            echo "\" type=\"radio\" name=\"radio-set\" class=\"sp-selector-";
            echo twig_escape_filter($this->env, $this->getContext($context, "item"), "html", null, true);
            echo "\" ";
            if (($this->getContext($context, "item") == 1)) {
                echo "checked=\"checked\" ";
            }
            echo "/>
                        <label for=\"button-";
            // line 55
            echo twig_escape_filter($this->env, $this->getContext($context, "item"), "html", null, true);
            echo "\" class=\"button-label-";
            echo twig_escape_filter($this->env, $this->getContext($context, "item"), "html", null, true);
            echo "\"></label>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, $this->getContext($context, "data"))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 58
            echo "                        <label for=\"button-";
            echo twig_escape_filter($this->env, $this->getContext($context, "item"), "html", null, true);
            echo "\" class=\"sp-arrow sp-a";
            echo twig_escape_filter($this->env, $this->getContext($context, "item"), "html", null, true);
            echo "\"></label>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                    <div class=\"sp-content\">
                        <div class=\"sp-parallax-bg\"></div>
                        <ul class=\"sp-slider clearfix\">
                            ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 64
            echo "                                <li>
                                    ";
            // line 65
            $context["url"] = null;
            // line 66
            echo "                                    ";
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "imagenes_all")))) {
                // line 67
                echo "                                        ";
                $context["url"] = $this->getAttribute($this->getAttribute($this->getContext($context, "item"), "imagenes_random"), "large_thumbnail");
                // line 68
                echo "                                    ";
            } elseif ($this->getAttribute($this->getContext($context, "item", true), "descripcion_first_media", array(), "any", true, true)) {
                // line 69
                echo "                                        ";
                $context["url"] = $this->getAttribute($this->getContext($context, "item"), "descripcion_first_media");
                // line 70
                echo "                                    ";
            }
            // line 71
            echo "                                    ";
            if ((!(null === $this->getContext($context, "url")))) {
                // line 72
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticia_url", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
                echo "\">
                                            <img src=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
                echo "\" style=\"max-height: 300px;padding: 0px;border-radius: 0 0 5px 5px\" class=\"sty-box-shadow\"/>
                                        </a>
                                    ";
            }
            // line 76
            echo "                                    <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "titulo"), "html", null, true);
            echo "</h4>
                                    <p>";
            // line 77
            echo twig_slice($this->env, strip_tags($this->getAttribute($this->getContext($context, "item"), "contenido")), 0, 300);
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticia_url", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
            echo "\">[Leer más]</a></p>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                        </ul>
                    </div><!-- sp-content -->
                </div><!-- sp-slideshow -->

                <div class=\"segment-content\">
                    ";
        // line 85
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Blog:index", array("identifier" => "OFM_home_desc")));
        echo "
                </div>
            </div>
            ";
        // line 88
        if ((!twig_test_empty($this->getContext($context, "fotos")))) {
            // line 89
            echo "                <div class=\"sheet-art sty-box-section sty-box-padding-10\">
                    <center>
                        <h3>Galería de imágenes</h3>
                    </center>
                    <link rel=\"Stylesheet\" type=\"text/css\" href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sliders/DivScroll/css/smoothDivScroll.css"), "html", null, true);
            echo "\" />
                    <script src=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sliders/DivScroll/js/jquery.mousewheel.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
                    <script src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sliders/DivScroll/js/jquery.kinetic.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
                    <script src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sliders/DivScroll/js/jquery.smoothdivscroll-1.3-min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
                    <script type=\"text/javascript\">
                        // Initialize the plugin with no custom options
                        \$(function () {
                            // None of the options are set
                            \$(\"#makeMeScrollable\").smoothDivScroll({
                                autoScrollingMode: \"onStart\"
                            });
                        });
                    </script>
                    <a href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("fotos_url");
            echo "\">
                        <div id=\"makeMeScrollable\" style=\"height: 200px;position: relative;width: 100%;\">
                            ";
            // line 108
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 109
                echo "                                ";
                if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "item"), "imagenes_random"), "predefined"))) {
                    // line 110
                    echo "                                    <img style=\"float: left;height: 200px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "item"), "imagenes_random"), "medium_thumbnail"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "titulo"), "html", null, true);
                    echo "\" id=\"field_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id"), "html", null, true);
                    echo "\" />
                                ";
                }
                // line 112
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                        </div>
                    </a>
                </div>
            ";
        }
        // line 117
        echo "
            ";
        // line 118
        if ((!twig_test_empty($this->getContext($context, "data")))) {
            // line 119
            echo "                <div class=\"sheet-art sty-box-section sty-box-padding-10\">
                    ";
            // line 120
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 121
                echo "                        <div class=\"media\">
                            <a class=\"pull-left\" href=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticia_url", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
                echo "\">
                                ";
                // line 123
                $context["url"] = null;
                // line 124
                echo "                                ";
                if ((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "imagenes_all")))) {
                    // line 125
                    echo "                                    ";
                    $context["url"] = $this->getAttribute($this->getAttribute($this->getContext($context, "item"), "imagenes_random"), "small_square");
                    // line 126
                    echo "                                ";
                } elseif ($this->getAttribute($this->getContext($context, "item", true), "descripcion_first_media", array(), "any", true, true)) {
                    // line 127
                    echo "                                    ";
                    $context["url"] = $this->getAttribute($this->getContext($context, "item"), "descripcion_first_media");
                    // line 128
                    echo "                                ";
                }
                // line 129
                echo "                                ";
                if ((!(null === $this->getContext($context, "url")))) {
                    // line 130
                    echo "                                    <img width=\"90px\" class=\"media-object\" src=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "titulo"), "html", null, true);
                    echo "\">
                                ";
                } else {
                    // line 132
                    echo "                                    <div class=\"media-object\" style=\"width: 90px;height: 90px;\"></div>
                                ";
                }
                // line 134
                echo "                            </a>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\"><a href=\"";
                // line 136
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticia_url", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "titulo"), "html", null, true);
                echo "</a></h4>
                                <p>
                                    <span class=\"label label-danger\">";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "categoria"), "html", null, true);
                echo "</span> <b title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "fecha_formatted"), "html", null, true);
                echo "\">publicado hace ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "fecha_friendly"), "html", null, true);
                echo ": </b>
                                    ";
                // line 139
                echo twig_slice($this->env, strip_tags($this->getAttribute($this->getContext($context, "item"), "contenido")), 0, 250);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticia_url", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
                echo "\">[Leer más]</a>
                                </p>
                            </div>
                        </div>
                        <hr class=\"featurette-divider\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                    <center>
                        <a href=\"";
            // line 146
            echo $this->env->getExtension('routing')->getPath("noticias_url");
            echo "\" class=\"btn btn-info btn-lg\">Ver más noticias</a>
                    </center>
                </div>
            ";
        }
        // line 150
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:Web:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 150,  374 => 146,  371 => 145,  357 => 139,  349 => 138,  342 => 136,  338 => 134,  334 => 132,  326 => 130,  323 => 129,  320 => 128,  317 => 127,  314 => 126,  311 => 125,  308 => 124,  306 => 123,  302 => 122,  299 => 121,  295 => 120,  292 => 119,  290 => 118,  287 => 117,  281 => 113,  275 => 112,  265 => 110,  262 => 109,  258 => 108,  253 => 106,  240 => 96,  236 => 95,  232 => 94,  228 => 93,  222 => 89,  220 => 88,  214 => 85,  207 => 80,  196 => 77,  191 => 76,  185 => 73,  180 => 72,  177 => 71,  174 => 70,  171 => 69,  168 => 68,  165 => 67,  162 => 66,  160 => 65,  157 => 64,  153 => 63,  148 => 60,  137 => 58,  132 => 57,  122 => 55,  111 => 54,  107 => 53,  102 => 51,  97 => 50,  75 => 30,  66 => 23,  57 => 16,  49 => 11,  43 => 7,  40 => 6,  35 => 5,  28 => 3,);
    }
}
