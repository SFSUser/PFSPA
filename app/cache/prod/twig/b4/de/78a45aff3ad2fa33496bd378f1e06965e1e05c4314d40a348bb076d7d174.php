<?php

/* AcmeSiteBundle:Web:footer.html.twig */
class __TwigTemplate_b4de78a45aff3ad2fa33496bd378f1e06965e1e05c4314d40a348bb076d7d174 extends Twig_Template
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
        echo "<div style=\"background-color:white;margin-top: 100px;\">
  <center>
      <div>
          <span class=\"sty-label-blue\">Copyright © 2015 </span> -
          <span class=\"sty-label-blue\">Desarrollado por </span>
          <img align=\"top\" width=\"18px\" height=\"18px\" src=\"../../img/logo_sfs.png\">
          <a target=\"_blank\" href=\"http://sfs-sfsuser.rhcloud.com/\" class=\"st-y-text-main sty-font-small sty-label\" style=\"color: blue;\">SFSSoft</a>
          ";
        // line 8
        if ((!$this->env->getExtension('app_extension')->roleGranted("ADMIN"))) {
            echo " -
          <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getPath("adminlogin");
            echo "\">Administrador</a>
          ";
        }
        // line 11
        echo "      </div>
  </center>
</div>
";
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:Web:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 11,  32 => 9,  28 => 8,  19 => 1,);
    }
}
