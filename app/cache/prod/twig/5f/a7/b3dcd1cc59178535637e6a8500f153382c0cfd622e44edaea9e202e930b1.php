<?php

/* AcmeSiteBundle:OFM:usuario.html.twig */
class __TwigTemplate_5fa7b3dcd1cc59178535637e6a8500f153382c0cfd622e44edaea9e202e930b1 extends Twig_Template
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
        echo "    <div class=\"www-header\" style=\"background-image: linear-gradient(to bottom, transparent, white), url(/img/pfspa_2017.JPG)\">
        <span>";
        // line 9
        if ((!(null === $this->getContext($context, "data")))) {
            echo "Fray ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "data"), "nombre") . " ") . $this->getAttribute($this->getContext($context, "data"), "apellidos")), "html", null, true);
        } else {
            echo "Iniciar sesión";
        }
        echo "</span>
    </div>


    ";
        // line 13
        if ((null === $this->getContext($context, "data"))) {
            // line 14
            echo "        <div class=\"panel panel-default fixer\" style=\"max-width: 400px; margin-top: -100px;\">
            <div class=\"panel-heading\" style=\"text-align: left\">Inicio de sesión de hermanos</div>
            <div class=\"panel-body\">
                <center>
                    <img src=\"/img/logo.png\" width=\"200px\">
                    <form id=\"user_login\">
                        <div style=\"max-width: 400px;\" class=\"sty-box-padding-20\">
                            <b>Por inicie sesión:</b>
                            <div class=\"input-group sty-box-margin-bottom-5\">
                                <span class=\"input-group-addon\">Usuario</span>
                                <input type=\"text\" class=\"form-control\" name=\"usuario\" placeholder=\"Nombre de usuario\">
                            </div>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\">Contraseña</span>
                                <input type=\"password\" class=\"form-control\" name=\"contrasenia\" placeholder=\"Contraseña\">
                            </div>
                            <div style=\"margin-top: 5px;\" id=\"user_message\"></div>
                            <input class=\"btn btn-success\" type=\"submit\" value=\"Iniciar sesión\">
                        </div>
                    </form>
                </center>
            </div>
        </div>
        <script>
            \$(\"#user_login\").submit(function (e) {
                var form = this;
                e.preventDefault();
                \$(form).css({opacity: \"0.5\"});
                \$.ajax({
                    url: '";
            // line 43
            echo $this->env->getExtension('routing')->getPath("url_usuario_login");
            echo "',
                    data: \$(\"#user_login\").serialize(),
                    type: \"POST\",
                    success: function (e) {
                        console.log(e);
                        switch (e.result) {
                            case 1:
                                location.reload();
                                break;
                            case 0:
                                Utils.showBootstrapNotify(\"#user_message\", \"warning\", \"Error:\", \"Nombre de usuario o contraseña no válido.\");
                                break;
                            default:
                                break;
                        }
                    },
                    error: function (e) {
                        console.log(e);
                        Utils.showBootstrapNotify(\"#user_message\", \"danger\", \"Error:\", \"Error en la respuesta del servidor.\");
                    },
                    complete: function () {
                        \$(form).css({opacity: \"1\"});
                    }
                });
            });
        </script>
    ";
        } else {
            // line 70
            echo "        <div class=\"fixer sheet-art sty-box-overflow-auto sty-box-padding-5 \" style=\"margin-top: -90px;min-height: 800px;\">
            <div class=\"sty-box-overflow-auto\">
                <script>
                    var data = JSON.parse('";
            // line 73
            echo twig_jsonencode_filter($this->getContext($context, "data2"));
            echo "');
                    var disableds = [\"fraternidad\", \"cargoprov\", \"nick\"];
                    \$(function () {
                        //Cargar datos
                        for (var x in data) {
                            var n = x;
                            x = data[x];
                            var el = \$(\"[name=\" + n + \"]\");
                            if (el.attr(\"type\") === \"date\") {
                                console.log(\"found!\");
                                el.val(x.date.split(\" \")[0]);
                                console.log(x.date);
                            } else {
                                el.val(x);
                            }
                            el.trigger(\"change\");
                        }
                        \$(\"[name=clave2]\").val(\$(\"[name=clave]\").val());
                        for (var x in disableds) {
                            x = disableds[x];
                            \$(\"[name=\" + x + \"]\").attr(\"readonly\", true)
                        }
                    });
                    function unlogin(b) {
                        setElementDisableState(b, false);
                        \$.ajax({
                            url: '";
            // line 99
            echo $this->env->getExtension('routing')->getPath("url_usuario_login");
            echo "',
                            data: {
                                mode: \"unlogin\"
                            },
                            success: function (e) {
                                setElementDisableState(b, true);
                                switch (e.result) {
                                    case 1:
                                        location.reload();
                                        break;
                                    default:

                                        break;
                                }
                            }
                        });
                    }
                </script>
                <button onclick=\"unlogin(this)\" class=\"btn btn-danger pull-right\">Cerrar sesión</button>
                <h1>Bienvenido, ";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "data"), "nombre"), "html", null, true);
            echo "</h1>
                <hr class=\"featurette-divider\">
                <div>
                    ";
            // line 122
            echo "
                    <form id=\"hermano_data\">
                        ";
            // line 124
            $context["forms"] = $this->env->loadTemplate("AcmeSFSBundle:Schema:inputs.html.twig");
            // line 125
            echo "                        ";
            $this->env->loadTemplate("AcmeSiteBundle:Schemas:Hermanos.html.twig")->display(array_merge($context, array("forms" => $this->getContext($context, "forms"))));
            // line 126
            echo "                        <div style=\"margin-top: 5px;\" id=\"user_message\"></div>
                        <div style=\"padding: 10px;\">
                            <center>
                                <button id=\"buttom_submit\" class=\"btn btn-success\">Guardar cambios</button>
                            </center>
                        </div>
                    </form>
                    <script>
                        \$(function () {
                            \$(\"#hermano_data\").submit(function (e) {
                                var form = \$(this);
                                e.preventDefault();
                                if(\$(\"[name=clave]\").val() !== \$(\"[name=clave2]\").val()){
                                    Utils.showBootstrapNotify(\"#user_message\", \"danger\", \"Error:\", \"Las contraseñas no coinciden.\");

                                    return;
                                }
                                setElementDisableState(\"#hermano_data\", false);
                                \$.ajax({
                                    url: '";
            // line 145
            echo $this->env->getExtension('routing')->getPath("url_usuario_login");
            echo "',
                                    data: \$(form).serialize()+\"&mode=save\",
                                    type: \"POST\",
                                    success: function (e) {
                                        console.log(e);
                                        switch (e.result) {
                                            case 1:
                                                Utils.showBootstrapNotify(\"#user_message\", \"success\", \"Correcto:\", \"Cambios guardados.\");

                                                break;
                                            case 0:
                                                //location.reload();
                                                break;
                                        }
                                    },
                                    error: function (e) {
                                        console.log(e);
                                    },
                                    complete: function (e) {
                                        setElementDisableState(\"#hermano_data\", true);
                                    }
                                });
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:OFM:usuario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 145,  192 => 126,  189 => 125,  187 => 124,  183 => 122,  177 => 118,  155 => 99,  126 => 73,  121 => 70,  91 => 43,  60 => 14,  58 => 13,  46 => 9,  43 => 8,  40 => 7,  35 => 6,  30 => 4,);
    }
}
