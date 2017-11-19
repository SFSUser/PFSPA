<?php

/* AcmeSFSBundle:Schema:field_options_default.html.twig */
class __TwigTemplate_2c20a7dc3bbb2f8650507ae24b7c9d85df6f7fa5d4a8aaf6e4b7a68a1f27a525 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
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
        foreach ($context['_seq'] as $context["y"] => $context["z"]) {
            // line 3
            echo "    <option
        ";
            // line 4
            $context["cur_ind"] = ($this->getAttribute($this->getContext($context, "loop"), "index") - 1);
            // line 5
            echo "        
        ";
            // line 6
            if ((("com_" . $this->getContext($context, "y")) != ("com_" . $this->getContext($context, "cur_ind")))) {
                echo "value=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "y"), "html", null, true);
                echo "\"";
            }
            // line 7
            echo "         label=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "z"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "z"), "html", null, true);
            echo "</option>
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
        unset($context['_seq'], $context['_iterated'], $context['y'], $context['z'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Schema:field_options_default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  44 => 6,  41 => 5,  39 => 4,  36 => 3,  335 => 166,  324 => 158,  309 => 146,  283 => 123,  278 => 121,  267 => 113,  256 => 105,  251 => 103,  238 => 96,  234 => 95,  228 => 94,  214 => 83,  208 => 80,  198 => 73,  189 => 67,  183 => 64,  177 => 61,  173 => 60,  169 => 59,  160 => 53,  156 => 52,  151 => 50,  147 => 49,  142 => 47,  138 => 46,  133 => 44,  129 => 43,  121 => 38,  116 => 36,  110 => 35,  103 => 33,  97 => 32,  93 => 31,  86 => 29,  80 => 28,  74 => 27,  65 => 24,  55 => 20,  21 => 2,  126 => 65,  118 => 59,  104 => 47,  100 => 46,  96 => 45,  92 => 44,  88 => 43,  83 => 41,  79 => 40,  75 => 39,  71 => 38,  67 => 37,  59 => 21,  54 => 34,  42 => 16,  38 => 15,  27 => 7,  679 => 98,  667 => 97,  653 => 94,  650 => 93,  636 => 92,  608 => 88,  605 => 87,  595 => 85,  593 => 84,  590 => 83,  577 => 82,  564 => 78,  541 => 76,  511 => 74,  481 => 72,  478 => 71,  461 => 70,  457 => 68,  447 => 66,  445 => 65,  442 => 64,  439 => 63,  436 => 62,  433 => 61,  419 => 60,  406 => 56,  400 => 55,  392 => 53,  386 => 51,  383 => 50,  379 => 49,  355 => 48,  352 => 47,  342 => 168,  340 => 44,  337 => 43,  323 => 42,  296 => 39,  287 => 38,  274 => 37,  245 => 100,  236 => 30,  233 => 29,  220 => 28,  200 => 24,  175 => 22,  171 => 20,  158 => 19,  144 => 16,  131 => 15,  112 => 52,  98 => 10,  95 => 9,  84 => 8,  70 => 26,  66 => 4,  63 => 36,  51 => 2,  46 => 96,  43 => 19,  40 => 81,  37 => 16,  34 => 41,  31 => 36,  28 => 27,  25 => 18,  22 => 14,  19 => 2,);
    }
}
