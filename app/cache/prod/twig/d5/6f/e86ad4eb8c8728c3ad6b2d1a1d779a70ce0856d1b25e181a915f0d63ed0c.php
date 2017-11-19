<?php

/* AcmeSFSBundle:Schema:editor.html.twig */
class __TwigTemplate_d56fe86ad4eb8c8728c3ad6b2d1a1d779a70ce0856d1b25e181a915f0d63ed0c extends Twig_Template
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
        if ((!(null === $this->getContext($context, "print_headers")))) {
            // line 3
            echo "    <!-- IGNORE HEADERS -->
    ";
            // line 4
            echo $this->env->getExtension('app_extension')->util("header", array("header" => ""));
            echo "
";
        }
        // line 6
        echo "
<style>
    #";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "{
        overflow: auto;
        width: 100%;
    }
    #";
        // line 12
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo " > div{
        padding: 10px;
        overflow: auto;
        width: 50%;
        float: left;
    }
    #";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo " > div > label{
        display:inline-block;
        width:30%;
        overflow:hidden;
        float:left;
    }
    #";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo " > div > input, #";
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo " > div > textArea, #";
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo " > div > select,  #";
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo " > div > div{
        display:inline-block;
        width:70%;
        border-radius: 5px;
        border-style: solid;
        border-width: 1px;
        padding: 5px;
        border-color: #DDDDDD;
        float:left;
    }

    #";
        // line 35
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo " .mce-container {
        padding: 0px;
        margin-top: 5px;
        width:auto;
    }
    #";
        // line 40
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo " .mce-container > div {
        float: none;
        display:block;
        width:auto;
    }
    .editor-box{
        border-style: solid;
        border-color: #00afea;
        border-width: 1px;
    }
    .editor-title{
        background-color: #00afea;
        color:white;
        padding: 5px;
    }
    #SchemeEditor_";
        // line 55
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo " [required] {
        border-color: red;
        //color: yellowgreen;
        box-shadow: 0px 0px 6px 0px red;
    }
    #SchemeEditor_";
        // line 60
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "*:invalid {
        border-color: red;
        color: red;
        box-shadow: 0px 0px 6px 0px red;
    }
    #SchemeEditor_";
        // line 65
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo " *:valid {
        border-color: yellowgreen;
        //color: yellowgreen;
        box-shadow: none;
    }
    #SchemeEditor_";
        // line 70
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo " [readonly] {
        border-color: gainsboro;
        //color: yellowgreen;
        box-shadow: none;
    }
    #SchemeEditor_";
        // line 75
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo " *:focus {
        //background-color: #D8D5D8;
        background-color: #E8EFF2;
        //color: yellowgreen;
        box-shadow: none;
    }
    .input-group{
        margin-bottom: 3px;
    }
    .subform-label{
        margin-bottom: 5px;
        padding: 3px;
        height: 20px;
        background-image: linear-gradient(#ccc, transparent);
        border-radius: 10px 10px 0 0;
        text-align: center;
        border-style: solid;
        border-color:gray;
        border-width: 1px 0 0 0;
    }
    .subform-box{
        background-color: #EBE5FC;
        margin: 10px;
        border-radius: 10px;
    }
    /*.subform-box:hover{
        background-color: #D1C5E0;
    }*/
    .navbar-nav>li{cursor: pointer;}
    .navbar-nav>li>a{text-shadow: 1px 1px white;}
    .action-save:hover{background-color: #5cb85c;}
    .action-save:active{background-color: #4cae4c;}
    .action-create:hover{background-color: #f0ad4e;}
    .action-create:active{background-color: #eea236;}
    .action-new:hover{background-color: #5bc0de;}
    .action-new:active{background-color: #46b8da;}
    .action-print:hover{background-color: #428bca;color:white;}
    .action-print:active{background-color: #357ebd;color:white;}
    .action-defaults:hover{background-color: #EBE5FC;}

    ";
        // line 118
        echo "
    #SchemeEditor_";
        // line 119
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo " .panel{
        margin-bottom: 5px;
    }
    #SchemeEditor_";
        // line 122
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo " .panel-body{
        //padding: 3px;
    }
    #SchemeEditor_";
        // line 125
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo " .alert{
        //padding: 3px;
        margin-bottom: 0px;
    }
</style>
";
        // line 205
        echo "
";
        // line 206
        $context["btn"] = $this;
        // line 207
        $context["forms"] = $this->env->loadTemplate("AcmeSFSBundle:Schema:inputs.html.twig");
        // line 208
        echo "
<div class=\"main-container-editor\" id=\"SchemeEditor_";
        // line 209
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\">
    <form id=\"SchemeEditor_";
        // line 210
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_form\">
        <div ";
        // line 211
        if ((null === $this->getContext($context, "print_headers"))) {
            echo "class=\"panel panel-default\"";
        }
        echo ">
            ";
        // line 212
        echo $context["btn"]->getbuttons($this->getContext($context, "permisions"), $this->getContext($context, "bundle"), $this->getContext($context, "entity"), $this->getContext($context, "denied_buttons"));
        echo "
            ";
        // line 213
        if ((null === $this->getContext($context, "print_headers"))) {
            // line 214
            echo "                <div class=\"panel-heading\">
                    <b class=\"sty-font-15\">
                        ";
            // line 216
            if (($this->getContext($context, "id") > 0)) {
                echo "<b>#";
                echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
                echo " - </b> ";
            }
            // line 217
            echo "                        ";
            if (($this->getContext($context, "title") != null)) {
                echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
            } else {
                // line 218
                echo "                            Editor para ";
                echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
                echo "
                        ";
            }
            // line 220
            echo "                        ";
            // line 221
            echo "                    </b>
                 </div>
            ";
        }
        // line 224
        echo "                <div id=\"bag_editor_notify-";
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\" style=\"padding: 3px;\" class=\"messages\"></div>
            <div class=\"panel-body\">
                ";
        // line 226
        if (($this->getAttribute($this->getContext($context, "permisions"), "modificar") || $this->getAttribute($this->getContext($context, "permisions"), "crear"))) {
            // line 227
            echo "                    <input id=\"SchemeEditor_";
            echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
            echo "_token\" type=\"hidden\" name=\"__token\" value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "__token"), "html", null, true);
            echo "\"/>
                ";
        }
        // line 229
        echo "                <div style=\"overflow: auto;\">
                    ";
        // line 230
        $context["_block"] = $this->renderBlock($this->getContext($context, "entity"), $context, $blocks);
        // line 231
        echo "                    ";
        if ((!twig_test_empty($this->getContext($context, "_block")))) {
            // line 232
            echo "                        ";
            echo $this->getContext($context, "_block");
            echo "
                    ";
        }
        // line 234
        echo "                    ";
        if ((!$this->getContext($context, "include_template"))) {
            // line 235
            echo "                        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
            echo "
                    ";
        } else {
            // line 237
            echo "                        <input id=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
            echo "_id\" defaultid=\"\" name=\"id\" value=\"\" type=\"hidden\"/>
                        ";
            // line 238
            $template = $this->env->resolveTemplate($this->getContext($context, "include_template_name"));
            $template->display(array_merge($context, array("forms" => $this->getContext($context, "forms"))));
            // line 239
            echo "                    ";
        }
        // line 240
        echo "                </div>

                ";
        // line 243
        echo "                <div style=\"margin-bottom: 5px;margin-top: 5px;\">
                    <input name=\"action\" type=\"hidden\" value=\"create\"/>
                    <input class=\"sender-submit\" type=\"submit\" style=\"display: none\"/>

                    ";
        // line 259
        echo "                    ";
        // line 260
        echo "                </div>
            </div>
        </div>
    </form>
    <div>
        ";
        // line 266
        echo "        ";
        try {
            $template = $this->env->resolveTemplate((("Acme" . $this->getContext($context, "bundle")) . "Bundle:Schemas:editor_inputs.html.twig"));
            $template->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 267
        echo "        ";
        try {
            $template = $this->env->resolveTemplate((((("Acme" . $this->getContext($context, "bundle")) . "Bundle:Schemas:") . $this->getContext($context, "entity")) . "_inputs.html.twig"));
            $template->display($context);
        } catch (Twig_Error_Loader $e) {
            // ignore missing template
        }

        // line 268
        echo "        <div id=\"SchemeEditor_";
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_sub_loading\" class=\"subform-label\" style=\"display: none;\">
             <img src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img/loading_mini.gif"), "html", null, true);
        echo "\"/> Cargando subformulario...
        </div>
        <div id=\"SchemeEditor_";
        // line 271
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_sub_area\">
            ";
        // line 272
        if ($this->getContext($context, "include_sub_template")) {
            // line 273
            echo "                <div class=\"subform-label\" id=\"SchemeEditor_";
            echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
            echo "_sub_loaded\" ";
            if (((!$this->getContext($context, "id")) > 0)) {
                echo "style=\"display: none\"";
            }
            echo ">
                    <b>Subformulario</b>
                </div>
                <div class=\"subform-label\" id=\"SchemeEditor_";
            // line 276
            echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
            echo "_sub_new\" ";
            if (($this->getContext($context, "id") > 0)) {
                echo "style=\"display: none\"";
            }
            echo ">
                    <b><span class=\"label label-info\">Recordatorio</span> Después de crear el elemento actual se mostrará el formulario completo</b>
                </div>
                ";
            // line 279
            if (($this->getContext($context, "id") == 0)) {
                // line 280
                echo "                    <div class=\"col-md-4\">
                        <div class=\"subform-box\" style=\"height: 170px\"></div>
                    </div>
                    <div class=\"col-md-8\">
                        <div class=\"subform-box\" style=\"height: 50px\"></div>
                        <div class=\"subform-box\" style=\"height: 50px\"></div>
                        <div class=\"subform-box\" style=\"height: 50px\"></div>
                    </div>
                ";
            }
            // line 289
            echo "                <div id=\"SchemeEditor_";
            echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
            echo "_sub\" class=\"sty-box-overflow-auto\">
                    ";
            // line 290
            $template = $this->env->resolveTemplate($this->getContext($context, "include_sub_template_name"));
            $template->display($context);
            // line 291
            echo "                </div>
            ";
        }
        // line 293
        echo "        </div>
    </div>
    <div style=\"display:none\">
      <div id=\"default_inputs_dialog\" title='Valores predeterminados'>
         <b>Instrucciones: </b>Con esta función podrás llenar los formularios más rápid con valores predeterminados:
         <ul>
            <li><b>Aplicar valores: </b>Rellenar el formulario actual con los datos por defecto configurados.</li>
            <li><b>Guardar valores: </b>Guarda los valores escritos en el formulario actual para utilizarlos como predeterminados.</li>
            <li><b>Limpiar: </b>Restaura los valores por defecto a los predeterminados por el sistema.</li>
         </ul>
         <span style=\"font-size: 10px;\">
            <b>Nota: </b>los valores por defecto son almacenados en la cookies del navegador actual, por lo tanto si inicia sesión en otro navegador o equipo cambiarán los datos por defecto.<br>
         </span>
      </div>
   </div>
</div>

<script>
    var SchemaEditor_";
        // line 311
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo " = {
        url: '";
        // line 312
        echo $this->env->getExtension('routing')->getPath("schema_editor");
        echo "',
        bundle: '";
        // line 313
        echo twig_escape_filter($this->env, $this->getContext($context, "bundle"), "html", null, true);
        echo "',
        entity: '";
        // line 314
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "',
        reload_on_create: false,
        target_onsave: null,
        target_onload: null,
        target_onloadsub: null,
        target_onsaving: null,
        entity2: '";
        // line 320
        echo twig_escape_filter($this->env, $this->getContext($context, "entity2"), "html", null, true);
        echo "',
        id2: '";
        // line 321
        echo twig_escape_filter($this->env, $this->getContext($context, "id2"), "html", null, true);
        echo "',
        conds: JSON.parse('";
        // line 322
        echo twig_jsonencode_filter($this->getContext($context, "conds"));
        echo "'),
        element: ";
        // line 323
        echo twig_jsonencode_filter($this->getContext($context, "element"));
        echo ",
        target_onchange: null,
        target_validate: null,
        target_onerror: null,
        create_token: '";
        // line 327
        if ($this->getAttribute($this->getContext($context, "permisions"), "crear")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->md5EntityCrypt("", $this->getContext($context, "bundle"), $this->getContext($context, "entity")), "html", null, true);
        }
        echo "',
        modified: false,
        container_form: '#SchemeEditor_";
        // line 329
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_form',
        main_container: '#SchemeEditor_";
        // line 330
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "',


        printError: function(e){
            console.log(e);
            if(typeof(e.responseText) !== 'undefined') {
                var bet = e.responseText;
                var msg = Utils.getTextBetween(\"<title>\", \"</title>\", bet);

                //return bet.substring(p1, p2);
                //var msg = e.responseText.split('')[1].split('</title>')[0];

                console.log(\"ERROR: \" + msg);
                var bag = \$(\"#bag_editor_notify-";
        // line 343
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\");
                bag.find(\"strong\").click(function(){
                    bag.find(\".description\").html(msg);
                });
            }
        },
        hide: function() {
            var form = \$(\"#SchemeEditor_";
        // line 350
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\");
            \$(form).slideUp(function() {
                \$(this).remove();
            });
        },
        submitForm: function(){
            var form = \$(\"#SchemeEditor_";
        // line 356
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_form\");
            \$(form).find(\".action-save-create:first\").click();
        },
        isFormValid: function(){
            return this.getInvalidInputs().size() <= 0;
        },
        getInvalidInputs: function(){
            var form = \$(\"#SchemeEditor_";
        // line 363
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_form\");
            return form.find(\"input:invalid,select:invalid,textarea:invalid\");
        },
        isNew: function() {
            var form = \$(\"#SchemeEditor_";
        // line 367
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_form\");
            var elements = \$(form).find(\"#";
        // line 368
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_id\");
            return elements.val() === \"\";
        },
        //Guarda en cookies los valores predeterminados por pestaña
        saveDefaults: function(){
           var form = \$(\"#SchemeEditor_";
        // line 373
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_form\");
           form.find(\"select, input, textarea\").each(function(){
              var name = \$(this).attr(\"name\");
              var c_value = \$(this).val();
              c_value = c_value === undefined ? null : c_value;

              Cookies.setPermanentCookie('default_";
        // line 379
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo "_' + name, c_value);
           });
        },
        clearDefaults: function(){
           var form = \$(\"#SchemeEditor_";
        // line 383
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_form\");
           form.find(\"select, input, textarea\").each(function(){
              var name = \$(this).attr(\"name\");
              Cookies.removeCookie('default_";
        // line 386
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo "_' + name);
           });
        },
        setDisablers: function(e){
              \$(e).find(\"[input_disable]\").each(function(){
                var c = \$(this);
                var action = function(){
                   var cur = c;
                   var cur_value = cur.val();
                   var disable_value = cur.attr(\"input_disable\");
                   var disable_selector = cur.attr(\"input_disable_selector\");
                   var disable_hide_selector = cur.attr(\"input_disable_hide_selector\");
                   //if(cur_value === disable_value){
                   var parts_v = disable_value.split(\"|\");

                   var cmp = cur_value === disable_value;
                   parts_v.forEach(function(y, x){
                     if(y === cur_value){
                        cmp = true;
                     }
                   });

                   \$(e).find(disable_selector)
                   .prop(\"disabled\", cmp).prop(\"readonly\", cmp)
                   .find(\"textarea, input, select\").prop(\"disabled\", cmp).prop(\"readonly\", cmp);

                   if(cmp){
                      //\$(e).find(disable_selector).prop(\"disabled\", true);
                      \$(e).find(disable_hide_selector).hide();
                   } else {
                      //\$(disable_selector).prop(\"disabled\", false);
                      \$(e).find(disable_hide_selector).show();
                   }
                };
                \$(this).change(action);
                action();
                //}
             });
        },
        defaultInputs: function(ask){
\t\t\tvar c  = this;
\t\t\tvar action = function(){
\t\t\t\tc.modified = true;
\t\t\t\tvar form = \$(\"#SchemeEditor_";
        // line 429
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_form\");
\t\t\t\tform.find(\"select\").each(function(){
               var name = \$(this).attr(\"name\");
               var def_cookie = Cookies.getCookie('default_";
        // line 432
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo "_' + name, null);

\t\t\t\t   //var val = \$(this).val();
\t\t\t\t   //if(val !=== \"\") return;
               if(def_cookie !== null){
                  \$(this).val(def_cookie);
               } else {
\t\t\t\t\t   \$(this).find(\"option:first\").prop('selected', true);
               }
               \$(this).trigger(\"change\");
\t\t\t\t});
\t\t\t\tform.find('input, textarea').each(function(){

\t\t\t\t   var val = \$(this).val();
\t\t\t\t   var name = \$(this).attr(\"name\");
\t\t\t\t   var type = \$(this).attr(\"type\");
\t\t\t\t   type = type === undefined ? \"text\" : type.toLowerCase();

               var def_cookie = Cookies.getCookie('default_";
        // line 450
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo "_' + name, null);
\t\t\t\t   var def = \$(this).attr(\"default\");

               def = def_cookie !== null ? def_cookie : def;
\t\t\t\t   def = def === undefined ? null : def;

\t\t\t\t   if(type === \"hidden\" || \$(this).prop(\"readonly\")){
\t\t\t\t\t   return;
\t\t\t\t   }

\t\t\t\t   if(type === \"text\"){
                  def = def === null ? \" \" : def;
\t\t\t\t\t   \$(this).val(def).trigger(\"change\");
\t\t\t\t   }
\t\t\t\t   if(type === \"radio\"){
                  if(def === null) {
                     var input_o = form.find('input[name=\"' + name + '\"]:first');
\t\t\t\t\t      input_o.prop(\"checked\", true).trigger(\"change\");
                  } else {
                     var input_o = form.find('input[name=\"' + name + '\"]');
                     input_o.filter(\"[value='\" + def + \"']\").prop(\"checked\", true).trigger(\"change\");
                  }
\t\t\t\t   }
\t\t\t\t   if(type === \"number\"){
                  if(def === null) {
\t\t\t\t\t      \$(this).val(0);
                  } else {
                     \$(this).val(def);
                  }
                  \$(this).trigger(\"change\");
\t\t\t\t   }
\t\t\t\t});
\t\t\t};

\t\t\t\taction();
        },
        clear: function() {
            var form = \$(\"#SchemeEditor_";
        // line 487
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_form\");
            var elements = \$(form).find(\"[name=id], #";
        // line 488
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_id\");
            elements.val(\"\");
            \$(form).find(\".new, .save, .print\").hide();
            \$(form).find(\".create\").show();
            \$(form).find(\"#SchemeEditor_";
        // line 492
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_token\").val(this.create_token);
            //\$(form).find(\".save\").val(\"Crear nuevo elemento\");
            elements.html(\"\");
            \$(\"#SchemeEditor_";
        // line 495
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_sub\").html(\"\");
            \$(\"#SchemeEditor_";
        // line 496
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_sub_loaded\").hide();
            \$(\"#SchemeEditor_";
        // line 497
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_sub_new\").show();
        },
        print: function() {
            var data = {
                bundle: this.bundle,
                entity: this.entity,
                id: this.element.id
            };
            var url = this.url + \"?\" + \$.param(data) + \"&export=print\";
            window.open(url);
        },
        loadSub: function(){
            \$(\"#SchemeEditor_";
        // line 509
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_sub_loading\").show();
            \$(\"#SchemeEditor_";
        // line 510
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_sub_area\").html(\"\");
            var context = this;
            \$.ajax({
                url: '";
        // line 513
        echo $this->env->getExtension('routing')->getPath("schema_editor");
        echo "',
                data: {
                    entity: this.entity,
                    entity2: this.entity2,
                    bundle: this.bundle,
                    id: this.element.id,
                    id2: this.id2,
                    conds: this.conds
                    ";
        // line 521
        if (($this->getContext($context, "title") != null)) {
            echo ", title: '";
            echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
            echo "'";
        }
        // line 522
        echo "                },
                success: function(e){
                    \$(\"#SchemeEditor_";
        // line 524
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_sub_loading\").hide();
                    var e = \$(e);

                    \$(\"#SchemeEditor_";
        // line 527
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_sub_area\").replaceWith(e.find(\"#SchemeEditor_";
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_sub_area\"));
\t\t\t\t\tif(context.target_onloadsub !== null){
\t\t\t\t\t\tcontext.target_onloadsub(e);
\t\t\t\t\t}
                },
                error: function(e){
                    \$(\"#SchemeEditor_";
        // line 533
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_sub_loading\").hide();
                    context.printError(e);
                }
            });
        },
        showMessage: function(type, title, msg){
            var box = \$(this.container_form).find(\".messages\");
            return Utils.showBootstrapNotify(box, type, title, msg);
        },
        clearMessages: function(){
            var box = \$(this.container_form).find(\".messages\");
            box.html(\"\");
        },
        submit: function(submited){
            var form = \$(this.container_form);
            var errors = false;
            var main_context = this;
            if(main_context.target_validate !== null){
                console.log(\"Validando editor...\");
                var result = main_context.target_validate(form);
                if(result !== true){
                    return;
                }
            }

            ";
        // line 558
        if ((!($this->getAttribute($this->getContext($context, "permisions"), "crear") || $this->getAttribute($this->getContext($context, "permisions"), "modificar")))) {
            // line 559
            echo "                if(true){ return; }
            ";
        }
        // line 561
        echo "
            var context = form;
\t\t\tvar action = function() {
\t\t\t\tvar box = \$(context).find(\".messages\");
\t\t\t\tsetElementDisableState(context, false);
\t\t\t\tif(\$(form).find(\"[name=id]\").size() > 1){
\t\t\t\t\t\$(form).find(\"[defaultid]\").remove();
\t\t\t\t}
\t\t\t\t\$(form).find(\"[name]\").each(function(){
\t\t\t\t   var name = \$(this).attr(\"name\") + \"\";
\t\t\t\t   name = name.split(\"[\").join(\"\").split(\"]\").join(\"\").split(\"";
        // line 571
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\").join(\"\");
\t\t\t\t   \$(this).attr(\"name\", name);
\t\t\t\t});
\t\t\t\tif(main_context.target_onsaving !== null){
\t\t\t\t\tmain_context.target_onsaving(e);
\t\t\t\t}
\t\t\t\tvar data = \$(form).serialize();
\t\t\t\tdata += \"&entity=";
        // line 578
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "&bundle=";
        echo twig_escape_filter($this->env, $this->getContext($context, "bundle"), "html", null, true);
        echo "&entity2=\" + main_context.entity2 + \"&id2=\" + main_context.id2;
\t\t\t\tconsole.log(data);
\t\t\t\t\$.ajax({
                url: '";
        // line 581
        echo $this->env->getExtension('routing')->getPath("schema_ajaxeditor");
        echo "',
                data: data,
                type: \"POST\",
                success: function(e) {
                    console.log(e);
                    if(e.result === 3){
                        Utils.showBootstrapNotify(box, \"warning\", \"Error\", \"El valor '<b>\" + e.value + \"</b>' del campo '<b>\" + e.column + \"</b>' ya ha sido utilizado en otro registro y no se puede repetir.\");
                        return;
                    }
                    if(e.result === 0){
                        Utils.showBootstrapNotify(box, \"danger\", \"Error\", \"Error en la clave de seguridad\");
                        return;
                    }

                    main_context.element = e;
                    main_context.modified = false;
                    \$(context).find(\"#";
        // line 597
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_id, [name=id]\").val(e.id);
                    \$(context).find(\"#SchemeEditor_";
        // line 598
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_token\").val(e.__token);

                    Utils.showBootstrapNotify(box, \"success\", \"Correcto\", \"Los cambios han sido guardados\");

                    //Call Event
                    if(main_context.target_onchange !== null){
                        main_context.target_onchange();
                    }

                    if(main_context.target_onsave !== null){
                        main_context.target_onsave(e);
                    }
                    //console.log(e);

                    //Llamar eventos de la lista.
                    if (typeof (SchemaList_";
        // line 613
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo ") !== 'undefined') {
                        var schema_list = SchemaList_";
        // line 614
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo ";

                        schema_list.getList();

                        if(schema_list.target_onchange !== null){
                            schema_list.target_onchange();
                        }
                        /*
                        if(main_context.reload_on_create && e.exec_action === \"created\"){
                            schema_list.editElement(e.id);
                        }*/
                    } /*else {
                        if(main_context.reload_on_create && e.exec_action === \"created\"){
                            main_context.loadSub();
                        }
                    }*/
                    if(main_context.reload_on_create && e.exec_action === \"created\"){
                        main_context.loadSub();
                    }
                    \$(form).find(\".print, .save, .new\").show();
                    \$(form).find(\".create\").hide();
                    //\$(form).find(\".save\").val(\"Guardar cambios\");
                },
                error: function(e) {
                    errors = true;
                    /*var msg = e.responseText;
                    //Duplicate entry &#039;1023925033&#039;
                    var parts = /Duplicate entry &#039;(.*?)&#039;/g.exec(msg);
                    //last_error = e;
                    if(parts !== null){
                        var value = parts[1];
                        //var inp = \$(form).find(\"[value='\" + value + \"']\");
                        //var inp_name = \$(inp).attr(\"name\");
                        Utils.showBootstrapNotify(box, \"warning\", \"Error\", \"El valor '<b>\" + value + \"</b>' ya ha sido utilizado en otro elemento y no se puede repetir.\");
                        return;
                    }*/

                    setElementDisableState(context, true);
                    Utils.showBootstrapNotify(box, \"danger\", \"Error\", \"Ocurrió un error al intentar guardar los cambios.\");
                    main_context.printError(e);
                    if(main_context.target_onerror !== null){
                        main_context.target_onerror(e);
                    }
                },
                complete: function(){
                    setElementDisableState(context, true);
                    if(typeof(submited) !== 'undefined'){
                        submited(!errors);
                    }
                }
            });
\t\t\t};

            ";
        // line 667
        if ((!$this->getAttribute($this->getContext($context, "permisions"), "modificar"))) {
            // line 668
            echo "\t\t\t\tsconfirm(\"Advertencia\", \"Después de creado este elemento, no lo podrá modificar ¿Continuar?\", function(c){
\t\t\t\t\tif(c){
\t\t\t\t\t\taction();
\t\t\t\t\t}
\t\t\t\t})
                //if(!confirm('Después de creado este elemento, no lo podrá modificar ¿Continuar?')) return;
            ";
        } else {
            // line 675
            echo "\t\t\t\taction();
\t\t\t";
        }
        // line 677
        echo "        },
        prepare: function() {
            var main_context = this;
            var form = \$(\"#SchemeEditor_";
        // line 680
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_form\");
            //var form = \$(\"#SchemeEditor_";
        // line 681
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\");
            \$(\"#SchemeEditor_";
        // line 682
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\").prop(\"schema\", this);
            \$(\"#SchemeEditor_";
        // line 683
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\").prop(\"object\", this);
            \$(form).append(\$(\"#Template_";
        // line 684
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\").html());
            \$(form).find(\".text-toggler\").textToggler();

            this.setDisablers(form);

            //Añadir valores precargados
            if (this.element !== null) {
                for (var x in this.element.columns) {
                    x = this.element.columns[x];
                    console.log(x);
                    //console.log(x.column_name + \"-\" + x.value);
                    var str = \"[name=\" + x.column_name + \"], #";
        // line 695
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_\" + x.column_name;

                    if(this.conds !== null && this.conds[x.column_name] !== undefined){
                        x.value = this.conds[x.column_name];
                        //console.log(x.value);
                    }
                    //console.log(str);
                    var form_inputs = \$(form).find(str);
                    form_inputs.each(function() {
                        var tagname = \$(this).prop(\"tagName\");
                        var type = \$(this).attr(\"type\") + \"\";
                        var name = \$(this).attr(\"name\") + \"\";
                        type = type.toLowerCase();
                        //console.log(\"Ja: \" + tagname);
                        console.log(\"tag found:\" +  tagname + \" Type: \" + type + \" Name: \" + name);
                        if (\"INPUT,TEXTAREA,SELECT\".indexOf(tagname) > -1) {
                            //console.log(type);
                            if(type === \"checkbox\"){
                                //console.log(x);

                                \$(this).change(function(){
                                    if(\$(this).is(':checked')){
                                        \$(this).val('true');
                                    }else{
                                        \$(this).val('false');
                                    }
                                });

                                //\$(this).val(\"true\").trigger('change');
                                \$(this).prop(\"checked\", x.value).trigger('change');
                                return;
                            }
                            if(type === \"radio\"){
                                //console.log(\"CheckBox!\");
                                if(x.value){
                                    \$(this).parent().find('[value=\"' + x.value + '\"]').prop(\"checked\", true)
                                    \$(this).trigger('change');
                                }
                                return;
                            }
                            if(type === \"date\"){
                                //console.log(x);
                                var date_str_formatted = x.list_formatted.split(\"T\")[0].split(\",\")[0];
                                \$(this).val(date_str_formatted).trigger('change');
                                return;
                            }
                            if(type === \"datetime-local\"){
                                //console.log(x);x.list_formatted.substring(0, x.list_formatted.length - 9);
                                console.log(\"Date STR \" + x.list_formatted);
                                var date_str_formatted = x.list_formatted.substring(0, x.list_formatted.length - 6);
                                var parts = date_str_formatted.split(\", \");
                                var time = parts.length > 0 ? parts[1] : \"\";
                                var date = parts[0];
                                date_str_formatted = date.split(\"/\").reverse().join(\"-\") + \"T\" + time;

                                //date_str_formatted = date_str_formatted.replace(\", \", \"T\").split(\"/\").join(\"-\");
                                console.log(\"Date STR \" + date_str_formatted);
                                \$(this).val(date_str_formatted).trigger('change');
                                return;
                            }
                            //if(type && type.toLowerCase() === \"date\"){
                            //    \$(this).val(x.value.split(\"T\")[0]);
                            //    return;
                            //}
                            if(x.value === null){
                                x.value = \"\";
                            }

                            //For text
                            if(x.column_length !== null && tagname == \"INPUT\"){
                                \$(this).attr(\"maxlength\", x.column_length);
                                \$(this).attr(\"size\", x.column_length);
                            }
                            \$(this).val(x.value + \"\").trigger('change');

                        } else if(\"IMG\".indexOf(tagname) !== -1) {
                            \$(this).attr(\"src\", x.value);
                            \$(this).html(x.value);
                        }
                    });

                    //Revisa que se hayan hecho cambios.
                    \$(form_inputs).change(function(){
                        main_context.modified = true;
                    });
                    /*\$(form).change(function(){
                        main_context.modified = true;
                    });*/
                }
            }

            \$(form).find(\".cancel\").click(function() {
                SchemaEditor_";
        // line 787
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo ".hide();
            });

            if (!this.isNew()) {
                \$(form).find(\".print, .new, .save\").show();
                \$(form).find(\".create\").hide();
                \$(form).find(\"[onlycreate]\").attr(\"readonly\", true);

                //\$(form).find(\".save\").val(\"Guardar cambios\");
            }

            \$(form).find(\".action-defaults\").click(function(){
               \$(\"#default_inputs_dialog\").dialog({
                  resizable: false,
                  //height:140,
                  width: 550,
                  modal: true,
                  title: 'Valores predeterminados',
                  buttons: {
                    \"Cancelar\": function() {
                       \$(this).dialog(\"close\");
                    },
                    \"Limpiar\": function(){
                       \$(this).dialog(\"close\");
                       main_context.clearDefaults();
                       swal(\"Datos del sistema\", \"Los datos por defecto del formulario actual han sido cambiados por los datos iniciales del sistema.\", \"success\");
                    },
                    \"Guardar valores\": function() {
                       \$(this).dialog(\"close\");
                       main_context.saveDefaults();
                       swal(\"Datos guardados\", \"Los datos ingresados en el formulario actual quedaron guardados como valores por defecto. La proxima vez que apliques los valores predeterminados el formulario se llenará con estos datos.\", \"success\");
                    },
                    \"Aplicar valores\": function(){
                       \$(this).dialog(\"close\");
                       main_context.defaultInputs();
                    }
                  }
               });
            });

            \$(form).find(\".print\").click(function(){
                main_context.print();
            });

            \$(form).find(\".create, .save\").click(function(){
                \$(form).find(\".sender-submit\").click();
            });

            ";
        // line 835
        if ((!($this->getAttribute($this->getContext($context, "permisions"), "crear") || $this->getAttribute($this->getContext($context, "permisions"), "modificar")))) {
            // line 836
            echo "               main_context.disableAll();
            ";
        }
        // line 838
        echo "            //var main_context = this;
            \$(form).submit(function(e) {
                e.preventDefault();
                main_context.submit();
            });

            if(main_context.target_onload !== null){
                main_context.target_onload();
            }
        },
        disableAll: function(){
           var form = \$(\"#SchemeEditor_";
        // line 849
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "_form\");
           \$(form).find(\"input, textarea, select\").prop(\"required\", false);
           \$(form).find(\"input, textarea\").prop(\"readonly\", true);
           \$(form).find(\"input[type=radio], input[type=checkbox], select\").prop(\"disabled\", true);
        }
    };
</script>
<script>
    \$(function() {
        SchemaEditor_";
        // line 858
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo ".prepare();
        ";
        // line 859
        if ($this->getContext($context, "include_sub_template")) {
            // line 860
            echo "            SchemaEditor_";
            echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
            echo ".reload_on_create = true;
        ";
        }
        // line 862
        echo "    });
</script>
";
    }

    // line 130
    public function getbuttons($_permisions = null, $_bundle = null, $_entity = null, $_denied_buttons = null)
    {
        $context = $this->env->mergeGlobals(array(
            "permisions" => $_permisions,
            "bundle" => $_bundle,
            "entity" => $_entity,
            "denied_buttons" => $_denied_buttons,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 131
            echo "<div style=\"margin: 0\" class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    ";
            // line 145
            echo "    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"\" id=\"bs-example-navbar-collapse-1\">

      <ul class=\"nav navbar-nav\">
    ";
            // line 149
            if (($this->getAttribute($this->getContext($context, "permisions"), "crear") && (!$this->getAttribute($this->getContext($context, "denied_buttons", true), "crear", array(), "any", true, true)))) {
                // line 150
                echo "        <li class=\"create action-create\"><a><img height=\"16\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/save.png"), "html", null, true);
                echo "\"/> Crear</a></li>
    ";
            }
            // line 152
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "permisions"), "modificar") && (!$this->getAttribute($this->getContext($context, "denied_buttons", true), "modificar", array(), "any", true, true)))) {
                // line 153
                echo "        <li class=\"save action-save action-save-create\" style=\"display: none;\"><a><img height=\"16\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/save.png"), "html", null, true);
                echo "\"/> Modificar</a></li>
    ";
            }
            // line 155
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "permisions"), "crear") && (!$this->getAttribute($this->getContext($context, "denied_buttons", true), "nuevo", array(), "any", true, true)))) {
                // line 156
                echo "        <li class=\"new action-new\" style=\"display: none;\"><a href=\"javascript:SchemaEditor_";
                echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
                echo ".clear()\"><img height=\"16\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/add2.png"), "html", null, true);
                echo "\"/> Nuevo elemento</a></li>
    ";
            }
            // line 158
            echo "    ";
            if ((($this->getAttribute($this->getContext($context, "permisions"), "crear") || $this->getAttribute($this->getContext($context, "permisions"), "modificar")) && (!$this->getAttribute($this->getContext($context, "denied_buttons", true), "predeterminados", array(), "any", true, true)))) {
                // line 159
                echo "        <li class=\"defaults action-defaults\"><a><img height=\"16\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/clear.png"), "html", null, true);
                echo "\"/> Predeterminados</a></li>
    ";
            }
            // line 161
            echo "
    ";
            // line 162
            if ((!$this->getAttribute($this->getContext($context, "denied_buttons", true), "imprimir", array(), "any", true, true))) {
                // line 163
                echo "        <li class=\"print action-print\"><a><img height=\"16\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/print.png"), "html", null, true);
                echo "\"/> Imprimir</a></li>
    ";
            }
            // line 165
            echo "      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 171
    public function getbtns($_permisions = null, $_bundle = null, $_entity = null, $_min = null)
    {
        $context = $this->env->mergeGlobals(array(
            "permisions" => $_permisions,
            "bundle" => $_bundle,
            "entity" => $_entity,
            "min" => $_min,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 172
            echo "
    ";
            // line 173
            if ($this->getAttribute($this->getContext($context, "permisions"), "crear")) {
                // line 174
                echo "        <a title=\"Crear nuevo elemento\" class=\"create action-create btn btn-warning ";
                if ($this->getContext($context, "min")) {
                    echo "sty-box-margin-right-10 pull-right";
                }
                echo "\">
            ";
                // line 175
                if ($this->getContext($context, "min")) {
                    echo "<img height=\"16\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/save.png"), "html", null, true);
                    echo "\"/>";
                } else {
                    echo " Crear nuevo elemento";
                }
                // line 176
                echo "        </a>
        ";
                // line 178
                echo "    ";
            }
            // line 179
            echo "
    ";
            // line 180
            if ($this->getAttribute($this->getContext($context, "permisions"), "modificar")) {
                // line 181
                echo "        <a style=\"display: none;\" title=\"Guardar elemento\" class=\"save action-save action-save-create btn btn-success ";
                if ($this->getContext($context, "min")) {
                    echo "sty-box-margin-right-10 pull-right";
                }
                echo "\">
            ";
                // line 182
                if ($this->getContext($context, "min")) {
                    echo "<img height=\"16\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/save.png"), "html", null, true);
                    echo "\"/>";
                } else {
                    echo " Guardar elemento";
                }
                // line 183
                echo "        </a>
        ";
                // line 185
                echo "    ";
            }
            // line 186
            echo "    ";
            if ($this->getAttribute($this->getContext($context, "permisions"), "crear")) {
                // line 187
                echo "        <a style=\"display: none;\" title=\"Nuevo elemento\" class=\"new action-new btn btn-info ";
                if ($this->getContext($context, "min")) {
                    echo "sty-box-margin-right-10 pull-right";
                }
                echo "\" href=\"javascript:SchemaEditor_";
                echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
                echo ".clear()\">
            ";
                // line 188
                if ($this->getContext($context, "min")) {
                    echo "<img height=\"16\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/add2.png"), "html", null, true);
                    echo "\"/>";
                } else {
                    echo " Nuevo elemento";
                }
                // line 189
                echo "        </a>
        ";
                // line 191
                echo "    ";
            }
            // line 192
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "permisions"), "crear") || $this->getAttribute($this->getContext($context, "permisions"), "modificar"))) {
                // line 193
                echo "        <a title=\"Valores predeterminados\" class=\"defaults action-defaults btn btn-default ";
                if ($this->getContext($context, "min")) {
                    echo "sty-box-margin-right-10 pull-right layout-responsive-desktop";
                }
                echo "\">
            ";
                // line 194
                if ($this->getContext($context, "min")) {
                    echo "<img height=\"16\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/clear.png"), "html", null, true);
                    echo "\"/>";
                } else {
                    echo " Predeterminados";
                }
                // line 195
                echo "        </a>
    ";
            }
            // line 197
            echo "    <a title=\"Imprimir\" class=\"print action-print btn btn-primary ";
            if ($this->getContext($context, "min")) {
                echo "sty-box-margin-right-10 pull-right layout-responsive-desktop";
            }
            echo "\">
        ";
            // line 198
            if ($this->getContext($context, "min")) {
                echo "<img height=\"16\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/print.png"), "html", null, true);
                echo "\"/>";
            } else {
                echo " Imprimir elemento";
            }
            // line 199
            echo "    </a>


    ";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Schema:editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1393 => 199,  1385 => 198,  1378 => 197,  1374 => 195,  1366 => 194,  1359 => 193,  1356 => 192,  1353 => 191,  1350 => 189,  1342 => 188,  1333 => 187,  1330 => 186,  1327 => 185,  1324 => 183,  1316 => 182,  1309 => 181,  1307 => 180,  1304 => 179,  1301 => 178,  1298 => 176,  1290 => 175,  1283 => 174,  1281 => 173,  1278 => 172,  1264 => 171,  1249 => 165,  1243 => 163,  1241 => 162,  1238 => 161,  1232 => 159,  1229 => 158,  1221 => 156,  1218 => 155,  1212 => 153,  1209 => 152,  1203 => 150,  1201 => 149,  1195 => 145,  1191 => 131,  1177 => 130,  1171 => 862,  1165 => 860,  1163 => 859,  1159 => 858,  1147 => 849,  1134 => 838,  1130 => 836,  1128 => 835,  1077 => 787,  982 => 695,  968 => 684,  964 => 683,  960 => 682,  956 => 681,  952 => 680,  947 => 677,  943 => 675,  934 => 668,  932 => 667,  876 => 614,  872 => 613,  854 => 598,  850 => 597,  831 => 581,  823 => 578,  813 => 571,  801 => 561,  797 => 559,  795 => 558,  767 => 533,  756 => 527,  750 => 524,  746 => 522,  740 => 521,  729 => 513,  723 => 510,  719 => 509,  704 => 497,  700 => 496,  696 => 495,  690 => 492,  683 => 488,  679 => 487,  639 => 450,  618 => 432,  612 => 429,  566 => 386,  560 => 383,  553 => 379,  544 => 373,  536 => 368,  532 => 367,  525 => 363,  515 => 356,  506 => 350,  496 => 343,  480 => 330,  476 => 329,  469 => 327,  462 => 323,  458 => 322,  454 => 321,  450 => 320,  441 => 314,  437 => 313,  433 => 312,  429 => 311,  409 => 293,  405 => 291,  402 => 290,  397 => 289,  386 => 280,  384 => 279,  374 => 276,  363 => 273,  361 => 272,  357 => 271,  352 => 269,  347 => 268,  338 => 267,  329 => 266,  322 => 260,  320 => 259,  314 => 243,  310 => 240,  307 => 239,  304 => 238,  299 => 237,  293 => 235,  290 => 234,  284 => 232,  281 => 231,  279 => 230,  276 => 229,  268 => 227,  266 => 226,  260 => 224,  255 => 221,  253 => 220,  247 => 218,  242 => 217,  236 => 216,  232 => 214,  230 => 213,  226 => 212,  220 => 211,  216 => 210,  212 => 209,  209 => 208,  207 => 207,  205 => 206,  202 => 205,  194 => 125,  188 => 122,  182 => 119,  179 => 118,  136 => 75,  128 => 70,  120 => 65,  112 => 60,  104 => 55,  86 => 40,  78 => 35,  58 => 24,  49 => 18,  40 => 12,  33 => 8,  29 => 6,  24 => 4,  21 => 3,  19 => 2,);
    }
}
