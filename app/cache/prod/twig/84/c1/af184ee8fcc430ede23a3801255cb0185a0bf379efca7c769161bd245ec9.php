<?php

/* AcmeSiteBundle:OFM:fraternidades.html.twig */
class __TwigTemplate_84c1af184ee8fcc430ede23a3801255cb0185a0bf379efca7c769161bd245ec9 extends Twig_Template
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
    }

    // line 7
    public function block_title_spacer($context, array $blocks = array())
    {
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
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
    <style>
        /* Always set the map height explicitly to define the size of the div
         * element that contains the map. */
        #map {
            height: 400px;
        }
        /* Optional: Makes the sample page fill the window. */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .fraternidad-box{
            border-bottom-style: solid;
            border-bottom-width: 1px;
            border-bottom-color: gainsboro;
            padding: 5px;

        }
    </style>
    <div class=\"www-header\" style=\"background-image: linear-gradient(to bottom, transparent, white), url(/img/pfspa_2017.jpg)\">
        <span>Directorio de los hermanos de la Provincia</span>
        <p>El señor me dio hermanos...</p>
    </div>
    <div class=\"www-gradient-page  sty-box-overflow-auto\" style=\"min-height: 800px;\">
        <div class=\"sty-box-overflow-auto fixer sheet-art sty-box-padding-5 sty-box-radius-10\">
            <h1>¿Donde estamos?</h1>
            <hr>
            <div id=\"map\"></div>
        </div>
        <div class=\"fixer sheet-art sty-box-padding-10\">
            ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            echo "   
                <div class=\"media\">
                    <a class=\"pull-left\" href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("url_fraternidad", array("id" => $this->getAttribute($this->getContext($context, "x"), "id"))), "html", null, true);
            echo "\">
                        <img width=\"90px\" class=\"media-object\" src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "x"), "imagenes_first"), "small_square"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nombre"), "html", null, true);
            echo "\">
                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\"><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("url_fraternidad", array("id" => $this->getAttribute($this->getContext($context, "x"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nombre"), "html", null, true);
            echo "</a></h4>
                        <p>
                            <span class=\"label label-info\">";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "ubicacion"), "html", null, true);
            echo "</span>: </b>
                            &nbsp;
                            ";
            // line 65
            echo twig_escape_filter($this->env, strip_tags($this->getAttribute($this->getContext($context, "x"), "contenido")), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("url_fraternidad", array("id" => $this->getAttribute($this->getContext($context, "x"), "id"))), "html", null, true);
            echo "\">[Leer más]</a>
                        </p>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </div>
        <script>

            // This example displays a marker at the center of Australia.
            // When the user clicks the marker, an info window opens.
            var map = null;
            function initMap() {
                //3.7584328,-72.1739952,5.71z
                var uluru = {lat: 4.7164451, lng: -72.6688751};
                map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 4,
                    center: uluru
                });


            }
            setTimeout(function () {
            ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 88
            echo "                    \$(function () {
                        var contentString = '<div id=\"content\"><h4>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nombre"), "html", null, true);
            echo "</h4>";
            echo strip_tags($this->getAttribute($this->getContext($context, "x"), "contenido"));
            echo "<a target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("url_fraternidad", array("id" => $this->getAttribute($this->getContext($context, "x"), "id"))), "html", null, true);
            echo "\">Abrir...</a></div>';
                        var str = '";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "mapa"), "html", null, true);
            echo "';

                        var parts = str.split(\",\");

                        var uluru = {lat: parseFloat(parts[0]), lng: parseFloat(parts[1])};

                        var infowindow = new google.maps.InfoWindow({
                            content: contentString
                        });

                        var marker = new google.maps.Marker({
                            position: uluru,
                            map: map,
                            title: '";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nombre"), "html", null, true);
            echo "'
                        });
                        marker.addListener('click', function () {
                            infowindow.open(map, marker);
                        });
                    });
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                }, 1000);
        </script>

        <script async defer
                src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBHcX0ceXQDAkjGEGO228ej2eFi_6w93fc&callback=initMap\">
        </script>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:OFM:fraternidades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 110,  185 => 103,  169 => 90,  161 => 89,  158 => 88,  154 => 87,  135 => 70,  122 => 65,  117 => 63,  110 => 61,  102 => 58,  98 => 57,  91 => 55,  43 => 9,  40 => 8,  35 => 7,  30 => 5,);
    }
}
