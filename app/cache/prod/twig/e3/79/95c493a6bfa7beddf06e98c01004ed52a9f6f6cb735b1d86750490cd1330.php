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
            <img height=\"100px\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/mesa_senior.png"), "html", null, true);
        echo "\"><br>
            <b>Mesa del señor</b><br>
            La mesa del Señor nace de la necesidad de que los hermanos del mundo colaboren en la construcción y propuesta del reino de Dios.<br>
            <a target=\"_blank\" href=\"http://mesadelsenor.co\" type=\"button\" class=\"btn btn-warning\">Mas información...</a>
        </div>
        <div class=\"col-md-4\">
            <b>Franciscanos</b><br>
            <button type=\"button\" class=\"btn btn-warning\">Mas información...</button>
        </div>
        <div class=\"col-md-4\">
            <b>Franciscanos</b><br>
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
        // line 48
        echo "                <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sliders/CSS3FluidParallaxSlideshow/css/style.css"), "html", null, true);
        echo "\" />
                <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sliders/CSS3FluidParallaxSlideshow/js/modernizr.custom.04022.js"), "html", null, true);
        echo "\"></script>
                <div class=\"sp-slideshow\">
                    ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, $this->getContext($context, "data"))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
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
            // line 53
            echo twig_escape_filter($this->env, $this->getContext($context, "item"), "html", null, true);
            echo "\" class=\"button-label-";
            echo twig_escape_filter($this->env, $this->getContext($context, "item"), "html", null, true);
            echo "\"></label>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(range(1, twig_length_filter($this->env, $this->getContext($context, "data"))));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
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
        // line 58
        echo "                    <div class=\"sp-content\">
                        <div class=\"sp-parallax-bg\"></div>
                        <ul class=\"sp-slider clearfix\">
                            ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 62
            echo "                                <li>
                                    ";
            // line 63
            $context["url"] = null;
            // line 64
            echo "                                    ";
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "imagenes_all")))) {
                echo " 
                                        ";
                // line 65
                $context["url"] = $this->getAttribute($this->getAttribute($this->getContext($context, "item"), "imagenes_random"), "large_thumbnail");
                // line 66
                echo "                                    ";
            } elseif ($this->getAttribute($this->getContext($context, "item", true), "descripcion_first_media", array(), "any", true, true)) {
                echo " 
                                        ";
                // line 67
                $context["url"] = $this->getAttribute($this->getContext($context, "item"), "descripcion_first_media");
                // line 68
                echo "                                    ";
            }
            // line 69
            echo "                                    ";
            if ((!(null === $this->getContext($context, "url")))) {
                // line 70
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticia_url", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
                echo "\">
                                            <img src=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
                echo "\" style=\"max-height: 300px;padding: 0px;border-radius: 0 0 5px 5px\" class=\"sty-box-shadow\"/>
                                        </a>
                                    ";
            }
            // line 74
            echo "                                    <h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "titulo"), "html", null, true);
            echo "</h4>
                                    <p>";
            // line 75
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
        // line 78
        echo "                        </ul>
                    </div><!-- sp-content -->
                </div><!-- sp-slideshow -->

                <div class=\"segment-content\">
                    ";
        // line 83
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Blog:index", array("identifier" => "OFM_home_desc")));
        echo "
                </div>
            </div>
            ";
        // line 86
        if ((!twig_test_empty($this->getContext($context, "fotos")))) {
            // line 87
            echo "                <div class=\"sheet-art sty-box-section sty-box-padding-10\">
                    <center>
                        <h3>Galería de imágenes</h3>
                    </center>
                    <link rel=\"Stylesheet\" type=\"text/css\" href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sliders/DivScroll/css/smoothDivScroll.css"), "html", null, true);
            echo "\" />
                    <script src=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sliders/DivScroll/js/jquery.mousewheel.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
                    <script src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("sliders/DivScroll/js/jquery.kinetic.min.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
                    <script src=\"";
            // line 94
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
            // line 104
            echo $this->env->getExtension('routing')->getPath("fotos_url");
            echo "\">
                        <div id=\"makeMeScrollable\" style=\"height: 200px;position: relative;width: 100%;\">
                            ";
            // line 106
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "fotos"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 107
                echo "                                ";
                if ((!$this->getAttribute($this->getAttribute($this->getContext($context, "item"), "imagenes_random"), "predefined"))) {
                    // line 108
                    echo "                                    <img style=\"float: left;height: 200px;\" src=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "item"), "imagenes_random"), "medium_thumbnail"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "titulo"), "html", null, true);
                    echo "\" id=\"field_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id"), "html", null, true);
                    echo "\" />
                                ";
                }
                // line 110
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "                        </div>
                    </a>
                </div>
            ";
        }
        // line 115
        echo "
            ";
        // line 116
        if ((!twig_test_empty($this->getContext($context, "data")))) {
            // line 117
            echo "                <div class=\"sheet-art sty-box-section sty-box-padding-10\">
                    ";
            // line 118
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 119
                echo "                        <div class=\"media\">
                            <a class=\"pull-left\" href=\"";
                // line 120
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticia_url", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
                echo "\">
                                ";
                // line 121
                $context["url"] = null;
                // line 122
                echo "                                ";
                if ((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "imagenes_all")))) {
                    echo " 
                                    ";
                    // line 123
                    $context["url"] = $this->getAttribute($this->getAttribute($this->getContext($context, "item"), "imagenes_random"), "small_square");
                    // line 124
                    echo "                                ";
                } elseif ($this->getAttribute($this->getContext($context, "item", true), "descripcion_first_media", array(), "any", true, true)) {
                    echo " 
                                    ";
                    // line 125
                    $context["url"] = $this->getAttribute($this->getContext($context, "item"), "descripcion_first_media");
                    // line 126
                    echo "                                ";
                }
                // line 127
                echo "                                ";
                if ((!(null === $this->getContext($context, "url")))) {
                    // line 128
                    echo "                                    <img width=\"90px\" class=\"media-object\" src=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "titulo"), "html", null, true);
                    echo "\">
                                ";
                } else {
                    // line 130
                    echo "                                    <div class=\"media-object\" style=\"width: 90px;height: 90px;\"></div>
                                ";
                }
                // line 131
                echo "   
                            </a>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\"><a href=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticia_url", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "titulo"), "html", null, true);
                echo "</a></h4>
                                <p>
                                    <span class=\"label label-danger\">";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "categoria"), "html", null, true);
                echo "</span> <b title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "fecha_formatted"), "html", null, true);
                echo "\">publicado hace ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "fecha_friendly"), "html", null, true);
                echo ": </b>
                                    ";
                // line 137
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
            // line 143
            echo "                    <center>
                        <a href=\"";
            // line 144
            echo $this->env->getExtension('routing')->getPath("noticias_url");
            echo "\" class=\"btn btn-info btn-lg\">Ver más noticias</a>
                    </center>
                </div>
            ";
        }
        // line 148
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
        return array (  383 => 148,  376 => 144,  373 => 143,  359 => 137,  351 => 136,  344 => 134,  339 => 131,  335 => 130,  327 => 128,  324 => 127,  321 => 126,  319 => 125,  314 => 124,  312 => 123,  307 => 122,  305 => 121,  301 => 120,  298 => 119,  294 => 118,  291 => 117,  289 => 116,  286 => 115,  280 => 111,  274 => 110,  264 => 108,  261 => 107,  257 => 106,  252 => 104,  239 => 94,  235 => 93,  231 => 92,  227 => 91,  221 => 87,  219 => 86,  213 => 83,  206 => 78,  195 => 75,  190 => 74,  184 => 71,  179 => 70,  176 => 69,  173 => 68,  171 => 67,  166 => 66,  164 => 65,  159 => 64,  157 => 63,  154 => 62,  150 => 61,  145 => 58,  134 => 56,  129 => 55,  119 => 53,  108 => 52,  104 => 51,  99 => 49,  94 => 48,  66 => 22,  57 => 16,  49 => 11,  43 => 7,  40 => 6,  35 => 5,  28 => 3,);
    }
}
