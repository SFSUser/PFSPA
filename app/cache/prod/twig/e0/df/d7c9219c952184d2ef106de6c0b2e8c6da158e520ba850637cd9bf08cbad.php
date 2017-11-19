<?php

/* AcmeSFSBundle:Schema:inputs.html.twig */
class __TwigTemplate_e0dfd7c9219c952184d2ef106de6c0b2e8c6da158e520ba850637cd9bf08cbad extends Twig_Template
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
        echo "
";
        // line 14
        echo "
";
        // line 18
        echo "
";
        // line 27
        echo "
";
        // line 36
        echo "
";
        // line 41
        echo "
";
        // line 59
        echo "
";
        // line 81
        echo "
";
        // line 91
        echo "
";
        // line 96
        echo "
";
    }

    // line 2
    public function getpanel($_title = null, $_c = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $_title,
            "c" => $_c,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
            echo "</div>
        <div class=\"panel-body\">";
            // line 5
            echo $this->getContext($context, "c");
            echo "</div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 8
    public function getpanel_open($_title = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $_title,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 9
            echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">";
            // line 10
            echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
            echo "</div>
        <div class=\"panel-body\">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getpanel_close()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            echo "</div></div>";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 15
    public function getlist($_name = null, $_d = array(0 => "Valor"), $_title = "Listado de elementos")
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "d" => $_d,
            "title" => $_title,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 16
            echo "   ";
            echo $this->env->getExtension('app_extension')->fList(array("name" => $this->getContext($context, "name"), "columns" => $this->getContext($context, "d"), "title" => $this->getContext($context, "title")));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function getcheckbox($_name = null, $_desc = null, $_d = array())
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "desc" => $_desc,
            "d" => $_d,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "    <div class=\"input-group\">
        <span class=\"input-group-addon\">
            <input ";
            // line 22
            if ((!$this->getAttribute($this->getContext($context, "d", true), "id", array(), "any", true, true))) {
                echo "id=\"checkbox_";
                echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                echo "\"";
            }
            echo " ";
            if (array_key_exists("d", $context)) {
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "d"));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, $this->getContext($context, "k"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "v"), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            echo "  type=\"checkbox\"  name=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "\">
        </span>
        <label for=\"checkbox_";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "\" class=\"form-control\">";
            if ((!(null === $this->getContext($context, "desc")))) {
                echo twig_escape_filter($this->env, $this->getContext($context, "desc"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, strtr($this->getContext($context, "name"), array("_" => " "))), "html", null, true);
            }
            echo "</label>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 28
    public function gettextarea($_name = null, $_desc = null, $_d = array())
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "desc" => $_desc,
            "d" => $_d,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 29
            echo "    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">";
            // line 30
            if ((!(null === $this->getContext($context, "desc")))) {
                echo twig_escape_filter($this->env, $this->getContext($context, "desc"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, strtr($this->getContext($context, "name"), array("_" => " "))), "html", null, true);
            }
            echo "</div>
        <div class=\"panel-body\">
            <textarea ";
            // line 32
            if (array_key_exists("d", $context)) {
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "d"));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, $this->getContext($context, "k"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "v"), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            echo "  name=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "\" class=\"form-control\"></textarea>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function gettextarea_single($_name = null, $_desc = null, $_d = array())
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "desc" => $_desc,
            "d" => $_d,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 38
            echo "    <b>";
            if ((!(null === $this->getContext($context, "desc")))) {
                echo twig_escape_filter($this->env, $this->getContext($context, "desc"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, strtr($this->getContext($context, "name"), array("_" => " "))), "html", null, true);
            }
            echo "</b>
    <textarea ";
            // line 39
            if (array_key_exists("d", $context)) {
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "d"));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, $this->getContext($context, "k"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "v"), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            echo "  name=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "\" class=\"form-control\"></textarea>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function getselect($_name = null, $_desc = null, $_options = array(0 => "No refiere", 1 => "Si", 2 => "No"), $_d = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "desc" => $_desc,
            "options" => $_options,
            "d" => $_d,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 43
            echo "    <div class=\"input-group input-group-sm\">
        ";
            // line 44
            if (($this->getContext($context, "desc") != "")) {
                // line 45
                echo "            <span class=\"input-group-addon\">";
                if ((!(null === $this->getContext($context, "desc")))) {
                    echo twig_escape_filter($this->env, $this->getContext($context, "desc"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, strtr($this->getContext($context, "name"), array("_" => " "))), "html", null, true);
                }
                echo "</span>
        ";
            }
            // line 47
            echo "
        <select  name=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "\" ";
            if (array_key_exists("d", $context)) {
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "d"));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    if (($this->getContext($context, "v") != false)) {
                        echo twig_escape_filter($this->env, $this->getContext($context, "k"), "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $this->getContext($context, "v"), "html", null, true);
                        echo "\"";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            echo " class=\"form-control\" ";
            if (($this->getAttribute($this->getContext($context, "d", true), "required", array(), "any", true, true) && ($this->getAttribute($this->getContext($context, "d"), "required") != false))) {
                echo " required=\"\" ";
            }
            echo ">
            ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "options"));
            foreach ($context['_seq'] as $context["x"] => $context["k"]) {
                // line 50
                echo "                ";
                if ((!$this->env->getExtension('app_extension')->isAssoc($this->getContext($context, "options")))) {
                    // line 51
                    echo "                    <option>";
                    echo twig_escape_filter($this->env, $this->getContext($context, "k"), "html", null, true);
                    echo "</option>
                ";
                } else {
                    // line 53
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "x"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "k"), "html", null, true);
                    echo "</option>
                ";
                }
                // line 55
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['x'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        </select>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 60
    public function getradio($_name = null, $_desc = null, $_options = array(0 => "No refiere", 1 => "Si", 2 => "No"), $_d = array())
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "desc" => $_desc,
            "options" => $_options,
            "d" => $_d,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 61
            echo "    ";
            if ((!$this->getAttribute($this->getContext($context, "d", true), "required", array(), "any", true, true))) {
                // line 62
                echo "        ";
                $context["d"] = twig_array_merge($this->getContext($context, "d"), array("required" => true));
                // line 63
                echo "    ";
            }
            // line 64
            echo "    <div class=\"input-group input-group-sm\">
        ";
            // line 65
            if (($this->getContext($context, "desc") != "")) {
                // line 66
                echo "            <span class=\"input-group-addon\">";
                if ((!(null === $this->getContext($context, "desc")))) {
                    echo twig_escape_filter($this->env, $this->getContext($context, "desc"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, strtr($this->getContext($context, "name"), array("_" => " "))), "html", null, true);
                }
                echo "</span>
        ";
            }
            // line 68
            echo "
        <div style=\"height: auto;text-align: right;\" class=\"form-control\">
            ";
            // line 70
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "options"));
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
            foreach ($context['_seq'] as $context["x"] => $context["k"]) {
                // line 71
                echo "                ";
                if ((!$this->env->getExtension('app_extension')->isAssoc($this->getContext($context, "options")))) {
                    // line 72
                    echo "                    <input ";
                    if (array_key_exists("d", $context)) {
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "d"));
                        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                            if (($this->getContext($context, "v") != false)) {
                                echo twig_escape_filter($this->env, $this->getContext($context, "k"), "html", null, true);
                                echo "=\"";
                                echo twig_escape_filter($this->env, $this->getContext($context, "v"), "html", null, true);
                                echo "\"";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    echo " id=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getContext($context, "x"), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "k"), "html", null, true);
                    echo "\" type=\"radio\" name=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                    echo "\"/>
                ";
                } else {
                    // line 74
                    echo "                    <input ";
                    if (array_key_exists("d", $context)) {
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "d"));
                        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                            if (($this->getContext($context, "v") != false)) {
                                echo twig_escape_filter($this->env, $this->getContext($context, "k"), "html", null, true);
                                echo "=\"";
                                echo twig_escape_filter($this->env, $this->getContext($context, "v"), "html", null, true);
                                echo "\"";
                            }
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                    }
                    echo " id=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getContext($context, "x"), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "x"), "html", null, true);
                    echo "\" type=\"radio\" name=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                    echo "\"/>
                ";
                }
                // line 76
                echo "                <label style=\"margin: 0 5px 0 5px;\" for=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getContext($context, "x"), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "k"), "html", null, true);
                echo "</label>
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
            unset($context['_seq'], $context['_iterated'], $context['x'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 82
    public function getinput($_name = null, $_desc = null, $_d = array())
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "desc" => $_desc,
            "d" => $_d,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 83
            echo "    <div class=\"input-group input-group-sm\">
        ";
            // line 84
            if (($this->getContext($context, "desc") != "")) {
                // line 85
                echo "            <span class=\"input-group-addon\">";
                if ((!(null === $this->getContext($context, "desc")))) {
                    echo twig_escape_filter($this->env, $this->getContext($context, "desc"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, strtr($this->getContext($context, "name"), array("_" => " "))), "html", null, true);
                }
                echo "</span>
        ";
            }
            // line 87
            echo "
        <input name=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
            echo "\" ";
            if (array_key_exists("d", $context)) {
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "d"));
                foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                    echo twig_escape_filter($this->env, $this->getContext($context, "k"), "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "v"), "html", null, true);
                    echo "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            echo " class=\"form-control\"/>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 92
    public function getentity($_name = null, $_desc = null, $_data = null, $_d = array())
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "desc" => $_desc,
            "data" => $_data,
            "d" => $_d,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 93
            echo "    ";
            $context["forms"] = $this;
            // line 94
            echo "    ";
            echo $context["forms"]->getselect($this->getContext($context, "name"), $this->getContext($context, "desc"), $this->env->getExtension('app_extension')->fEntity($this->getContext($context, "data")), $this->getContext($context, "d"));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 97
    public function getimage($_name = null, $_image = "http://i.imgur.com/lY8kuJ4.png")
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $_name,
            "image" => $_image,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 98
            echo "    ";
            echo $this->env->getExtension('app_extension')->fImage(array("name" => $this->getContext($context, "name"), "image" => $this->getContext($context, "image")));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Schema:inputs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  679 => 98,  667 => 97,  653 => 94,  650 => 93,  636 => 92,  608 => 88,  605 => 87,  595 => 85,  593 => 84,  590 => 83,  577 => 82,  564 => 78,  541 => 76,  511 => 74,  481 => 72,  478 => 71,  461 => 70,  457 => 68,  447 => 66,  445 => 65,  442 => 64,  439 => 63,  436 => 62,  433 => 61,  419 => 60,  406 => 56,  400 => 55,  392 => 53,  386 => 51,  383 => 50,  379 => 49,  355 => 48,  352 => 47,  342 => 45,  340 => 44,  337 => 43,  323 => 42,  296 => 39,  287 => 38,  274 => 37,  245 => 32,  236 => 30,  233 => 29,  220 => 28,  200 => 24,  175 => 22,  171 => 20,  158 => 19,  144 => 16,  131 => 15,  112 => 13,  98 => 10,  95 => 9,  84 => 8,  70 => 5,  66 => 4,  63 => 3,  51 => 2,  46 => 96,  43 => 91,  40 => 81,  37 => 59,  34 => 41,  31 => 36,  28 => 27,  25 => 18,  22 => 14,  19 => 1,);
    }
}
