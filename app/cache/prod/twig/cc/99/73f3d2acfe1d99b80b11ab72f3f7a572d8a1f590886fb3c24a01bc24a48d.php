<?php

/* AcmeSFSBundle:Schema:list.html.twig */
class __TwigTemplate_cc9973f3d2acfe1d99b80b11ab72f3f7a572d8a1f590886fb3c24a01bc24a48d extends Twig_Template
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
        if ((!(null === $this->getContext($context, "print_headers")))) {
            // line 2
            echo "    <!-- IGNORE HEADERS -->
    ";
            // line 3
            echo $this->env->getExtension('app_extension')->util("header", array("header" => ""));
            echo "
";
        }
        // line 5
        echo "
<style>

    .column-filter{
        margin: 10px auto 0 auto;
        max-width: 400px;
        padding: 10px;
        border-radius: 5px;
        border-style: solid;
        border-color: gainsboro;
        border-width: 1px;
        position: absolute;
        background-color: white;
        padding-top: 10px;
        //margin-left: -150px;
        color: black;
        left: 0;
        right: 0;
        -webkit-box-shadow: -2px 2px 30px -1px rgba(0,0,0,0.75);
        -moz-box-shadow: -2px 2px 30px -1px rgba(0,0,0,0.75);
        box-shadow: -2px 2px 30px -1px rgba(0,0,0,0.75);
        z-index: 90;
    }
    .label-filter-active{
        color: red;
    }
