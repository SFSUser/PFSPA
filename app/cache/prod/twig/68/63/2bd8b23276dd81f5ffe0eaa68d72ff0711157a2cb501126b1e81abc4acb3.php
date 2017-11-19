<?php

/* AcmeSFSBundle:Contact:template.html.twig */
class __TwigTemplate_68632bd8b23276dd81f5ffe0eaa68d72ff0711157a2cb501126b1e81abc4acb3 extends Twig_Template
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
        echo "<div>
    <h3 class=\"\">Ingresa tus datos para que podamos contactarte:</h3>
    <hr>
    <form id=\"contact_form\">
        ";
        // line 7
        echo "        <input placeholder=\"Su nombre o el de la empresa\" id=\"empresa\" required=\"\" class=\"form-control\" type=\"text\"/><br>
        ";
        // line 9
        echo "        <input placeholder=\"Cédula o Nit de la empresa\" id=\"nit\" required=\"\" class=\"form-control\" type=\"text\"/><br>
        ";
        // line 11
        echo "        <input placeholder=\"Escribe tu correo\" id=\"correo\" required=\"\" class=\"form-control\" type=\"email\"/><br>
        ";
        // line 13
        echo "        <input placeholder=\"Escribe tu numero de teléfono o celular\" id=\"telefono\" class=\"form-control\" type=\"number\"/><br>
        ";
        // line 15
        echo "        <textarea placeholder=\"Deja tu mensaje\" id=\"mensaje\" required=\"\" style=\"height: 100px\" class=\"form-control\"></textarea><br>
        <input id=\"cotizacion\" type=\"hidden\" class=\"form-control\"/><br>
        <input class=\"button\" type=\"submit\" value=\"Enviar mensaje\"/>
        <br><br>
        <!--<img width=\"100px\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/img/up_arrow.png"), "html", null, true);
        echo "\"/>-->
        <br>
        <div class=\"sty-font-median\">
            Por favor, ingresa tus datos y deja el mensaje
        </div>
    </form>
</div>
";
        // line 27
        echo "<div style=\"display: none;\">
    <h1 id=\"titulo_msg\">Nuevo mensaje de: <b class=\"empresa\"></b></h1>
    <div id=\"contact_template\">
        <table>
            <tr>
                <td class=\"sty-label-blue\">Nombre/Empresa</td>
                <td class=\"empresa sty-label-gray\"></td>
            </tr>
            <tr>
                <td class=\"sty-label-blue\">Cédula/Nit</td>
                <td class=\"nit sty-label-gray\"></td>
            </tr>
            <tr>
                <td class=\"sty-label-blue\">Correo</td>
                <td class=\"correo sty-label-gray\"></td>
            </tr>
            <tr>
                <td class=\"sty-label-blue\">Telefono</td>
                <td class=\"telefono sty-label-gray\"></td>
            </tr>
            <tr>
                <td class=\"sty-label-blue\">Mensaje</td>
                <td class=\"mensaje sty-label-gray\"></td>
            </tr>
        </table>
        <hr>
        <span class=\"sty-label-blue\">Elementos cotizados:</span>
        <ul id=\"cotizacion-lista\"></ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Contact:template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 27,  43 => 19,  37 => 15,  34 => 13,  25 => 7,  78 => 53,  71 => 49,  19 => 2,  73 => 50,  69 => 30,  60 => 24,  56 => 23,  48 => 21,  44 => 19,  52 => 22,  47 => 12,  45 => 11,  39 => 7,  36 => 8,  31 => 11,  28 => 9,);
    }
}
