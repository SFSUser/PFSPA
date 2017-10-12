/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//Clase que simplifica la funciones escenciales del editor.

function EditorManager() {
    this.editor = null;
    this.template = null;
    this.url = "";
    this.order = {"id": "ASC"};
    this.conditions = {};
    this.callbackOnCreate = null;
    this.entity = "";
    this.bundle = "";
    this.container = [];
}

EditorManager.prototype.destroyAll = function(ev) {
    for(var x in this.container){
        x = this.container[x];
        x.destroyElement();
    }
    this.container = [];
};
EditorManager.prototype.addNew = function(ev) {
    var ne = new EditorAjax(this);
    ne.load();
    this.container.push(ne);
    if (ev !== undefined) {
        ev(ne);
    }
    if (this.callbackOnCreate !== null) {
        this.callbackOnCreate(ne);
    }
};
EditorManager.prototype.getAll = function(ev) {
    var context = this;
    //this.editor.getAllAndClone(this.callbackOnCreate, this.columns, this.order);
    var data = {};
    data["entity"] = this.entity;
    data["bundle"] = this.bundle;
    data["action"] = "getall";
    data["consult_order"] = this.order;
    data["consult_conditions"] = this.conditions;
    $.ajax({
        url: this.url,
        data: data,
        type: "POST",
        success: function(d) {
            console.log(d);
            for (var x in d.data) {
                x = d.data[x];
                var ne = new EditorAjax(context);
                //ne.entity = context.entity;
                //ne.bundle = context.bundle;
                //ne.ajax_editor = context.url;
                //ne.setTemplate(context.template);
                ne.load();
                context.container.push(ne);
                if (ev !== undefined) {
                    ev(ne, x);
                }
                if (context.callbackOnCreate !== null) {
                    context.callbackOnCreate(ne, x);
                }
                ne.parseResponse(x.columns);
            }
        },
        error: function(e) {
            console.log(e);
        }
    });
};



		//Clase que cambia el estilo del input:
			$(function() {
				$.fn.textToggler = function(target_save, target_tab) {
					var pairs = [];
					var elements = this;
					$(this).each(function(i) {
						var prev = elements[i -1 ];
						var next = elements[i + 1 ];
						
						var context = this;
						
						
						var input = document.createElement("input");
						var textarea = false;
						var type = $(this).attr("type");
						type = type !== undefined ? type : "text";
						
						pairs.push({
							label: context,
							input: input
						});
						
						if ($(this).attr("show") === "textarea") {
							textarea = true;
							input = document.createElement("textarea");
							$(input).width("100%");
						}
						
						switch(type.toLowerCase()){
							case "integer":
								$(input).attr("type", "number");
								break;
							case "date":
								$(input).attr("type", "date");
								break;
							case "datetime":
								$(input).attr("type", "datetime-local");
								break;
							case "text":
							default:
								$(input).attr("type", "text");
								break;
						}
						
						$(input).hide();
						$(input).css("color", "black");
						$(input).addClass("text-toggler-input");
						//console.log($(input).css("font-size"));
						$(input).attr("name", $(this).attr("name"));
						$(input).val($(this).html());
						var resizer = function() {
							if (!textarea) {
								$(input).width($(context).width() + 20);
							}
						};
						resizer();
						$(input).bind("change paste keyup", function() {
							$(context).html($(this).val());
							resizer();
						});
						
						var toggler = function(st, s) {
							if(st){
								$(input).css("font-size", $(context).css("font-size"));
								resizer();
								$(context).hide();
								$(input).show();
								if(s){
									$(input).select();
								}
							} else {
								$(input).hide();
								$(context).show();
							}
						};
						
						$(input).keyup(function(event) {
							var tab = event.keyCode === 9 && !event.shiftKey;
							var enter = event.keyCode === 13 && !event.shiftKey;
							if(tab || enter){
								//Predispone el siguiente cambio al oprimir el tabulador
								var ne = $(next).prop("element");
								if(ne !== undefined){
									ne.toggle(true, enter);
								}
								//console.log(ne);
							}
							if (tab) {
								if(target_tab !== undefined){
									target_tab(input, context, pairs);
								}
							}
							if (enter) {
								event.preventDefault();
								toggler(false);
								if(target_save !== undefined){
									target_save(input, context, pairs);
								}
							}
						});
						$(input).insertBefore(this);
						
						var pt = $(this).parent().prop("tagName") === "TD";
						
						var click_action = function(){
							toggler(true);
							$(input).select();
						}
						
						$(this).parent().click(click_action);
						$(this).click(click_action);
						
						$(context).prop("element", {
							next: next,
							prev: prev,
							input: input,
							label: context,
							context: context,
							toggle: toggler
						});
					});
				};
				
				$(".toggler").textToggler(function(i, c){
					console.log(c);
				}, function(i, c){
					console.log(c);
				});
			});

