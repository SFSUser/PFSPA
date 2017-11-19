<?php

/* AcmeSFSBundle:Segment:segment.html.twig */
class __TwigTemplate_7ed7bfd9781d86f259e1cfeca885c22ad3133b8d6e2857d55f888408bf5f2236 extends Twig_Template
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
        $context["edit"] = "<b class=\"sty-label-orange\">[Editar] </b>";
        // line 2
        echo "    <span type=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
        echo "\" identifier=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "identifier"), "html", null, true);
        echo "\" class=\"editable-text segment-content\">";
        if ($this->env->getExtension('app_extension')->roleGranted("ADMIN")) {
            echo $this->getContext($context, "edit");
        }
        if ($this->getContext($context, "segment")) {
            echo $this->getAttribute($this->getContext($context, "segment"), "value");
        } else {
            echo twig_escape_filter($this->env, $this->getContext($context, "pred_value"), "html", null, true);
        }
        echo "</span>
";
        // line 3
        if ($this->env->getExtension('app_extension')->roleGranted("ADMIN")) {
            // line 4
            echo "<script>
    \$(function() {
        prepareSegments('";
            // line 6
            echo $this->env->getExtension('routing')->getPath("create_segment");
            echo "');
    });
    function prepareSegments(url) {
        \$(\".editable-text\").each(function() {
            \$(this).click(function() {
                var type = \$(this).attr(\"type\");
                var input = document.createElement(\"input\");
                input.type = \$(this).attr(\"type\");
                if(type == \"textarea\"){
                    input = document.createElement(\"textarea\")
                    \$(input).width(\"100%\");
                }
                \$(input).css(\"color\", \"black\");
                \$(input).attr(\"title\", \"Presione enter al finalizar para guardar cambios\")
                \$(input).addClass(\"input-soft\");
                
                \$(this).find(\"b:first\").remove();
                var span = \$(this);
                \$(input).val(\$(this).html());
                \$(this).replaceWith(input);

                \$(input).keyup(function(event) {
                    if (event.keyCode == 13 && !event.shiftKey) {
                        event.preventDefault();
                        var value = \$(input).val();
                        \$(this).attr(\"disabled\", \"\");
                        \$.ajax({
                            url: url,
                            data: {
                                identifier: \$(span).attr(\"identifier\"),
                                value: value
                            },
                            type: \"POST\",
                            success: function(result) {
                                var txt = '";
            // line 40
            echo $this->getContext($context, "edit");
            echo "' + result.value;
                                \$(span).html(txt);
                                \$(\"[identifier=\" + \$(span).attr(\"identifier\") + \"]\").html(txt);
                                prepareSegments(url);
                            }
                        });
                        \$(this).replaceWith(span);
                        \$(span).html('<img src=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/img/loading_mini.gif"), "html", null, true);
            echo "\" align=\"top\" height=\"' + \$(span).height() + '\"/> <span style=\"font-size: ' + \$(span).css(\"font-size\") + '; color: #09C;\">Guardando...</span>');
                    }
                });

                //\$(input).mouseleave(function() {
                //});
            });
        });
    }
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Segment:segment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 40,  39 => 4,  177 => 87,  167 => 83,  163 => 82,  153 => 78,  144 => 75,  141 => 74,  135 => 72,  122 => 65,  115 => 63,  109 => 61,  107 => 60,  91 => 51,  82 => 50,  77 => 32,  75 => 31,  37 => 3,  132 => 53,  128 => 68,  124 => 51,  116 => 49,  112 => 62,  100 => 45,  95 => 44,  93 => 43,  90 => 47,  38 => 8,  26 => 4,  21 => 2,  19 => 1,  193 => 50,  187 => 15,  182 => 9,  151 => 9,  139 => 7,  136 => 54,  131 => 52,  123 => 51,  120 => 50,  113 => 49,  88 => 29,  81 => 28,  74 => 24,  70 => 27,  62 => 16,  58 => 23,  54 => 13,  50 => 14,  45 => 10,  42 => 11,  30 => 5,  27 => 1,  383 => 148,  376 => 144,  373 => 143,  359 => 137,  351 => 136,  344 => 134,  339 => 131,  335 => 130,  327 => 128,  324 => 127,  321 => 126,  319 => 125,  314 => 124,  312 => 123,  307 => 122,  305 => 121,  301 => 120,  298 => 119,  294 => 118,  291 => 117,  289 => 116,  286 => 115,  280 => 111,  274 => 110,  264 => 108,  261 => 107,  257 => 106,  252 => 104,  239 => 94,  235 => 93,  231 => 92,  227 => 91,  221 => 87,  219 => 86,  213 => 83,  206 => 78,  195 => 75,  190 => 74,  184 => 91,  179 => 70,  176 => 8,  173 => 68,  171 => 84,  166 => 66,  164 => 65,  159 => 81,  157 => 63,  154 => 62,  150 => 77,  145 => 8,  134 => 56,  129 => 55,  119 => 53,  108 => 47,  104 => 46,  99 => 49,  94 => 48,  66 => 26,  57 => 15,  49 => 21,  43 => 6,  40 => 9,  35 => 15,  28 => 3,);
    }
}
