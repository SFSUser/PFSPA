<?php

/* AcmeSiteBundle:OFM:muro.html.twig */
class __TwigTemplate_3d968fd7fff0aa0574a2d8a8fb8584433bd6ae08427a982c07e0c763969c66ca extends Twig_Template
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
        echo "    <div class=\"www-header\" style=\"background-image: linear-gradient(to bottom, transparent, white), url(/img/pfspa_2017.jpg)\">
        <span>Últimas publicaciones</span>
    </div>
    <div class=\"fixer sheet-art sty-box-overflow-auto sty-box-padding-5 \" style=\"margin-top: -90px;min-height: 800px;\">
      ";
        // line 12
        if ((!(null === $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "session"), "get", array(0 => "hermano_id"), "method")))) {
            // line 13
            echo "          ";
            $context["datas"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "session"), "get", array(0 => "hermano_data"), "method");
            // line 14
            echo "          <div class=\"post\">
            <div style=\"float:left; width: 30%;text-align:center;\">
              <img style=\"width:180px;border-radius:100px;\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "datas"), "imagen"), "html", null, true);
            echo "\"/>
              <b>";
            // line 17
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getContext($context, "datas"), "nombre") . " ") . $this->getAttribute($this->getContext($context, "datas"), "apellidos")), "html", null, true);
            echo " </b>
            </div>

        <div style=\"float:left; width: 68%\">
            <form id=\"form_post\">
              <div class=\"input-group sty-box-margin-top-5\">
                <span class=\"input-group-addon\" id=\"basic-addon1\">Titulo</span>
                <input required type=\"text\" class=\"form-control\" name=\"titulo\" placeholder=\"Escriba un titulo de la publicación...\" >
              </div>
              <div class=\"input-group sty-box-margin-top-5\">
                <span class=\"input-group-addon\" id=\"basic-addon1\">Tags</span>
                <input type=\"text\" class=\"form-control\" name=\"tags\" placeholder=\"Tags...\" >

              </div>
              <textarea required=\"\" class=\"form-control sty-box-margin-top-5\" name=\"descripcion\" placeholder=\"Escriba el mensaje...\"></textarea>
              <button class=\"btn btn-info sty-box-margin-top-5\">Publicar</button>
            </form>
          </div>
        </div>
          <script>
            \$(function(){

              Muro.get();
              \$(\"#form_post\").submit(function(e){
                e.preventDefault();

                setElementDisableState(\"#form_post\",0);
                \$.ajax({
                  url: '";
            // line 45
            echo $this->env->getExtension('routing')->getPath("url_muro_add");
            echo "',
                  type: 'POST',
                  data: \$(\"#form_post\").serialize(),
                  success: function(e){
                    console.log(e);

                    setElementDisableState(\" #form_post\",1);
                    Muro.get();
                    Muro.clear();
                  }
                });
              });
            });
            var Muro = {
              page: 0,
              remove: function(id){

                setElementDisableState(\" #post_\" + id,0);
                \$.ajax({
                  url: '";
            // line 64
            echo $this->env->getExtension('routing')->getPath("url_muro_del");
            echo "',
                  data: {id: id},
                  success: function(e){

                    \$(\"#post_\" + id).remove();
                    \$(\"#msg\").html(\"\");
                  },
                  complete: function(){
                    setElementDisableState(\" #post_\" + id,1);
                  }
                });
              },
              clear: function(){
                \$(\"#post_container\").find(\"input,textarea\").each(function(e){
                  \$(e).val(\"\");
                });
              },
              get: function(p){
                this.page = p === undefined ? this.page : p;
                \$(\"#msg\").html(\"Cargando resultados ...\");
                setElementDisableState(\" #post_container\",0);
                \$.ajax({
                  url: '";
            // line 86
            echo $this->env->getExtension('routing')->getPath("url_muro_get");
            echo "',
                  data: {paginator_page: p},
                  success: function(e){

                    setElementDisableState(\" #post_container\",1);
                    \$(\"#post_container\").html(e);
                    \$(\"#msg\").html(\"\");
                  }
                });
              }
            };
            function getListPage(v){
              Muro.get(v);
\t\t        }
          </script>
      ";
        } else {
            // line 102
            echo "        <b>No ha iniciado sesión</b>
      ";
        }
        // line 104
        echo "      <center><span id=\"msg\"></span></center>
      <div id=\"post_container\"></div>
      <style>
        .post:hover{
          text-decoration: none;
          background-color: whitesmoke;
        }
        .post {
          overflow: auto;
          border-top-style: dotted;
          border-top-width: 1px;
          border-top-color: gainsboro;
          padding: 5px;
        }
      </style>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeSiteBundle:OFM:muro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 104,  159 => 102,  140 => 86,  115 => 64,  93 => 45,  62 => 17,  58 => 16,  54 => 14,  51 => 13,  49 => 12,  43 => 8,  40 => 7,  35 => 6,  30 => 4,);
    }
}