//Clase que hace llamadas para guardar datos del editor
function EditorAjax(m) {
    this.entity_manager = m;
    this.form = null;
    this.targetOnLoad = null;
    this.targetOnError = null;
    this.template = null;
}

EditorAjax.prototype.load = function() {
    var context = this;
    var copy = $(this.entity_manager.template).clone();
    //Quitar ids para evitar confusiones
    $(copy).attr("id", null);
    this.template = copy;
    //$(copy).find("input, textarea").val("");
    //Mostrar si la plantilla está oculta.
    $(copy).find(".text-toggler").textToggler();
    $(copy).show();
    $(this.entity_manager.template).parent().prepend(copy);
    var f = this.form = $(copy).find("form");

    $(f).find(".delete").click(function() {
        $(copy).css("opacity", "0.6");
        context.remove(function() {
            $(copy).css("opacity", "1");
            $(copy).fadeOut(function() {
                $(this).remove();
            });
        });
    });
    $(f).find(".delete").hide();

    $(f).submit(function(e) {
        e.preventDefault();
        $(copy).css("opacity", "0.6");
        context.save(function() {
            $(copy).css("opacity", "1");
        });
    });
};
EditorAjax.prototype.call = function(action, evt) {
    var context = this;
    var data = {};

    $(context.form).find("input, textarea").each(function() {
        var name = $(this).attr("name");
        data[name] = $(this).val();
    });

    data["entity"] = context.entity_manager.entity;
    data["bundle"] = context.entity_manager.bundle;
    data["action"] = action;

    //Condiciones y el resto de vainas
    data["consult_order"] = context.entity_manager.order;
    data["consult_conditions"] = context.entity_manager.conditions;
    //+ "&entity=" + context.entity + "&bundle=" + context.bundle + "&action=" + action;
    $.ajax({
        url: context.entity_manager.url,
        type: "post",
        data: data,
        success: function(data) {
            console.log(data);
            if (context.targetOnLoad !== null) {
                context.targetOnLoad(data);
            }
            if (evt !== undefined) {
                evt(data);
            }
            if (data.data === undefined) {
                return;
            }
            context.parseResponse(data.data.columns);
        },
        error: function(e) {
            if (context.targetOnError !== null) {
                context.targetOnError(data);
            }
        }
    });
};
EditorAjax.prototype.parseResponse = function(column_data) {
    var context = this;
    if (column_data !== undefined) {
        $(context.form).find(".delete").show();
    }
    for (var x in column_data) {
        x = column_data[x];
        var colec = $(context.form).find("[name=" + x.column_name + "]");
        $(colec).val(x.value);
        $(colec).html(x.value);
        $(colec).attr("src", x.value);
    }
};

EditorAjax.prototype.clearInputs = function(f) {
    this.targetOnLoad = f;
};
EditorAjax.prototype.setOnLoad = function(f) {
    this.targetOnLoad = f;
};
EditorAjax.prototype.setOnError = function(f) {
    this.targetOnError = f;
};
EditorAjax.prototype.get = function(f) {
    this.call("get", f);
};
EditorAjax.prototype.save = function(f) {
    this.call("create", f);
};
EditorAjax.prototype.remove = function(f) {
    this.call("delete", f);
};
EditorAjax.prototype.prepend = function(f) {
    $(this.template).parent().prepend($(this.template));
};
EditorAjax.prototype.destroyElement = function() {
    $(this.template).remove();
};
