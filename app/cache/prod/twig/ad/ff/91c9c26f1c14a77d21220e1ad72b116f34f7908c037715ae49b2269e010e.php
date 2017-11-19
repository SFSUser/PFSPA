<?php

/* AcmeWebBundle:Sections:contacto.html.twig */
class __TwigTemplate_adff91c9c26f1c14a77d21220e1ad72b116f34f7908c037715ae49b2269e010e extends Twig_Template
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

    // line 4
    public function block_component($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"sty-box-overflow-auto sty-box-margin-top-5\">
        <div class=\"col-md-3\">
            <center>
                ";
        // line 8
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Contact:contact"));
        echo "
            </center>
        </div>
        <div class=\"col-md-9\">
            <div style=\"border-radius: 15px 15px 0 0;overflow: hidden;\" class=\"www-greenborder\">
                ";
        // line 19
        echo "                <div class=\"bg-info www-background  sty-box-padding-5\">
                    <p class=\"sty-font-median\">
                        <span class=\"label label-info\">Telefonos:</span> ";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Segment:index", array("identifier" => "IPSCDOTelefono", "type" => "text")));
        echo "<br>
                        <span class=\"label label-info\">Celulares:</span> ";
        // line 22
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Segment:index", array("identifier" => "IPSCDOCelulares", "type" => "text")));
        echo "<br>
                        <span class=\"label label-info\">Direccion:</span> ";
        // line 23
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Segment:index", array("identifier" => "IPSCDODireccion", "type" => "text")));
        echo "<br>
                        <span class=\"label label-info\">Correo:</span> ";
        // line 24
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Segment:index", array("identifier" => "IPSCDOCorreo", "type" => "text")));
        echo "
                    </p>
                </div>
            </div>
            <div class=\"sheet-art sty-box-padding-5\">  
                <div class=\"segment-content\">
                    ";
        // line 30
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Blog:index", array("identifier" => "IPSCDOContactInfo")));
        echo "
                ";
        // line 32
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeWebBundle:Sections:contacto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 32,  69 => 30,  60 => 24,  56 => 23,  48 => 21,  44 => 19,  52 => 22,  47 => 12,  45 => 11,  39 => 7,  36 => 8,  31 => 5,  28 => 4,);
    }
}
