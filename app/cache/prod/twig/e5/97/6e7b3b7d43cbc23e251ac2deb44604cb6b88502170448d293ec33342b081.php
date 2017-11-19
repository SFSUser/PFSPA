<?php

/* AcmeSiteBundle:OFM:hermano.html.twig */
class __TwigTemplate_e5976e7b3b7d43cbc23e251ac2deb44604cb6b88502170448d293ec33342b081 extends Twig_Template
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
        echo "    <div class=\"www-header\" style=\"background-image: linear-gradient(to bottom, transparent, white), url(/img/pfspa_2017.jpg)\">
        <span>";
        // line 9
        if ((!(null === $this->getContext($context, "data")))) {
            echo "Fray ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "data"), "nombre") . " ") . $this->getAttribute($this->getContext($context, "data"), "apellidos")), "html", null, true);
        } else {
            echo "Se escapo...";
        }
        echo "</span>
    </div>
    <div class=\"fixer sheet-art sty-box-overflow-auto sty-box-padding-5 \" style=\"margin-top: -90px;min-height: 800px;\">
        <div class=\"sty-box-overflow-auto\">
            ";
        // line 13
        if ((!(null === $this->getContext($context, "data")))) {
            // line 14
            echo "                <div class=\"col-md-9 \">
                    <div class=\"sty-box-overflow-auto\">
                        <a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("url_hermanos");
            echo "\" class=\"btn btn-danger pull-right\">Volver atrás</a>
                        ";
            // line 18
            echo "                        <b style=\"font-size: 20px;\">Fray ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "data"), "nombre") . " ") . $this->getAttribute($this->getContext($context, "data"), "apellidos")), "html", null, true);
            echo "</b><br>
                        <b>Cargos: </b><i>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "cargo"), "html", null, true);
            echo " - <b>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "cargoprov"), "html", null, true);
            echo "</b></i><br>
                        ";
            // line 20
            if ((!(null === $this->getAttribute($this->getContext($context, "data"), "nacimiento")))) {
                echo "<b>Fecha de nacimiento: </b><i>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "nacimiento"), "Y/m/d"), "html", null, true);
                echo "</i> - ";
                if ((!(null === $this->getAttribute($this->getContext($context, "data"), "fallecido")))) {
                    echo "<i>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "fallecido"), "Y/m/d"), "html", null, true);
                    echo "</i>";
                }
                echo "<br>";
            }
            // line 21
            echo "
                        <b>Lugar de origen: </b><i>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "lugar"), "html", null, true);
            echo "</i><br>
                        <b>Fraternidad: </b><i>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "reffraternidad"), "html", null, true);
            echo "</i><br>
                        ";
            // line 24
            if ((!(null === $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "get", array(0 => "hermano_id"), "method")))) {
                echo "<b>Telefono: </b><i>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "telefono"), "html", null, true);
                echo "</i><br>";
            }
            // line 25
            echo "                        ";
            if ($this->env->getExtension('app_extension')->roleGranted("ADMIN")) {
                echo "<b>Clave: </b><i>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "clave"), "html", null, true);
                echo "</i><br>";
            }
            // line 26
            echo "                        ";
            if ((!(null === $this->getAttribute($this->getContext($context, "data"), "vsimples")))) {
                echo "<b>Votos simples: </b><i>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "vsimples"), "Y/m/d"), "html", null, true);
                echo "</i><br>";
            }
            // line 27
            echo "                        ";
            if ((!(null === $this->getAttribute($this->getContext($context, "data"), "vsolemnes")))) {
                echo "<b>Votos solemnes: </b><i>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "vsolemnes"), "Y/m/d"), "html", null, true);
                echo "</i><br>";
            }
            // line 28
            echo "                        ";
            if ((!(null === $this->getAttribute($this->getContext($context, "data"), "ordenacion")))) {
                echo "<b>Ordenación: </b><i>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "ordenacion"), "Y/m/d"), "html", null, true);
                echo "</i><br>";
            }
            // line 29
            echo "                    </div>
                </div>                
                <div class=\"col-md-3\"><img  style=\"width: 100%; border-radius: 6px;\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "imagen"), "html", null, true);
            echo ")\"/></div>

            ";
        }
        // line 34
        echo "        </div>
        <div class=\"sty-box-padding-10\">
            <hr class=\"featurette-divider\">
            <p><b>Biografía:</b> ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "biografia"), "html", null, true);
        echo "</p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:OFM:hermano.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 37,  146 => 34,  140 => 31,  136 => 29,  129 => 28,  122 => 27,  115 => 26,  108 => 25,  102 => 24,  98 => 23,  94 => 22,  91 => 21,  79 => 20,  73 => 19,  68 => 18,  64 => 16,  60 => 14,  58 => 13,  46 => 9,  43 => 8,  40 => 7,  35 => 6,  30 => 4,);
    }
}
