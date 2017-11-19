<?php

/* AcmeWebBundle:Noticias:noticias_query.html.twig */
class __TwigTemplate_d938b862a9069799b8ab38a0707ab21442eca1e71dfe71ee4f6a82cb47506840 extends Twig_Template
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
        echo "<div><center>";
        echo $this->getContext($context, "buttons");
        echo "</center></div>
<script>
    \$(\"#grid\").gridalicious({
        gutter: 5,
        width: 250,
        animate: true,
        animationOptions: {
            speed: 200,
            duration: 300,
        }
    });
</script>
<div class=\"row\">
    ";
        // line 14
        if (twig_test_empty($this->getContext($context, "data"))) {
            // line 15
            echo "        <center>
            <div class=\"sheet-art sty-box-padding-10\">
                <h2>Lo sentimos</h2>
                <p>
                    No se econtraron resultados
                </p>
            </div>
        </center>
    ";
        }
        // line 24
        echo "    <div id=\"grid\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "            ";
            // line 27
            echo "            ";
            // line 40
            echo "            <div class=\"item sheet-art\" id=\"CatedralNoticias_element_";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "id"), "html", null, true);
            echo "\">
                ";
            // line 44
            echo "                <div class=\"sty-box-padding-5\">
                    ";
            // line 45
            $context["url"] = null;
            // line 46
            echo "                    ";
            if ((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "imagenes_all")))) {
                echo " 
                        ";
                // line 47
                $context["url"] = $this->getAttribute($this->getAttribute($this->getContext($context, "item"), "imagenes_random"), "medium_thumbnail");
                // line 48
                echo "                    ";
            } elseif ($this->getAttribute($this->getContext($context, "item", true), "descripcion_first_media", array(), "any", true, true)) {
                echo " 
                        ";
                // line 49
                $context["url"] = $this->getAttribute($this->getContext($context, "item"), "descripcion_first_media");
                // line 50
                echo "                    ";
            }
            // line 51
            echo "                    ";
            if ((!(null === $this->getContext($context, "url")))) {
                // line 52
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticia_url", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
                echo "\"><img width=\"100%\" data-src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "url"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "titulo"), "html", null, true);
                echo "\"></a>
                    ";
            }
            // line 53
            echo "  
                    <div class=\"caption\">
                        <h4><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticia_url", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "titulo"), "html", null, true);
            echo "</a></h4>
                        <i title=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "fecha_formatted"), "html", null, true);
            echo "\">Publicado hace ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "fecha_friendly"), "html", null, true);
            echo "</i>
                        <p><span class=\"label label-danger\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "categoria"), "html", null, true);
            echo "</span> ";
            echo twig_slice($this->env, strip_tags($this->getAttribute($this->getContext($context, "item"), "contenido")), 0, 250);
            echo " - <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("noticia_url", array("id" => $this->getAttribute($this->getContext($context, "item"), "id"))), "html", null, true);
            echo "\">[Leer más]</a></p>
                        ";
            // line 61
            echo "                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "AcmeWebBundle:Noticias:noticias_query.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 65,  126 => 61,  118 => 57,  112 => 56,  106 => 55,  102 => 53,  90 => 52,  87 => 51,  84 => 50,  82 => 49,  77 => 48,  75 => 47,  70 => 46,  68 => 45,  65 => 44,  60 => 40,  58 => 27,  56 => 26,  52 => 25,  49 => 24,  38 => 15,  36 => 14,  19 => 1,);
    }
}
