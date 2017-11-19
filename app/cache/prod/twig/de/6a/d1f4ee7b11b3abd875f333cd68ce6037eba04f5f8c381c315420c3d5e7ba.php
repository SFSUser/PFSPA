<?php

/* AcmeSiteBundle:Schemas:Hermanos.html.twig */
class __TwigTemplate_de6ad1f4ee7b11b3abd875f333cd68ce6037eba04f5f8c381c315420c3d5e7ba extends Twig_Template
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
        // line 1
        echo "<div class=\"sty-box-overflow-auto\">
    <div class=\"col-sm-6\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">Foto y firma</div>
            <div class=\"panel-body\">
                <center>
                    ";
        // line 7
        echo $this->env->getExtension('app_extension')->fImage(array("name" => "imagen"));
        echo "
                </center>
            </div>
        </div>

        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">Datos básicos</div>
            <div class=\"panel-body\">
                ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "nombre", 1 => "Nombre", 2 => array("required" => true)), "method"), "html", null, true);
        echo "
                ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "apellidos", 1 => "Apellidos", 2 => array("required" => true)), "method"), "html", null, true);
        echo "
            </div>
        </div>
    </div>
    <div class=\"col-sm-6\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">Datos de contacto</div>
            <div class=\"panel-body\">

                ";
        // line 34
        echo "                ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "nick", 1 => "Nick"), "method"), "html", null, true);
        echo "
                ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "clave", 1 => "Contraseña", 2 => array("type" => "text")), "method"), "html", null, true);
        echo "
                ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "clave2", 1 => "Confirmar contraseña", 2 => array("type" => "text")), "method"), "html", null, true);
        echo "
                ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "telefono", 1 => "Teléfono"), "method"), "html", null, true);
        echo "
                ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "lugar", 1 => "Lugar"), "method"), "html", null, true);
        echo "
                ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "cargo", 1 => "Cargo", 2 => array("required" => true)), "method"), "html", null, true);
        echo "
                ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "correo", 1 => "Correo", 2 => array("required" => true)), "method"), "html", null, true);
        echo "
                ";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "cargoprov", 1 => "Cargo provincia", 2 => array("required" => true)), "method"), "html", null, true);
        echo "

                ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "nacimiento", 1 => "Fecha de nacimiento", 2 => array("required" => true, "type" => "date")), "method"), "html", null, true);
        echo "
                ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "fallecido", 1 => "Fecha de muerte", 2 => array("type" => "date")), "method"), "html", null, true);
        echo "
                ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "vsimples", 1 => "Votos simples", 2 => array("type" => "date")), "method"), "html", null, true);
        echo "
                ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "vsolemnes", 1 => "Votos solemnes", 2 => array("type" => "date")), "method"), "html", null, true);
        echo "
                ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "input", array(0 => "ordenacion", 1 => "Ordenación", 2 => array("type" => "date")), "method"), "html", null, true);
        echo "
                <div class=\"input-group input-group-sm\">
                    <span class=\"input-group-addon\">Fraternidad</span>
                    <select name=\"fraternidad\" class=\"form-control\">
                        <option value=\"\">Ninguna</option>
                        ";
        // line 52
        echo $this->env->getExtension('app_extension')->fOption(array("entity" => "AcmeSiteBundle:Fraternidad", "label" => "nombre"));
        echo "
                    </select>
                </div>
                ";
        // line 59
        echo "            </div>
        </div>
    </div>

</div>

";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "forms"), "textarea", array(0 => "biografia", 1 => "Biografía"), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:Schemas:Hermanos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 65,  118 => 59,  104 => 47,  100 => 46,  96 => 45,  92 => 44,  88 => 43,  83 => 41,  79 => 40,  75 => 39,  71 => 38,  67 => 37,  59 => 35,  54 => 34,  42 => 16,  38 => 15,  27 => 7,  679 => 98,  667 => 97,  653 => 94,  650 => 93,  636 => 92,  608 => 88,  605 => 87,  595 => 85,  593 => 84,  590 => 83,  577 => 82,  564 => 78,  541 => 76,  511 => 74,  481 => 72,  478 => 71,  461 => 70,  457 => 68,  447 => 66,  445 => 65,  442 => 64,  439 => 63,  436 => 62,  433 => 61,  419 => 60,  406 => 56,  400 => 55,  392 => 53,  386 => 51,  383 => 50,  379 => 49,  355 => 48,  352 => 47,  342 => 45,  340 => 44,  337 => 43,  323 => 42,  296 => 39,  287 => 38,  274 => 37,  245 => 32,  236 => 30,  233 => 29,  220 => 28,  200 => 24,  175 => 22,  171 => 20,  158 => 19,  144 => 16,  131 => 15,  112 => 52,  98 => 10,  95 => 9,  84 => 8,  70 => 5,  66 => 4,  63 => 36,  51 => 2,  46 => 96,  43 => 91,  40 => 81,  37 => 59,  34 => 41,  31 => 36,  28 => 27,  25 => 18,  22 => 14,  19 => 1,);
    }
}
