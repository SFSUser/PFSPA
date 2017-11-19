<?php

/* AcmeWebBundle:Sections:login.html.twig */
class __TwigTemplate_0e12f8de4b70213fceeff6e5c2ad99de08a2d7dd83544b1a118b5119fb1cc31e extends Twig_Template
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

    // line 3
    public function block_component($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "app"), "user")) {
            // line 5
            echo "        <center>
            <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/logo.png"), "html", null, true);
            echo "\" width=\"200px\"/>
            <form  method=\"post\" action=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("adminlogout");
            echo "\">
                <div class=\"sty-box-padding-20\">
                    <span class=\"sty-label-green sty-font-20\">Has iniciado sesión como: </span>
                    <br>
                    <span class=\"sty-label-gray sty-font-giant text-uppercase\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "</span>
                </div> 
                <input class=\"btn btn-danger\" type=\"submit\" value=\"Cerrar sesíón\"/>
            </form>
        </center>
    ";
        } else {
            // line 17
            echo "        <center>
            <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/img/logo.png"), "html", null, true);
            echo "\" width=\"200px\"/>
            <form  method=\"post\" action=\"";
            // line 19
            echo $this->env->getExtension('routing')->getPath("admincheck");
            echo "\">
                ";
            // line 24
            echo "      
                <div style=\"max-width: 300px;\" class=\"sty-box-padding-20\">
                    <b>Por favor ingrese sus credenciales:</b>
                    <div class=\"input-group sty-box-margin-bottom-5\">
                        <span class=\"input-group-addon\">Usuario</span>
                        <input type=\"text\" class=\"form-control\" name=\"_username\" placeholder=\"Nombre de usuario\">
                    </div>
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\">Contraseña</span>
                        <input type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Contraseña\">
                    </div>
                </div>

                ";
            // line 37
            if ($this->getContext($context, "error")) {
                // line 38
                echo "                    <div class=\"sty-box-padding-20 sty-label-red\">
                        ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "error"), "message"), "html", null, true);
                echo "
                    </div>
                ";
            }
            // line 42
            echo "
                <input class=\"btn btn-success\" type=\"submit\" value=\"Iniciar sesión\"/>
            </form>
        </center>
    ";
        }
    }

    public function getTemplateName()
    {
        return "AcmeWebBundle:Sections:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 42,  88 => 39,  85 => 38,  83 => 37,  68 => 24,  64 => 19,  60 => 18,  57 => 17,  41 => 7,  37 => 6,  34 => 5,  55 => 12,  48 => 11,  46 => 12,  39 => 7,  36 => 6,  31 => 4,  28 => 3,);
    }
}
