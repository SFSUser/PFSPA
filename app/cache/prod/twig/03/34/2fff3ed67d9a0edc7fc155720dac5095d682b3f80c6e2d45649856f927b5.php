<?php

/* AcmeSFSBundle:Schema:field_search.html.twig */
class __TwigTemplate_03342fff3ed67d9a0edc7fc155720dac5095d682b3f80c6e2d45649856f927b5 extends Twig_Template
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
        echo "<div class=\"searcher-box\">
    <div id=\"loader_search_box_";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" style=\"display: none;\">
        <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img/loading_circle.gif"), "html", null, true);
        echo "\"/> <b>Actualizando información...</b>
    </div>
    <div style=\"display: none;overflow: auto\" id=\"preview_search_box_";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\">
        ";
        // line 7
        if ((!$this->getContext($context, "readonly"))) {
            // line 8
            echo "            <div class=\"preview-options\">
                ";
            // line 9
            if ($this->getAttribute($this->getContext($context, "permisions"), "modificar")) {
                // line 10
                echo "                    <a onclick=\"SearchBox_";
                echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
                echo ".setLocker(true, 1)\" id=\"button_mod_";
                echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
                echo "\">Editar </a>
                ";
            }
            // line 12
            echo "                <div title=\"Haga click aqui para deseleccionar elemento\" id=\"button_clear_";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "\" class=\"close-clear\"></div>
            </div>
        ";
        }
        // line 15
        echo "        <div class=\"search-preview-content\"></div>
    </div>
    <div class=\"sty-box-padding-10\" id=\"main_search_box_";
        // line 17
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\">
        <div class=\"input-group\">
            <span id=\"search_label_";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"input-group-addon\"><b>";
        echo twig_escape_filter($this->env, $this->getContext($context, "entity_name"), "html", null, true);
        echo "</b>:</span>
            <input id=\"input_search_";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\" placeholder=\"Buscar por: ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "search_in"));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            echo twig_escape_filter($this->env, strtr($this->getContext($context, "x"), array("%" => "")), "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "\">

            <span class=\"input-group-btn\">
                <input value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
        echo "\" title=\"Haga click aqui para quitar elemento seleccionado\" class=\"input-group-addon input-clear\" id=\"input_search_value_";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" default=\"\" type=\"text\" ";
        if ($this->getContext($context, "required")) {
            echo "required=\"\"";
        }
        echo " name=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\"/>
                ";
        // line 24
        if ((!$this->getContext($context, "readonly"))) {
            // line 25
            echo "                    <a id=\"button_search_";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo "\" class=\"btn btn-info\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/search_mini.png"), "html", null, true);
            echo "\"/></a>

                    ";
            // line 27
            if ($this->getAttribute($this->getContext($context, "permisions"), "crear")) {
                // line 28
                echo "                        <a onclick=\"SearchBox_";
                echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
                echo ".setLocker(true, 1)\" title=\"Crear nuevo elemento\" style=\"border-radius: 0 10px 10px 0;\" id=\"button_add_";
                echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
                echo "\" class=\"btn btn-warning\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/add2.png"), "html", null, true);
                echo "\"/></a>
                        ";
            }
            // line 30
            echo "                        ";
            // line 33
            echo "                    ";
        }
        // line 34
        echo "            </span>
        </div>
    </div>
    <div id=\"loader2_search_box_";
        // line 37
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" style=\"display: none;\">
        <img src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img/loading_mini.gif"), "html", null, true);
        echo "\"/> <b>Buscando resultados...</b>
    </div>
    ";
        // line 42
        echo "</div>

