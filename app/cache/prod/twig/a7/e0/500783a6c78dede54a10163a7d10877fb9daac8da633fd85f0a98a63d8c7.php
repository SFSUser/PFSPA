<?php

/* AcmeSFSBundle:Schema:list_query.html.twig */
class __TwigTemplate_a7e0500783a6c78dede54a10163a7d10877fb9daac8da633fd85f0a98a63d8c7 extends Twig_Template
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
        // line 32
        $context["table"] = $this;
        // line 33
        echo "

";
        // line 35
        if (($this->getAttribute($this->getAttribute($this->getContext($context, "app", true), "user", array(), "any", false, true), "hasRole", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "hasRole", array(0 => (((("ROLE_" . $this->getContext($context, "bundle")) . "_") . $this->getContext($context, "entity")) . "_NOT_LECTURA")), "method"))) {
            // line 36
            echo "    <tr>
        <td style=\"height: 4px;font-size: 20px;\" colspan=\"";
            // line 37
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getContext($context, "data")) > 0)) ? ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "data"), 0, array(), "array"), "columns")) + 1)) : (1)), "html", null, true);
            echo "\">No tiene permisos para visualizar el contenido de esta tabla.</td>
    </tr>
";
        } else {
            // line 40
            echo "    ";
            if (($this->getContext($context, "buttons") != "")) {
                // line 41
                echo "        <tr>
            <td style=\"padding-bottom: 40px\" colspan=\"";
                // line 42
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getContext($context, "data")) > 0)) ? ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "data"), 0, array(), "array"), "columns")) + 1)) : (1)), "html", null, true);
                echo "\">
                <div style=\"position: absolute\">";
                // line 43
                echo $this->getContext($context, "buttons");
                echo "</div>
            </td>
        </tr>
    ";
            } else {
                // line 47
                echo "        <tr>
            <td style=\"\" colspan=\"";
                // line 48
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getContext($context, "data")) > 0)) ? ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "data"), 0, array(), "array"), "columns")) + 1)) : (1)), "html", null, true);
                echo "\">
                ";
                // line 49
                if ((twig_length_filter($this->env, $this->getContext($context, "data")) > 0)) {
                    echo "<b>";
                    echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "data")), "html", null, true);
                    echo "</b> elementos en esta pagina";
                }
                // line 50
                echo "            </td>
        </tr>
    ";
            }
            // line 53
            echo "    
    ";
            // line 54
            echo $context["table"]->getrow($this->getContext($context, "permisions"), $this->getContext($context, "data_joined"), $this->getContext($context, "bundle"), $this->getContext($context, "entity"), $this->getContext($context, "entity2"), true, $this->getContext($context, "hide"));
            echo "
    ";
            // line 55
            echo $context["table"]->getrow($this->getContext($context, "permisions"), $this->getContext($context, "data"), $this->getContext($context, "bundle"), $this->getContext($context, "entity"), $this->getContext($context, "entity2"), false, $this->getContext($context, "hide"));
            echo "

    ";
            // line 57
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
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                // line 58
                echo "        ";
                if ((($this->getAttribute($this->getContext($context, "loop"), "index") == 1) && (twig_length_filter($this->env, $this->getContext($context, "resultados")) > 1))) {
                    // line 59
                    echo "        <tr>
            <td></td>
            ";
                    // line 61
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "x"), "columns"));
                    foreach ($context['_seq'] as $context["_key"] => $context["y"]) {
                        // line 62
                        echo "                <td>
                    ";
                        // line 63
                        if ($this->getAttribute($this->getContext($context, "resultados", true), $this->getAttribute($this->getContext($context, "y"), "column_name"), array(), "any", true, true)) {
                            // line 64
                            echo "                        <span class=\"text-toggler\">";
                            echo twig_escape_filter($this->env, twig_round($this->getAttribute($this->getContext($context, "resultados"), $this->getAttribute($this->getContext($context, "y"), "column_name")), 1, "floor"), "html", null, true);
                            echo "</span>
                    ";
                        }
                        // line 66
                        echo "                </td>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['y'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 68
                    echo "        </tr>
        ";
                }
                // line 70
                echo "    ";
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
            // line 71
            echo "    ";
            if (($this->getContext($context, "buttons") != "")) {
                // line 72
                echo "        <tr>
            <td style=\"padding-bottom: 40px\" colspan=\"";
                // line 73
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getContext($context, "data")) > 0)) ? ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "data"), 0, array(), "array"), "columns")) + 1)) : (1)), "html", null, true);
                echo "\">
                <div style=\"position: absolute\">";
                // line 74
                echo $this->getContext($context, "buttons");
                echo "</div>
            </td>
        </tr>
    ";
            }
            // line 78
            echo "    ";
        }
    }

    // line 1
    public function getrow($_p = null, $_data = null, $_bundle = null, $_entity = null, $_entity2 = null, $_joined = null, $_hide = null)
    {
        $context = $this->env->mergeGlobals(array(
            "p" => $_p,
            "data" => $_data,
            "bundle" => $_bundle,
            "entity" => $_entity,
            "entity2" => $_entity2,
            "joined" => $_joined,
            "hide" => $_hide,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "data"));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                if (($this->getContext($context, "joined") == $this->getAttribute($this->getContext($context, "x"), "joined"))) {
                    // line 3
                    echo "        ";
                    // line 4
                    echo "        ";
                    $context["tmp_permisions"] = $this->getAttribute($this->getContext($context, "x"), "permisions");
                    // line 5
                    echo "        
        <tr class=\"table-item-";
                    // line 6
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "id"), "html", null, true);
                    echo "\" data=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "id"), "html", null, true);
                    echo "\" id=\"element_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "id"), "html", null, true);
                    echo "\">
            <td style=\"text-align: center;\">
                ";
                    // line 8
                    if ($this->getAttribute($this->getContext($context, "tmp_permisions"), "escritura")) {
                        // line 9
                        echo "                    ";
                        if (($this->getContext($context, "entity2") != "")) {
                            // line 10
                            echo "                        <img ";
                            if ($this->getAttribute($this->getContext($context, "x"), "joined")) {
                                echo "style=\"display:none\"";
                            }
                            echo " class=\"list-action-add\" title=\"Agregar a la lista\" onclick=\"SchemaList_";
                            echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
                            echo ".joinElement(";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "id"), "html", null, true);
                            echo ", true)\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/add.png"), "html", null, true);
                            echo "\"/>
                        <img ";
                            // line 11
                            if ((!$this->getAttribute($this->getContext($context, "x"), "joined"))) {
                                echo "style=\"display:none\"";
                            }
                            echo " class=\"list-action-quit\" title=\"Quitar de la lista\" onclick=\"SchemaList_";
                            echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
                            echo ".joinElement(";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "id"), "html", null, true);
                            echo ", false)\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/close.png"), "html", null, true);
                            echo "\"/>
                    ";
                        }
                        // line 13
                        echo "                    <img class=\"list-action-edit\" onclick=\"SchemaList_";
                        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
                        echo ".editElement(";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "id"), "html", null, true);
                        echo ")\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/open.png"), "html", null, true);
                        echo "\"/>
                
                    ";
                        // line 15
                        if ($this->getAttribute($this->getContext($context, "tmp_permisions"), "modificar")) {
                            // line 16
                            echo "                        <img class=\"list-action-save\" onclick=\"SchemaList_";
                            echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
                            echo ".saveElement(";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "id"), "html", null, true);
                            echo ", '";
                            echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->md5EntityCrypt($this->getAttribute($this->getContext($context, "x"), "id"), $this->getContext($context, "bundle"), $this->getContext($context, "entity")), "html", null, true);
                            echo "')\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/save.png"), "html", null, true);
                            echo "\"/>
                    ";
                        }
                        // line 18
                        echo "                    ";
                        if ($this->getAttribute($this->getContext($context, "tmp_permisions"), "eliminar")) {
                            // line 19
                            echo "                        <img class=\"list-action-delete\" onclick=\"SchemaList_";
                            echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
                            echo ".deleteElement(";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "id"), "html", null, true);
                            echo ", '";
                            echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->md5EntityCrypt($this->getAttribute($this->getContext($context, "x"), "id"), $this->getContext($context, "bundle"), $this->getContext($context, "entity"), "ELIMINAR"), "html", null, true);
                            echo "')\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/Delete.png"), "html", null, true);
                            echo "\"/>
                    ";
                        }
                        // line 21
                        echo "                ";
                    }
                    echo "                     
                <img onclick=\"SchemaList_";
                    // line 22
                    echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
                    echo ".printElement(";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "id"), "html", null, true);
                    echo ")\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/print.png"), "html", null, true);
                    echo "\"/>
            </td>
            ";
                    // line 24
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "x"), "columns"));
                    foreach ($context['_seq'] as $context["_key"] => $context["y"]) {
                        if ((!$this->env->getExtension('app_extension')->inArray($this->getAttribute($this->getContext($context, "y"), "column_name"), $this->getContext($context, "hide")))) {
                            // line 25
                            echo "                ";
                            echo " 
                <td><span type=\"";
                            // line 26
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "column_type"), "html", null, true);
                            echo "\" class=\"text-toggler field-type-";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "column_type"), "html", null, true);
                            echo "\" name=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "y"), "column_name"), "html", null, true);
                            echo "\">";
                            echo $this->getAttribute($this->getContext($context, "y"), "list_formatted");
                            echo "</span></td>
                ";
                            // line 28
                            echo "            ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['y'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "        </tr>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Schema:list_query.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 29,  312 => 28,  302 => 26,  298 => 25,  293 => 24,  284 => 22,  279 => 21,  267 => 19,  264 => 18,  252 => 16,  250 => 15,  240 => 13,  227 => 11,  214 => 10,  211 => 9,  209 => 8,  200 => 6,  197 => 5,  194 => 4,  192 => 3,  186 => 2,  169 => 1,  164 => 78,  157 => 74,  153 => 73,  150 => 72,  147 => 71,  133 => 70,  129 => 68,  122 => 66,  116 => 64,  114 => 63,  111 => 62,  107 => 61,  103 => 59,  100 => 58,  83 => 57,  78 => 55,  74 => 54,  71 => 53,  66 => 50,  60 => 49,  56 => 48,  53 => 47,  46 => 43,  42 => 42,  39 => 41,  36 => 40,  30 => 37,  27 => 36,  25 => 35,  21 => 33,  19 => 32,);
    }
}
