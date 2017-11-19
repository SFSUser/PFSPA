<?php

/* AcmeSiteBundle:OFM:fraternidad.html.twig */
class __TwigTemplate_b23da0355c273d20d3a83c3dbb0dac05d21f4709f14100d18507faf02c41d3ca extends Twig_Template
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
        // line 5
        echo "    ";
        if ((!(null === $this->getContext($context, "data")))) {
            echo " Fraternidad de ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "nombre"), "html", null, true);
        } else {
            echo "No se econtró la fraternidad...";
        }
    }

    // line 7
    public function block_title_spacer($context, array $blocks = array())
    {
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <div class=\"www-header\" style=\"background-image: linear-gradient(to bottom, transparent, white), url(/img/pfspa_2017.jpg)\">
        <span>";
        // line 10
        if ((!(null === $this->getContext($context, "data")))) {
            echo "Fraternidad: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "nombre"), "html", null, true);
        } else {
            echo "No existe...";
        }
        echo "</span>
    </div>
    <div class=\"fixer sheet-art sty-box-overflow-auto sty-box-padding-5 \" style=\"margin-top: -90px;min-height: 800px;\">
        ";
        // line 13
        if ((!(null === $this->getContext($context, "data")))) {
            // line 14
            echo "            <div class=\"sty-box-overflow-auto\">
                <div>
                    <div class=\"sty-box-overflow-auto\">
                        <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("url_fraternidades");
            echo "\" class=\"btn btn-danger pull-right\">Volver atrás</a>
                        ";
            // line 19
            echo "                        <b style=\"font-size: 20px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "nombre"), "html", null, true);
            echo "</b><br>
                        <b>Ubicación: </b><i>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "ubicacion"), "html", null, true);
            echo "</i><br>
                        <b>Teléfono: </b><i>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "telefono"), "html", null, true);
            echo "</i><br>
                        <b>Dirección: </b><i>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "direccion"), "html", null, true);
            echo "</i><br>
                        <b>Función: </b><i>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "funcion"), "html", null, true);
            echo "</i><br>
                        <b>Correo: </b><i>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "correo"), "html", null, true);
            echo "</i><br>
                    </div>
                </div>    
                <hr class=\"featurette-divider\">
                ";
            // line 29
            echo "                <div>
                    ";
            // line 30
            $this->env->loadTemplate("AcmeWebBundle:Segments:carousel.html.twig")->display(array_merge($context, array("imagenes" => $this->getAttribute($this->getContext($context, "data2"), "imagenes_all"), "titulo" => ("Imágenes de " . $this->getAttribute($this->getContext($context, "data2"), "nombre")))));
            // line 31
            echo "                </div>
                ";
            // line 35
            echo "            </div>
            <div class=\"sty-box-padding-10\">
                <b>Descripcion:</b>
                <br>";
            // line 38
            echo $this->getAttribute($this->getContext($context, "data"), "contenido");
            echo "
            </div>
            <hr>
            <h3>Hermanos de esta fraternidad</h3>
            <hr>
            <style>
                .hermano-box{
                    background-position: center;
                    background-size: cover;
                    height: 150px;
                    width: 150px;
                    border-radius: 150px;
                    margin: 5px;
                    border-width: 2px;
                    border-style: solid;
                    display: inline-block;
                    padding-top: 100px;
                }
                .hermano-box>a{
                    background-color: gainsboro;
                    border-radius: 10px;
                    width:100%;
                    padding: 4px;
                    opacity: 0.5;
                }
                .hermano-box>b{
                    color:white;
                }
            </style>
            <center>
            ";
            // line 68
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "data"), "hermanos"));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 69
                echo "                <div class=\"hermano-box\" style=\"background-image: url(";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "imagen"), "html", null, true);
                echo ")\">
                    <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("url_hermano", array("id" => $this->getAttribute($this->getContext($context, "x"), "id"))), "html", null, true);
                echo "\">
                        ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "nombre"), "html", null, true);
                echo "
                        
                    </a><br> <b>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "cargo"), "html", null, true);
                echo "</b>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "            </center>
        ";
        }
        // line 78
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:OFM:fraternidad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 78,  177 => 76,  168 => 73,  163 => 71,  159 => 70,  154 => 69,  150 => 68,  117 => 38,  112 => 35,  109 => 31,  107 => 30,  104 => 29,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  76 => 19,  72 => 17,  67 => 14,  65 => 13,  54 => 10,  51 => 9,  48 => 8,  43 => 7,  33 => 5,  30 => 4,);
    }
}