<div style=\"display: none;opacity: 0.3;background-color: black;\" id=\"locker_search_box_";
        // line 44
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"locker\"></div>
<div style=\"display: none;\" id=\"form_search_box_";
        // line 45
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"locker\">
    <div class=\"locker-inner\">
        <a class=\"action-savelocker btn btn-warning pull-right sty-box-margin-left-5\" onclick=\"SearchBox_";
        // line 47
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo ".saveLocker()\">Cerrar y guardar</a>
        <a class=\"btn btn-danger pull-right sty-box-margin-left-5\" onclick=\"SearchBox_";
        // line 48
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo ".setLocker(false)\">Cerrar</a>
        <a class=\"btn btn-info pull-right sty-box-margin-left-5\" onclick=\"SearchBox_";
        // line 49
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo ".setLocker(true, 2)\">Listado</a>
        <a class=\"btn btn-success pull-right sty-box-margin-left-5\" onclick=\"SearchBox_";
        // line 50
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo ".setLocker(true, 1)\">Elemento</a>
        <h3>Editor: ";
        // line 51
        echo twig_escape_filter($this->env, $this->getContext($context, "entity_name"), "html", null, true);
        echo "</h3>
        <hr>
        <iframe frameborder=\"0\" style=\"width: 100%;height: 85%;\" src=\"\"></iframe>
    </div>
</div>
<div id=\"floating_box_";
        // line 56
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" style=\"display: none;\" class=\"locker\">
    <div class=\"floating-search locker-inner\">
        <center>
            <b>Por favor seleccione un elemento:</b>
        </center>
        <div class=\"data-box floating-search-box\"></div>
        <center>
            <a class=\"btn btn-danger sty-box-margin-top-5\" style=\"cursor: pointer\" onclick=\"SearchBox_";
        // line 63
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo ".setResultsBox(false)\">Cerrar listado</a>
        </center>
    </div>
</div>
<style>
    .preview-options{
        position: relative;
        float: right;

        border-color: gainsboro;
        border-width: 1px;
        border-style: solid;
        padding: 3px;
        border-radius: 3px;
    }
    .input-clear {
        background-image: url(";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/close.png"), "html", null, true);
        echo ");
        background-position: center;
        background-repeat: no-repeat;
    }
    .close-clear {
        background-image: url(";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/close.png"), "html", null, true);
        echo ");
        background-position: center;
        background-repeat: no-repeat;
        height: 10px;
        width: 10px;
        display: inline-block;
    }
    .locker-inner{
        background-color: white;
        border-radius: 5px;
        padding: 10px;
        border-width: 1px;
        border-style: solid;
        max-width: 900px;
        margin: auto;
        margin-top: 70px;
        height: auto;
        overflow: auto;
    }
    .locker {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: 99999999999;
        background-image: url(";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img/bg_trans.png"), "html", null, true);
        echo ");
    }
    .searcher-box{
        border-style: solid;
        border-width: 1px;
        border-radius: 5px;
        padding: 5px;
        margin-bottom: 2px;
        border-color: gainsboro;
    }
    .floating-search-box{
        max-height: 300px;
        overflow-y: scroll;
        border-style: solid;
        border-width: 1px;
        border-radius: 5px;
        padding: 10px;
        z-index: 100;
        background-color: white;
        cursor: pointer;
    }
    .floating-search{
        -webkit-box-shadow: -2px 2px 30px -1px rgba(0,0,0,0.75);
        -moz-box-shadow: -2px 2px 30px -1px rgba(0,0,0,0.75);
        box-shadow: -2px 2px 30px -1px rgba(0,0,0,0.75);

        //margin: -5px 0 0 -20px;
        min-width: 250px;
        max-width: 500px;
        border-style: solid;
        border-width: 1px;
        border-radius: 5px;
        background-color: white;
        padding: 3px;
        z-index: 100;
    }
    .floating-search-box > div:hover{
        background-color: gainsboro;
    }
    .data-box>*{
        border-bottom: dotted;
        border-bottom-color: gainsboro;
        border-bottom-width: 1px;
    }
