<?php

/* AcmeSiteBundle:OFM:post.html.twig */
class __TwigTemplate_aa34e4fb00f41c12245bea54a0cd4287a5dccdcfcb40b4de9b72e493a251afbe extends Twig_Template
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
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getContext($context, "data"), "refhermano"), "nombre") . " ") . $this->getAttribute($this->getAttribute($this->getContext($context, "data"), "refhermano"), "apellidos")), "html", null, true);
        } else {
            echo "Post perdido...";
        }
        echo "</span>
    </div>
    <div class=\"fixer sheet-art sty-box-overflow-auto sty-box-padding-5 \" style=\"margin-top: -90px;min-height: 800px;\">
        <div class=\"sty-box-overflow-auto\">
            ";
        // line 13
        if ((!(null === $this->getContext($context, "data")))) {
            // line 14
            echo "            <table>
              <tr>
                <td style=\"text-align:center\">
                  <img style=\"width:90px;border-radius:90px;\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "data"), "refhermano"), "imagen"), "html", null, true);
            echo "\"/>
                  <br><a target=\"_blank\" href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("url_hermano", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "data"), "refhermano"), "id"))), "html", null, true);
            echo "\">@";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "data"), "refhermano"), "nick"), "html", null, true);
            echo "</a>
                </td>
                <td><h3>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "titulo"), "html", null, true);
            echo "</h3></td>
              </tr>
            </table>
            <hr>
              <div>
                ";
            // line 25
            echo $this->getAttribute($this->getContext($context, "data"), "descripcionFinal");
            echo "
              </div>
                <hr>
                <b>Tags: </b>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "tags"), "html", null, true);
            echo "
                <i style=\"float:right;\">";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "fecha"), "Y/m/d - H:m:s"), "html", null, true);
            echo "</i>
            ";
        }
        // line 31
        echo "        </div>
        <hr>
        ";
        // line 33
        if ((!(null === $this->getContext($context, "data")))) {
            // line 34
            echo "        <div class=\"sty-box-overflow-auto\">
            <div class=\"pull-right\">
                ";
            // line 36
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Utils:social", array("share_link" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getUri", array(), "method"), "site_link" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "getHost", array(), "method"), "description" => $this->getAttribute($this->getContext($context, "data"), "titulo"))));
            // line 38
            echo "
            </div>
        </div>
        <hr class=\"featurette-divider\"/>
        <div>
            ";
            // line 43
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Utils:facebookcomments", array("url" => $this->env->getExtension('routing')->getPath("url_muro_post", array("id" => $this->getAttribute($this->getContext($context, "data"), "id"))))));
            echo "
        </div>
        ";
        }
        // line 46
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:OFM:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 46,  118 => 43,  111 => 38,  109 => 36,  105 => 34,  103 => 33,  99 => 31,  94 => 29,  90 => 28,  84 => 25,  76 => 20,  69 => 18,  65 => 17,  60 => 14,  58 => 13,  46 => 9,  43 => 8,  40 => 7,  35 => 6,  30 => 4,);
    }
}
