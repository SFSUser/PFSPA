<?php

/* AcmeWebBundle:Segments:carousel.html.twig */
class __TwigTemplate_28ff3464532d95f01149f915eb32f0a524b1daab248184b34de8a83a89ae83d3 extends Twig_Template
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
        if ((!twig_test_empty($this->getContext($context, "imagenes")))) {
            // line 3
            echo "    <center>
        <div id=\"carousel-example-generic\" class=\"carousel slide\" data-ride=\"carousel\">
            <!-- Indicators -->
            <ol class=\"carousel-indicators\">
                ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "imagenes"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 8
                echo "                    <li data-target=\"#carousel-example-generic\" data-slide-to=\"";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getContext($context, "loop"), "index") + 1), "html", null, true);
                echo "\" class=\"active\"></li>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            </ol>

            <!-- Wrapper for slides -->
            <div class=\"carousel-inner\">
                ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "imagenes"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 15
                echo "                    <div class=\"item ";
                if (($this->getAttribute($this->getContext($context, "loop"), "index") == 1)) {
                    echo "active";
                }
                echo "\">
                        <div class=\"www-background\" style=\"width: 100%;height: 400px;background-image: url(";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "original"), "html", null, true);
                echo ");background-size: cover;\">
                        </div>
                        <img style=\"display: none;\" src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "original"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "titulo"), "html", null, true);
                echo "\"/>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "            </div>

            <!-- Controls -->
            <a class=\"left carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"prev\">
                <span class=\"glyphicon glyphicon-chevron-left\"></span>
            </a>
            <a class=\"right carousel-control\" href=\"#carousel-example-generic\" role=\"button\" data-slide=\"next\">
                <span class=\"glyphicon glyphicon-chevron-right\"></span>
            </a>
        </div>
    </center>
    <hr class=\"featurette-divider\"/>
";
        }
    }

    public function getTemplateName()
    {
        return "AcmeWebBundle:Segments:carousel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 21,  96 => 18,  91 => 16,  84 => 15,  61 => 10,  44 => 8,  27 => 7,  21 => 3,  19 => 2,  181 => 78,  177 => 76,  168 => 73,  163 => 71,  159 => 70,  154 => 69,  150 => 68,  117 => 38,  112 => 35,  109 => 31,  107 => 30,  104 => 29,  97 => 24,  93 => 23,  89 => 22,  85 => 21,  81 => 20,  76 => 19,  72 => 17,  67 => 14,  65 => 13,  54 => 10,  51 => 9,  48 => 8,  43 => 7,  33 => 5,  30 => 4,);
    }
}