</style>
<script>
    var SearchBox_";
        // line 156
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo " = {
        target_onchange: null,
        flag_search_items: false,
        last_search: \"none\",
        search_in: JSON.parse('";
        // line 160
        echo twig_jsonencode_filter($this->getContext($context, "search_in"));
        echo "'),
        conds: JSON.parse('";
        // line 161
        echo twig_jsonencode_filter($this->getContext($context, "conds"));
        echo "'),
        object_main: '#main_search_box_";
        // line 162
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
        object_loader_select: \"#loader_search_box_";
        // line 163
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\",
        object_loader: \"#loader2_search_box_";
        // line 164
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\",
        object_results: \"#floating_box_";
        // line 165
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\",
        object_select: \"#preview_search_box_";
        // line 166
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\",
        object_input: \"#input_search_value_";
        // line 167
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\",
        object_input_search: \"#input_search_";
        // line 168
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\",
        object_button: \"#button_search_";
        // line 169
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\",
        object_button_add: \"#button_add_";
        // line 170
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\",
        object_button_mod: \"#button_mod_";
        // line 171
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\",
        object_button_clear: \"#button_clear_";
        // line 172
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\",
        object_label: \"#search_label_";
        // line 173
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\",
        object_form: \"#form_search_box_";
        // line 174
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\",
        url_add: \"";
        // line 175
        echo $this->env->getExtension('routing')->getPath("schema_editor", array("entity" => $this->getContext($context, "entity_name"), "bundle" => $this->getContext($context, "bundle"), "modal" => "true", "id" => 0));
        echo "\",
        url_list: \"";
        // line 176
        echo $this->env->getExtension('routing')->getPath("schema_list", array("entity" => $this->getContext($context, "entity_name"), "bundle" => $this->getContext($context, "bundle"), "modal" => "true"));
        echo "\",
        setLocker: function (s, mode) {
            \$(this.object_results).hide();

            var locker_form = \$(this.object_form);
            var frame = \$(this.object_form).find(\"iframe\");
            frame.attr(\"src\", \"\");
            if (s) {
                \$(\"#locker_search_box_";
        // line 184
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo ", \" + this.object_form).show();
                switch (mode) {
                    case 2:
                        frame.attr(\"src\", this.url_list);
                        \$(locker_form).find(\".action-savelocker\").hide();
                        break;
                    default:
                    case 1:
                        frame.attr(\"src\", this.url_add + \"&id=\" + \$(this.object_input).val());
                        \$(locker_form).find(\".action-savelocker\").show();
                        break;
                }
                frame.height(\$(window).height() - 200);
            } else {
                \$(\"#locker_search_box_";
        // line 198
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo ", \" + this.object_form).hide();
                var selected_id = \$(frame.get(0).contentDocument).find(\"[name=id]:first\").val();
                if (selected_id !== null && selected_id !== \"\") {
                    \$(this.object_input).val(selected_id).trigger(\"change\");
                }
                frame.attr(\"src\", \"\");
                //this.searchItems();
            }
        },
        saveLocker: function(){
            var c = this;
            var frame = \$(this.object_form).find(\"iframe\");
            var schema = \$(frame.get(0).contentDocument).find(\".main-container-editor\").prop(\"schema\");
            if(schema !== null && schema !== undefined){
               console.log(schema);
               if(schema.isFormValid()){
                  schema.submit(function(e){
                     if(e){
                        c.setLocker(false);
                     }
                  });
               } else {
                  schema.showMessage(\"danger\", \"Formulario incompleto\", \"Por favor diligencie todos los campos\");
               }
            }
        },
        setResultsBox: function (s) {
            var context = this;
            if (s) {
                \$(context.object_results).show();
            } else {
                \$(context.object_results).hide();
            }
        },
        searchItems: function () {
            var context = this;
            if (context.flag_search_items)
                return;
            context.flag_search_items = true;
            var search = \$(context.object_input_search).val().trim();
            context.last_search = search;

            \$(context.object_input_search).val(\"\");
            //console.log(\"Search for: \" + search);
            context.toggleView(0);
            \$(context.object_loader).show();
            \$.ajax({
                url: '";
        // line 245
        echo $this->env->getExtension('routing')->getPath("url_search_service");
        echo "',
                data: {
                    entity: '";
        // line 247
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "',
                    key: '";
        // line 248
        echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
        echo "',
                    search_in: context.search_in,
                    conds: context.conds,
                    token: '";
        // line 251
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "',
                    search: search
                },
                error: function (e) {
                    console.log(e);

                    context.flag_search_items = false;
                    \$(context.object_loader).hide();
                    \$(context.object_results).find(\".data-box\").html('<b>Error al obtener resultados</b>');
                    \$(context.object_results).show();
                    context.toggleView(1);
                },
                success: function (r) {
                    context.flag_search_items = false;
                    \$(context.object_loader).hide();

                    var fb = \$(context.object_results).find(\".data-box\");
                    \$(context.object_results).find(\".floating-search\").width(\$(context.object_main).width());
                    \$(fb).html(r.html_out);
                    context.setResultsBox(true);
                    \$(fb).children(\"b\").click(function () {
                        context.setResultsBox(false);
                    });

                    \$(fb).children(\"div\").click(function () {
                        context.setResultsBox(false);
                        var cur_key = \$(this).attr(\"key\");
                        \$(context.object_input).val(cur_key).trigger(\"change\");
                    });

                    var results_count = \$(fb).children(\"div\").size();
                    if (results_count < 1) {
                        \$(fb).html('<b>No se obtuvieron resultados ";
        // line 283
        if ($this->getAttribute($this->getContext($context, "permisions"), "modificar")) {
            echo " <a onclick=\"SearchBox_";
            echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
            echo ".setLocker(true, 1)\">Crear nuevo</a>";
        }
        echo "</b>');
                    }

                    //Si el resultado es el mismo, seleccionarlo automaticamente.
                    context.toggleView(1);
                    if (results_count === 1) {
                        context.toggleView(0);
                        \$(fb).children(\"div\").click();
                    }
                },
                complete: function(){
                }
            });
        },
        toggleView: function (st) {
            \$(this.object_main).hide();
            \$(this.object_select).hide();
            switch (st) {
                //case 0:
                //    break;
                case 1:
                    \$(this.object_main).show();
                    break;
                case 2:
                    \$(this.object_select).show();
                    break;
            }
        },
        previewElement: function (id) {
            var context = this;
            context.toggleView(0);
            \$(context.object_results).find(\".data-box\").html(\"\");
            \$(context.object_select).find(\".search-preview-content\").html(\"\");
            \$(context.object_loader_select).show();

            //\$(context.object_button_add).show();
            //\$(context.object_button_mod).hide();

            \$.ajax({
                url: '";
        // line 322
        echo $this->env->getExtension('routing')->getPath("url_search_service");
        echo "',
                data: {
                    entity: '";
        // line 324
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "',
                    key: '";
        // line 325
        echo twig_escape_filter($this->env, $this->getContext($context, "key"), "html", null, true);
        echo "',
                    id: id
                },
                success: function (r) {
                    var params = r.ajax_data !== undefined ? r.ajax_data : [];
                    \$(context.object_select).find(\".search-preview-content\").html(r.html_out);

                    if (params.length > 0) {
                        //\$(context.object_button_add).hide();
                        //\$(context.object_button_mod).show();
                        context.toggleView(2);
                    } else {
                        \$(context.object_input).val(\"\");
                        context.toggleView(1);
                    }

                    \$(context.object_loader_select).hide();
                    if (context.target_onchange !== null) {
                        context.target_onchange(params);
                    }
                    //\$(context.object_loader_select).hide();
                },
                error: function () {
                    \$(context.object_select).find(\".search-preview-content\").html(\"<b>\" + id + \" - Error al obtener información</b>\");
                    context.toggleView(1);
                },
                complete: function () {
                }
            });
        },
        setValue: function(v){
            \$(this.object_input).val(v).trigger(\"change\");
        },
        getValue: function(){
            return \$(this.object_input).val();
        },
        clear: function(){
            this.toggleView(1);
            \$(this.object_input).val(\"\").trigger(\"change\");
        },
        prepare: function () {
            var context = this;
            var inp_obj = \$(context.object_input);
            inp_obj.change(function () {
                //alert(\"change\");
                context.previewElement(\$(this).val());
            });

            ";
        // line 373
        if (((!$this->getContext($context, "value")) == "")) {
            // line 374
            echo "               context.previewElement(inp_obj.val());
            ";
        }
        // line 376
        echo "            //context.previewElement(inp_obj.val());

    ";
        // line 378
        if ((!$this->getContext($context, "readonly"))) {
            // line 379
            echo "                \$(context.object_button_clear).click(function () {
                    //console.log(\"VLICKED\");
                    //console.log(context);
                    //alert(\"CHA\");
                    context.clear();
                });
                \$(context.object_button).click(function () {
                    //console.log(\"VLICKED\");
                    //console.log(context);
                    context.searchItems();
                });
                \$(context.object_input_search).keypress(function (e) {
                    if (e.which === 13) {
                        //console.log(\"KEYPRESS\");
                        //console.log(context);
                        e.preventDefault();
                        context.searchItems();
                    }
                });
                \$(context.object_label).click(function () {
                    \$(context.object_results).slideUp();
                });
    ";
        }
        // line 402
        echo "            }
        };
        var SearchBox_";
        // line 404
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo " = SearchBox_";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo ";
        \$(function () {
            SearchBox_";
        // line 406
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo ".prepare();
        });
</script>
";
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Schema:field_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  646 => 406,  639 => 404,  635 => 402,  610 => 379,  608 => 378,  604 => 376,  600 => 374,  598 => 373,  547 => 325,  543 => 324,  538 => 322,  492 => 283,  457 => 251,  451 => 248,  447 => 247,  442 => 245,  392 => 198,  375 => 184,  360 => 175,  356 => 174,  340 => 170,  336 => 169,  332 => 168,  328 => 167,  324 => 166,  320 => 165,  316 => 164,  312 => 163,  308 => 162,  304 => 161,  300 => 160,  293 => 156,  244 => 110,  215 => 84,  207 => 79,  188 => 63,  178 => 56,  170 => 51,  166 => 50,  162 => 49,  158 => 48,  154 => 47,  149 => 45,  145 => 44,  141 => 42,  136 => 38,  132 => 37,  124 => 33,  122 => 30,  112 => 28,  110 => 27,  102 => 25,  100 => 24,  88 => 23,  72 => 20,  61 => 17,  57 => 15,  50 => 12,  42 => 10,  40 => 9,  37 => 8,  26 => 4,  22 => 3,  1154 => 765,  1150 => 763,  1133 => 758,  1127 => 757,  1123 => 755,  1108 => 742,  1105 => 741,  1095 => 733,  1092 => 732,  1077 => 719,  1075 => 718,  1072 => 717,  1069 => 716,  1046 => 695,  1043 => 694,  1040 => 693,  1035 => 690,  1029 => 689,  1018 => 683,  1010 => 678,  1004 => 675,  1000 => 673,  998 => 672,  995 => 671,  990 => 668,  988 => 667,  983 => 664,  981 => 663,  976 => 661,  971 => 659,  966 => 658,  955 => 657,  941 => 646,  935 => 642,  923 => 639,  915 => 638,  907 => 637,  904 => 636,  899 => 635,  888 => 627,  881 => 623,  869 => 616,  862 => 614,  856 => 613,  849 => 612,  841 => 610,  839 => 609,  836 => 608,  833 => 607,  825 => 605,  823 => 604,  818 => 603,  814 => 602,  807 => 598,  802 => 597,  798 => 595,  790 => 593,  788 => 592,  776 => 591,  773 => 590,  771 => 589,  767 => 588,  761 => 585,  756 => 584,  750 => 582,  748 => 581,  730 => 566,  680 => 519,  594 => 436,  588 => 433,  546 => 394,  537 => 388,  528 => 382,  493 => 349,  487 => 348,  483 => 347,  472 => 339,  463 => 333,  445 => 318,  432 => 308,  415 => 293,  409 => 292,  396 => 282,  383 => 272,  374 => 266,  368 => 263,  364 => 176,  352 => 173,  348 => 172,  344 => 171,  341 => 250,  313 => 225,  302 => 217,  271 => 189,  262 => 183,  252 => 175,  250 => 174,  143 => 70,  127 => 34,  118 => 51,  114 => 50,  108 => 47,  104 => 46,  98 => 45,  94 => 44,  90 => 43,  86 => 42,  82 => 41,  78 => 40,  74 => 39,  70 => 38,  66 => 19,  59 => 33,  29 => 5,  24 => 3,  21 => 2,  19 => 2,  48 => 8,  46 => 7,  41 => 6,  35 => 7,  33 => 3,  52 => 10,  47 => 12,  45 => 11,  39 => 7,  36 => 6,  31 => 6,  28 => 2,);
    }
}