</style>
<script>
    var SchemaList_";
        // line 33
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo " = {
        page: 1,
        page_count: 30,
        enable_dialogs: false,
        hide: JSON.parse('";
        // line 37
        echo twig_jsonencode_filter($this->getContext($context, "hide"));
        echo "'),
        url: '";
        // line 38
        echo $this->env->getExtension('routing')->getPath("get_schema_list");
        echo "',
        url_editor: '";
        // line 39
        echo $this->env->getExtension('routing')->getPath("schema_editor");
        echo "',
        bundle: '";
        // line 40
        echo twig_escape_filter($this->env, $this->getContext($context, "bundle"), "html", null, true);
        echo "',
        entity: '";
        // line 41
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "',
        field: '";
        // line 42
        echo twig_escape_filter($this->env, $this->getContext($context, "field"), "html", null, true);
        echo "',
        entity2: '";
        // line 43
        echo twig_escape_filter($this->env, $this->getContext($context, "entity2"), "html", null, true);
        echo "',
        id2: '";
        // line 44
        echo twig_escape_filter($this->env, $this->getContext($context, "id2"), "html", null, true);
        echo "',
        conds: '";
        // line 45
        echo twig_escape_filter($this->env, $this->getContext($context, "conds"), "html", null, true);
        echo "', //JSON.parse('";
        echo twig_jsonencode_filter($this->getContext($context, "conds"));
        echo "'),
        permisions: '";
        // line 46
        echo twig_escape_filter($this->env, $this->getContext($context, "permisions_encrypt"), "html", null, true);
        echo "',
        ress: JSON.parse('";
        // line 47
        echo twig_jsonencode_filter($this->getContext($context, "ress"));
        echo "'),
        order: {id: \"DESC\"},
        filter: {},
        main_container: \"#List_";
        // line 50
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo "\",
        editor_container: \"#bag_editor-";
        // line 51
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo "\",
        target_onchange: null,
        target_onreload: null,
        top_editor: false,
        setTopEditor: function(){
            \$(this.main_container).find(\".nav-tabs\").hide();
            this.editor_container = \"#bag_editor-top-";
        // line 57
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo "\";
            this.top_editor = true;
        },
        applyFilter: function (column) {

        },
        printError: function(e){
            console.log(e);
            if(e.responseText !== undefined) {
                var bet = e.responseText;
                var msg = Utils.getTextBetween(\"<title>\", \"</title>\", bet);

                console.log(\"ERROR: \" + msg);
                var bag = \$(\"#bag_notify-";
        // line 70
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\");
                bag.find(\"strong\").click(function(){
                    bag.find(\".description\").html(msg);
                });
            }
        },
        removeFilter: function (column) {
            this.page = 1;
            this.filter[column] = {};
            this.ress[column] = {};
            this.getList();

            \$(this.main_container).find(\".filter-added-\" + column).remove();
            \$(this.main_container).find(\"#column_\" + column).removeClass(\"label-filter-active\");
        },
        hideFilter: function (column) {
            \$(this.main_container).find(\".filter-added-\" + column).hide();
        },
        paginate: function (p) {
            this.page = p;
            this.getList();
        },
        openFilter: function (column) {
            var context = this;
            var filter = \$(this.main_container).find(\".filter-added-\" + column);
            \$(this.main_container).find(\".filter-added\").hide();

            //No existe el filtro creado:
            if (\$(filter).size() <= 0) {
                filter = \$(this.main_container).find(\".filter-for-\" + column).clone();
                \$(this.main_container).find(\"#column_\" + column).after(filter);
                \$(filter).find(\"script\").each(function () {
                    eval(\$(this).html());
                });
                //Marcar filtro
                \$(filter).removeClass(\"filter-for-\" + column);
                \$(filter).addClass(\"filter-added-\" + column);
                \$(filter).addClass(\"filter-added\");

                \$(filter).find(\"form\").submit(function (e) {
                    e.preventDefault();

                    var type = \$(this).find(\"[name=type]\").val();
                    var search = \$(this).find(\"[name=search]\").val();
                    var equal = \$(this).find(\"[name=equal]\").val();
                    var operation = \$(this).find(\"[name=operation]\").val();
                    if (equal === \"\" || equal === undefined) {
                        var equal = \$(this).find(\"[name=equal2]\").val();
                    }
                    var mayor = \$(this).find(\"[name=mayor]\").val();
                    var minor = \$(this).find(\"[name=minor]\").val();

                    //Es un array o un objeto???
                    if(context.ress.length >= 0){
                        context.ress = {};
                    }
                    if(operation === \"sum\"){
                        context.ress[column] = \"sum\";
                    } else if(operation === \"avg\"){
                        context.ress[column] = \"avg\";
                    }

                    if (search !== \"\" && search !== undefined) {
                        context.filter[column] = {
                            search: search
                        };
                        console.log(\"Filter: SEARCH\");
                    } else if (equal) {
                        context.filter[column] = {
                            equal: equal
                        };
                        console.log(\"Filter: EQUAL\");
                    } else if (mayor && !minor) {
                        context.filter[column] = {
                            mayor: mayor
                        };
                        console.log(\"Filter: MAYOR\");
                    } else if (minor && !mayor) {
                        context.filter[column] = {
                            minor: minor
                        };
                        console.log(\"Filter: MINOR\");
                    } else if (minor && mayor) {
                        context.filter[column] = {
                            between: {
                                first: mayor,
                                last: minor
                            }
                        };
                        console.log(\"Filter: BETWEEN\");
                    }
                    context.page = 1;
                    context.getList();
                    context.hideFilter(column);
                    \$(context.main_container).find(\"#column_\" + column).addClass(\"label-filter-active\");

                    //console.log(search);
                    //console.log(equal);
                    //console.log(mayor);
                    //console.log(minor);
                });
            }
            \$(filter).show();
        },
        ";
        // line 174
        if ($this->getAttribute($this->getContext($context, "permisions"), "crear")) {
            // line 175
            echo "        createElement: function(values, target_success, target_error){
            this.createElements([values], function(r){
                r = r.length === 1 ? r[0] : r;
                if(target_success !== undefined){
                    return target_success(r);
                }
            }, target_error);
            /*
            values.__token = \"";
            // line 183
            echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->md5EntityCrypt("", $this->getContext($context, "bundle"), $this->getContext($context, "entity")), "html", null, true);
            echo "\";
            values.action = \"create\";
            values.bundle = this.bundle;
            values.entity = this.entity;
            var context = this;
            \$.ajax({
                url: '";
            // line 189
            echo $this->env->getExtension('routing')->getPath("schema_ajaxeditor");
            echo "',
                data: values,
                success: function(r){
                    if(target_success !== undefined){
                        if(target_success(r)){
                            context.getList();
                            return;
                        }
                    }
                    if(r.result > 0){
                        context.getList();
                    }
                },
                error: function(){
                    if(target_error !== undefined){
                        target_error(r);
                    }
                }
            });*/
        },
        //Procesas varias acciones crear
        createElements: function(data, target_success, target_error){
            var context = this;
            var req = [];
            var count = 0;
            for(var x in data){
                ++count;
                var el = data[x];
                el.__token = \"";
            // line 217
            echo twig_escape_filter($this->env, $this->env->getExtension('app_extension')->md5EntityCrypt("", $this->getContext($context, "bundle"), $this->getContext($context, "entity")), "html", null, true);
            echo "\";
                el.action = \"create\";
                el.bundle = this.bundle;
                el.entity = this.entity;
                req.push(el);
            }
            console.log(req);
            \$.ajax({
                url: '";
            // line 225
            echo $this->env->getExtension('routing')->getPath("schema_ajaxeditor_multiple");
            echo "',
                data: {
                    data: req
                },
                type: \"post\",
                success: function(r){
                    console.log(r);
                    if(target_success !== undefined){
                        if(target_success(r)){
                            context.getList();
                            return;
                        }
                    }
                    if(r.responses.length > 0){
                        context.getList();
                    }
                },
                error: function(r){
                    if(target_error !== undefined){
                        target_error(r);
                    }
                }
            });
        },
        ";
        }
        // line 250
        echo "        showList: function () {
            \$(\".tab-list-";
        // line 251
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\").addClass(\"active\");
            \$(\".tab-editor-";
        // line 252
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\").removeClass(\"active\");
            \$(\"#bag_list-";
        // line 253
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\").show();
            \$(this.editor_container).hide();
        },
        showEditor: function () {
            //Carga un formulario limpio si no encuentra nada.
            if (\$(this.editor_container).find(\"*\").size() < 1) {
                this.editElement(0);
                return;
            }
            \$(this.main_container).find(\".tab-list-";
        // line 262
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\").removeClass(\"active\");
            \$(this.main_container).find(\".tab-editor-";
        // line 263
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\").addClass(\"active\");
            //Evitar ocultar la lista si el editor esta en la parte superior!
            if(!this.top_editor){
                \$(\"#bag_list-";
        // line 266
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\").hide();
            }
            \$(this.editor_container).show();
        },
        saveElement: function (id, token) {
            var context = this;
            var main_container = \$(\"#List_";
        // line 272
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo "\");
            var row = main_container.find(\".table-item-\" + id);
            setElementDisableState(row, false);
            var tmp_form = \$(\"<form>\");
            tmp_form.append(row.clone().find(\"input\"));
            var data = \"action=update&__token=\" + token + \"&id=\" + id + \"&entity=\" + this.entity + \"&bundle=\" + this.bundle + \"&\";
            data += tmp_form.serialize();
            console.log(data);

            \$.ajax({
                url: '";
        // line 282
        echo $this->env->getExtension('routing')->getPath("schema_ajaxeditor");
        echo "',
                data: data,
                type: \"POST\",
                /*data: {
                    entity: this.entity,
                    entity2: this.entity2,
                    bundle: this.bundle,
                    id: id,
                    id2: this.id2,
                    conds: this.conds
                    ";
        // line 292
        if (($this->getContext($context, "title") != null)) {
            echo ", title: '";
            echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
            echo "'";
        }
        // line 293
        echo "                },*/
                success: function (e) {
                    console.log(e);
                    if(e.result > 0){
\t\t\t\t\t\tif(e.result == 3){
\t\t\t\t\t\t\trow.css(\"background-color\", \"red\");
\t\t\t\t\t\t\trow.animate({\"background-color\": \"none\"}, 3000);
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\trow.css(\"background-color\", \"green\");
\t\t\t\t\t\t\trow.animate({\"background-color\": \"none\"}, 3000);
\t\t\t\t\t\t}

                        //Ocultar togglers
                        row.find(\".text-toggler\").show();
                        row.find(\".text-toggler-input\").hide();
                        //Utils.showBootstrapNotify(\"#bag_notify-";
        // line 308
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\", \"success\", \"Correcto\", \"Se ha modificado el elemento.\");


                        if (context.target_onchange !== null) {
                            context.target_onchange();
                        }
                        if (context.target_onreload !== null) {
                            context.target_onreload();
                        }
                    }else{
                        Utils.showBootstrapNotify(\"#bag_notify-";
        // line 318
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\", \"danger\", \"Error\", \"Código de seguridad no válido.\");
                    }
                    setElementDisableState(row, true);
                },
                error: function(e){
\t\t\t\t\trow.css(\"background-color\", \"red\");
\t\t\t\t\trow.animate({\"background-color\": \"none\"}, 3000);
                    setElementDisableState(row, true);
                    context.printError(e);
                }
            });

        },
        editElement: function (id, fn) {
            var context = this;
            //var main_container = \$(\"#List_";
        // line 333
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo "\");
            var bag = \$(context.editor_container);
            //console.log(bag);
            \$(bag).html(\$(\".loading-template\").html());
            context.showEditor();
            \$.ajax({
                url: '";
        // line 339
        echo $this->env->getExtension('routing')->getPath("schema_editor");
        echo "',
                data: {
                    entity: this.entity,
                    entity2: this.entity2,
                    bundle: this.bundle,
                    id: id,
                    id2: this.id2,
                    conds: this.conds
                    /*permisions: '";
        // line 347
        echo twig_escape_filter($this->env, $this->getContext($context, "permisions_encrypt"), "html", null, true);
        echo "'*/
                    ";
        // line 348
        if (($this->getContext($context, "title") != null)) {
            echo ", title: '";
            echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
            echo "'";
        }
        // line 349
        echo "                },
                success: function (e) {
                    var e = \$(e);
                    //Quitar el titulo del editor???
                    if(context.top_editor){
                        \$(e).find(\".panel-heading\").hide();
                    }
                    bag.html(\"\");
                    bag.append(e);
                    var reponseScript = e.filter(\"script\");
                    //Evalua los scripts porque no cargan al insertarlos
                    \$.each(reponseScript, function (val) {
                        eval(val.text);
                    });

                    if (!context.enable_dialogs) {
                        \$(e).hide();
                        \$(e).slideDown();
                    } else {
                        //\$(e).appendTo(\"body\");
                        laster = e;
                        //Condigo no seguro [2]
                        \$(e[2]).dialog({
                            title: \"Editor de elementos\",
                            width: \"70%\"
                        });
                    }
                    if(fn !== undefined){
                        fn();
                    }
                },
                error: function (e) {
                    context.showList();
                    Utils.showBootstrapNotify(\"#bag_notify-";
        // line 382
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\", \"danger\", \"Error\", \"El servidor no respondió correctamente.\");
                    context.printError(e);
                }
            });
        },
        joinElement: function (id, mode) {
            var main_container = \$(\"#List_";
        // line 388
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo "\");
            var context = this;
            mode = mode ? \"add\" : \"remove\";
            var tojoin = \$(main_container).find(\".table-item-\" + id);
            setElementDisableState(tojoin, false);
            \$.ajax({
                url: '";
        // line 394
        echo $this->env->getExtension('routing')->getPath("schema_ajaxjoineditor");
        echo "',
                data: {
                    entity: this.entity,
                    entity2: this.entity2,
                    bundle: this.bundle,
                    id: id,
                    id2: this.id2,
                    action: mode,
                    field: this.field
                },
                success: function (e) {
                    setElementDisableState(tojoin, true);
                    console.log(e);
                    if (e.result > 0) {
                        if(e.action.indexOf(\"remo\")>-1){
                            \$(tojoin).find(\".list-action-add\").show();
                            \$(tojoin).find(\".list-action-quit\").hide();
                        }else{
                            \$(tojoin).find(\".list-action-add\").hide();
                            \$(tojoin).find(\".list-action-quit\").show();
                        }
                        //context.getList();
                        //Call Event
                        if (context.target_onchange !== null) {
                            context.target_onchange();
                        }
                    }
                },
                error: function (e) {
                    setElementDisableState(tojoin, true);
                    context.printError(e);
                }
            });
        },
        deleteElement: function (id, token) {
            //if(!confirm(\"¿Confirma que desea eliminar este elemento?\")) return;

            var context = this;
            var action = function(){
              var item = \$(\"#List_";
        // line 433
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo "\").find(\"#element_\" + id);
              setElementDisableState(item, false);
              \$.ajax({
                  url: \"";
        // line 436
        echo $this->env->getExtension('routing')->getPath("schema_ajaxeditor");
        echo "\",
                  data: {
                      __token: token,
                      id: id,
                      action: \"delete\",
                      bundle: context.bundle,
                      entity: context.entity
                  },
                  success: function (e) {
                      setElementDisableState(item, true);
                      console.log(e);
                      if(e.result === 0){
                          return;
                      }
                      \$(item).remove();

                      //Call Event
                      if (context.target_onchange !== null) {
                          context.target_onchange();
                      }
                      if (context.target_onreload !== null) {
                          context.target_onreload();
                      }
                  },
                  error: function (e) {
                      setElementDisableState(item, true);
                      context.printError(e);
                  }
              });
            };
            sconfirm(\"Eliminar elemento\", \"¿Confirma que desea eliminar este elemento?\", function(c){
                if(c){
                    action();
                }
            });
        },
        changeOrder: function (column) {
            var last_state = this.order[column];
            this.order = {};
            //console.log(last_state);
            last_state = last_state === \"DESC\" ? \"ASC\" : \"DESC\";
            this.order[column] = last_state;
            this.getList();
        },
        getAjaxData: function () {
            var data = {
                paginator_page: this.page,
                permisions: this.permisions,
                paginator_count: this.page_count,
                entity: this.entity,
                bundle: this.bundle,
                conds: this.conds,
                order: this.order,
                hide: this.hide,
                id2: this.id2,
                entity2: this.entity2,
                filter: this.filter,
                ress: this.ress
            };
            return data;
        },
        exportExcel: function () {
            var data = this.getAjaxData();
            var url = this.url + \"?\" + \$.param(data) + \"&export=excel\";
            window.location = url;
        },
        printElement: function (id) {
            var data = {
                id: id,
                entity: this.entity,
                bundle: this.bundle
            };

            var url = this.url_editor + \"?\" + \$.param(data) + \"&export=print\";
            window.open(url);
        },
        print: function () {
            var data = this.getAjaxData();
            var url = this.url + \"?\" + \$.param(data) + \"&export=print\";
            window.open(url);
        },
        getList: function () {
            var context = this;
            var content = \$(\"#List_";
        // line 519
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo "\").find(\".content\");

            var data = this.getAjaxData();
            setElementDisableState(content, false);
            \$.ajax({
                url: this.url,
                data: data,
                success: function (data) {
                    setElementDisableState(content, true);
                    content.html(data);
                    //Cambia de texto a input, viceversa
                    \$(content).find(\".field-type-string, .field-type-date\").textToggler(function(input, label, pairs){
                        var tr = \$(input).parent().parent();
                        //var id = \$(tr).attr(\"data\");
                        \$(tr).find(\".list-action-save\").click();
                        //focusNextInput(input);
                    });

                    //Notificar cambiando de color la fila si han habido cambios
                    \$(content).find(\"tr\").each(function(){
                       var tr = \$(this);
                       tr.find(\"input\").change(function(){
                           tr.css(\"background-color\", \"#FFEBE3\");
                       });
                    });
                    /*var e = \$(content).find(\".text-toggler\").each(function(){
                       var tog_el = \$(this).prop(\"element\");
                       if(tog_el === undefined) return;
                       //console.log(tog_el);
                       var row = \$(tog_el.input).parent().parent();
                       \$(tog_el.input).change(function(){
                          row.css(\"background-color\", \"#FFE6BC\");
                       });
                    });*/

                    if (context.target_onreload !== null) {
                        context.target_onreload();
                    }
                    //No utlizado, supeustamente se añadade un boton quecambia los campos a editables pero NO
                    \$(content).find(\".update\").each(function () {
                        \$(this).click(function () {
                            alert();
                            \$(this).parent().find(\".text-toggler\").textToggler();
                        });
                    });
                },
                error: function(e){
                    Utils.showBootstrapNotify(\"#bag_notify-";
        // line 566
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\", \"danger\", \"Error\", \"Ocurrio un error al intentar obtener el listado.\")
                    context.printError(e);
                }
            });
        },
        setElementsOnPage: function(size){
            var context = this;
            context.page = 1;
            context.page_count = size;
            context.getList();
        },
        prepare: function(){
        }
    };
    \$(function () {
        ";
        // line 581
        if ((!$this->getContext($context, "tabular"))) {
            // line 582
            echo "            SchemaList_";
            echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
            echo ".setTopEditor();
        ";
        }
        // line 584
        echo "        SchemaList_";
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo ".prepare();
        SchemaList_";
        // line 585
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo ".getList();
    });
</script>
<div id=\"List_";
        // line 588
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo "\">
    ";
        // line 589
        if ($this->getContext($context, "tabular")) {
            // line 590
            echo "        <ul class=\"nav nav-tabs\">
            <li role=\"presentation\" class=\"tab-list-";
            // line 591
            echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
            echo " active\"><a href=\"javascript:SchemaList_";
            echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
            echo ".showList()\">Listado - ";
            if (($this->getContext($context, "title") != null)) {
                echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
            }
            echo "</a></li>
            ";
            // line 592
            if ($this->getAttribute($this->getContext($context, "permisions"), "escritura")) {
                // line 593
                echo "                <li role=\"presentation\" class=\"tab-editor-";
                echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
                echo "\"><a href=\"javascript:SchemaList_";
                echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
                echo ".showEditor()\">Editor de elementos</a></li>
            ";
            }
            // line 595
            echo "        </ul>
    ";
        }
        // line 597
        echo "    <div id=\"bag_notify-";
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\"></div>
    <div id=\"bag_list-";
        // line 598
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\" class=\"list-bag\">
        <div class=\"panel panel-default\" style=\"min-height: 300px;\">
            <div class=\"panel-heading\">
                <span class=\"sty-font-20\">
                    ";
        // line 602
        if (($this->getContext($context, "title") != null)) {
            echo twig_escape_filter($this->env, $this->getContext($context, "title"), "html", null, true);
        } else {
            // line 603
            echo "                        Listado: <b>";
            echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
            echo "</b>
                        ";
            // line 604
            if (($this->getContext($context, "entity2") != "")) {
                // line 605
                echo "                            para <b>";
                echo twig_escape_filter($this->env, $this->getContext($context, "entity2_name"), "html", null, true);
                echo "</b> #";
                echo twig_escape_filter($this->env, $this->getContext($context, "id2"), "html", null, true);
                echo "
                        ";
            }
            // line 607
            echo "                    ";
        }
        // line 608
        echo "                </span>
                ";
        // line 609
        if ($this->getAttribute($this->getContext($context, "permisions"), "crear")) {
            // line 610
            echo "                    <a title=\"Crear nuevo elemento\" class=\"btn btn-default pull-right\" href=\"javascript:SchemaList_";
            echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
            echo ".editElement(0)\"><img height=\"16\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/add.png"), "html", null, true);
            echo "\"/></a>
                ";
        }
        // line 612
        echo "                <a title=\"Actualizar listado\" class=\"btn btn-default sty-box-margin-right-10 pull-right\" href=\"javascript:SchemaList_";
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo ".getList()\"><img height=\"16\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/reload.png"), "html", null, true);
        echo "\"/></a>
                <a title=\"Exportar a hoja de cálculo\" class=\"btn btn-default sty-box-margin-right-10 pull-right layout-responsive-desktop\" href=\"javascript:SchemaList_";
        // line 613
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo ".exportExcel()\"><img height=\"16\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/table_excel.png"), "html", null, true);
        echo "\"/></a>
                <a title=\"Imprimir listado\" class=\"btn btn-default sty-box-margin-right-10 pull-right layout-responsive-desktop\" href=\"javascript:SchemaList_";
        // line 614
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo ".print()\"><img height=\"16\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/print.png"), "html", null, true);
        echo "\"/></a>

                <select onchange=\"SchemaList_";
        // line 616
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo ".setElementsOnPage(this.value)\" title=\"Elementos visibles en la tabla\" style=\"width: auto;margin-right: 5px;\" class=\"pull-right form-control layout-responsive-desktop\" id=\"page_count-";
        echo twig_escape_filter($this->env, $this->getContext($context, "entity"), "html", null, true);
        echo "\">
                    <option selected=\"\">30</option>
                    <option>100</option>
                    <option>500</option>
                    <option>1000</option>
                </select>
            </div>
            <div id=\"bag_editor-top-";
        // line 623
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo "\" class=\"editor-bag\"></div>
            <div class=\"panel-body\" style=\"padding: 0\">
                <div style=\"display: none;\" class=\"loading-template\">
                    <div class=\"sty-box-padding-20\">
                        <img src=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img/loading_mini.gif"), "html", null, true);
        echo "\"/> <span class=\"loading-description\" style=\"font-size: 20px;\">Cargando editor, por favor espere...</span>
                    </div>
                </div>
                <div style=\"overflow-y: scroll\">
                    <table class=\"list-table\" style=\"width: 100%\">
                        <thead>
                            <tr>
                                <th>Modificación </th>
                                ";
        // line 635
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "columns"));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            if ((!$this->env->getExtension('app_extension')->inArray($this->getAttribute($this->getContext($context, "x"), "name"), $this->getContext($context, "hide")))) {
                // line 636
                echo "                                    <th>
                                        <img style=\"background-color: white;border-radius: 3px;\" onclick=\"SchemaList_";
                // line 637
                echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
                echo ".changeOrder('";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "name"), "html", null, true);
                echo "')\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/orden_az.png"), "html", null, true);
                echo "\"/>
                                        <img style=\"background-color: white;border-radius: 3px;\" onclick=\"SchemaList_";
                // line 638
                echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
                echo ".openFilter('";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "name"), "html", null, true);
                echo "')\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/condiciones.png"), "html", null, true);
                echo "\"/>
                                        <span id=\"column_";
                // line 639
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "name"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "name")), "html", null, true);
                echo "</span>
                                    </th>
                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 642
        echo "                            </tr>
                        </thead>
                        <tbody class=\"content\">
                            <tr>
                                <td colspan=\"";
        // line 646
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getContext($context, "columns")), "html", null, true);
        echo "\">
                                    Cargando listado de elementos...
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div>
        ";
        // line 657
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "columns"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            if ((!$this->env->getExtension('app_extension')->inArray($this->getAttribute($this->getContext($context, "x"), "name"), $this->getContext($context, "hide")))) {
                // line 658
                echo "            <div style=\"display: none;\" class=\"column-filter filter-for-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "name"), "html", null, true);
                echo "\">
                <span>Aplicar filtros a la columna <b>";
                // line 659
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "name"), "html", null, true);
                echo "</b></span>
                <form class=\"column-filter-form\">
                    <input type=\"hidden\" name=\"type\" value=\"";
                // line 661
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "type"), "html", null, true);
                echo "\"/>

                    ";
                // line 663
                if ((twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "search_data")) > 0)) {
                    // line 664
                    echo "                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">Debe ser:</span>
                            <select class=\"form-control\" name=\"equal2\">
                                ";
                    // line 667
                    $this->env->loadTemplate("AcmeSFSBundle:Schema:field_options_default.html.twig")->display(array_merge($context, array("data" => $this->getAttribute($this->getContext($context, "x"), "search_data"))));
                    // line 668
                    echo "                            </select>
                        </div>
                    ";
                }
                // line 671
                echo "
                    ";
                // line 672
                if ((!(null === $this->getAttribute($this->getContext($context, "x"), "entity")))) {
                    // line 673
                    echo "                        <script>
                            /*\$.ajax({
                                url: '";
                    // line 675
                    echo $this->env->getExtension('routing')->getPath("url_search_input");
                    echo "',
                                data: {
                                    name: \"equal2\",
                                    entity: \"";
                    // line 678
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "entity"), "html", null, true);
                    echo "\",
                                    key: \"id\",
                                    search_in: {}
                                },
                                success: function (h) {
                                    var bag = \$(\".bag-search-";
                    // line 683
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
                    echo ":first\");
                                    bag.html(h);
                                    //eval(bag.find(\"script\").html());
                                }
                            });*/
                        </script>
                        <div class=\"bag-search-";
                    // line 689
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                    echo "_";
                    echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
                    echo "\">
                            ";
                    // line 690
                    echo $this->env->getExtension('app_extension')->fSearch(array("name" => "equal2", "entity" => $this->getAttribute($this->getContext($context, "x"), "entity"), "key" => "id"));
                    echo "
                        </div>
                        ";
                    // line 693
                    echo "                    ";
                } else {
                    // line 694
                    echo "                        ";
                    if (($this->getAttribute($this->getContext($context, "x"), "type") == "integer")) {
                        // line 695
                        echo "                            <div class=\"input-group\">
                                <span class=\"input-group-addon\">Igual que:</span>
                                <input name=\"equal\" type=\"number\" class=\"form-control\" placeholder=\"Escriba el número\">
                            </div>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\">Mayor que:</span>
                                <input name=\"mayor\" type=\"number\" class=\"form-control\" placeholder=\"Escriba el número\">
                            </div>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\">Menor que:</span>
                                <input name=\"minor\" type=\"number\" class=\"form-control\" placeholder=\"Escriba el número\">
                            </div>
                            <div class=\"input-group\">
                                <span class=\"input-group-addon\">Operación:</span>
                                <select name=\"operation\" class=\"form-control\">
                                    <option value=\"\">Ninguna</option>
                                    <option value=\"sum\">Suma</option>
                                    <option value=\"avg\">Promedio</option>
                                </select>
                            </div>
                        ";
                    }
                    // line 716
                    echo "                    ";
                }
                // line 717
                echo "
                    ";
                // line 718
                if (($this->getAttribute($this->getContext($context, "x"), "type") == "string")) {
                    // line 719
                    echo "                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">Que contenga:</span>
                            <input name=\"search\" type=\"text\" class=\"form-control\" placeholder=\"Escriba el texto\">
                        </div>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">Operación:</span>
                            <select name=\"operation\" class=\"form-control\">
                                <option value=\"\">Ninguna</option>
                                <option value=\"sum\">Suma</option>
                                <option value=\"avg\">Promedio</option>
                            </select>
                        </div>
                    ";
                }
                // line 732
                echo "                    ";
                if (($this->getAttribute($this->getContext($context, "x"), "type") == "boolean")) {
                    // line 733
                    echo "                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">Debe ser:</span>
                            <select name=\"equal\" class=\"form-control\">
                                <option value=\"true\">Verdadero</option>
                                <option value=\"false\">Falso</option>
                            </select>
                        </div>
                    ";
                }
                // line 741
                echo "                    ";
                if ((($this->getAttribute($this->getContext($context, "x"), "type") == "datetime") || ($this->getAttribute($this->getContext($context, "x"), "type") == "date"))) {
                    // line 742
                    echo "                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">Igual que:</span>
                            <input name=\"equal\" type=\"date\" class=\"form-control\" placeholder=\"Escriba la fecha\">
                        </div>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">Mayor que:</span>
                            <input name=\"mayor\" type=\"date\" class=\"form-control\" placeholder=\"Escriba la fecha\">
                        </div>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\">Menor que:</span>
                            <input name=\"minor\" type=\"date\" class=\"form-control\" placeholder=\"Escriba la fecha\">
                        </div>
                    ";
                }
                // line 755
                echo "                    <div class=\"sty-box-padding-5 sty-box-text-center\">
                        <input class=\"btn btn-success\" type=\"submit\" value=\"Aplicar\"/>
                        <a onclick=\"SchemaList_";
                // line 757
                echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
                echo ".removeFilter('";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "name"), "html", null, true);
                echo "')\" class=\"btn btn-info\">Quitar</a>
                        <a onclick=\"SchemaList_";
                // line 758
                echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
                echo ".hideFilter('";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "x"), "name"), "html", null, true);
                echo "')\" class=\"btn btn-danger\">Cancelar</a>
                    </div>
                </form>
            </div>
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 763
        echo "    </div>
</div>
<div id=\"bag_editor-";
        // line 765
        echo twig_escape_filter($this->env, ($this->getContext($context, "bundle") . $this->getContext($context, "entity")), "html", null, true);
        echo "\" class=\"editor-bag\"></div>
";
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Schema:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1154 => 765,  1150 => 763,  1133 => 758,  1127 => 757,  1123 => 755,  1108 => 742,  1105 => 741,  1095 => 733,  1092 => 732,  1077 => 719,  1075 => 718,  1072 => 717,  1069 => 716,  1046 => 695,  1043 => 694,  1040 => 693,  1035 => 690,  1029 => 689,  1018 => 683,  1010 => 678,  1004 => 675,  1000 => 673,  998 => 672,  995 => 671,  990 => 668,  988 => 667,  983 => 664,  981 => 663,  976 => 661,  971 => 659,  966 => 658,  955 => 657,  941 => 646,  935 => 642,  923 => 639,  915 => 638,  907 => 637,  904 => 636,  899 => 635,  888 => 627,  881 => 623,  869 => 616,  862 => 614,  856 => 613,  849 => 612,  841 => 610,  839 => 609,  836 => 608,  833 => 607,  825 => 605,  823 => 604,  818 => 603,  814 => 602,  807 => 598,  802 => 597,  798 => 595,  790 => 593,  788 => 592,  776 => 591,  773 => 590,  771 => 589,  767 => 588,  761 => 585,  756 => 584,  750 => 582,  748 => 581,  730 => 566,  680 => 519,  594 => 436,  588 => 433,  546 => 394,  537 => 388,  528 => 382,  493 => 349,  487 => 348,  483 => 347,  472 => 339,  463 => 333,  445 => 318,  432 => 308,  415 => 293,  409 => 292,  396 => 282,  383 => 272,  374 => 266,  368 => 263,  364 => 262,  352 => 253,  348 => 252,  344 => 251,  341 => 250,  313 => 225,  302 => 217,  271 => 189,  262 => 183,  252 => 175,  250 => 174,  143 => 70,  127 => 57,  118 => 51,  114 => 50,  108 => 47,  104 => 46,  98 => 45,  94 => 44,  90 => 43,  86 => 42,  82 => 41,  78 => 40,  74 => 39,  70 => 38,  66 => 37,  59 => 33,  29 => 5,  24 => 3,  21 => 2,  19 => 1,  48 => 8,  46 => 7,  41 => 6,  35 => 4,  33 => 3,  52 => 10,  47 => 12,  45 => 11,  39 => 7,  36 => 6,  31 => 4,  28 => 2,);
    }
}
