<?php

/* AcmeSFSBundle:Blog:blog.html.twig */
class __TwigTemplate_6085bb078c4ef57b5d9bae69fa9a37b8e14c5c385f078ab129fb56b39c98383a extends Twig_Template
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
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 2
            echo "    <script>
        function toggleBlogger(identifier, state) {
            if (state) {
                \$(\"#\" + identifier + \"_blog_editor\").slideUp();
                \$(\"#\" + identifier + \"_blog_preview\").slideDown();
            } else {
                \$(\"#\" + identifier + \"_blog_editor\").slideDown();
                \$(\"#\" + identifier + \"_blog_preview\").slideUp();
            }
            /*
            tinymce.init({selector: \"\", theme: \"modern\", plugins: [\"advlist autolink lists link image charmap print preview hr anchor pagebreak\", \"searchreplace wordcount visualblocks visualchars code fullscreen\", \"insertdatetime media nonbreaking save table contextmenu directionality\", \"emoticons template paste textcolor moxiemanager\"], toolbar1: \"insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image\", toolbar2: \"print preview media | forecolor backcolor emoticons\", image_advtab: true, templates: [{title: 'Test template 1', content: 'Test 1'}, {title: 'Test template 2', content: 'Test 2'}]});

             \$(\"#content\").data(\"sceditor\").destroy();
             \$(\"#content\").sceditor({
             emoticons: false,
             plugins: 'xhtml',
             width: \"100%\",
             height: \"400px\",
             style: \"/plugins/sceditor/minified/jquery.sceditor.default.min.css\"
             });*/
        }
    </script>
    <div id=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "_blog_editor\"
         ";
            // line 25
            if ($this->env->getExtension('app_extension')->roleGranted("ADMIN")) {
                // line 26
                echo "             style=\"display: none;\"
         ";
            }
            // line 28
            echo "         >
        <form id=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "_blog_form\">
            <span class=\"sty-label-blue\">Titulo del blog</span>
            <input class=\"input-soft\" required=\"\" type=\"text\" name=\"title\" value=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "title"), "html", null, true);
            echo "\">

            <input class=\"input-soft\" required=\"\" type=\"hidden\" name=\"identifier\" value=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getContext($context, "identifier"), "html", null, true);
            echo "\">
            <div>
                <textarea style=\"height: 600px;min-height: 600px;width: 100%;\" id=\"content\" required=\"\" type=\"text\" name=\"content\">";
            // line 35
            echo $this->getAttribute($this->getContext($context, "blog"), "content");
            echo "</textarea>
                ";
            // line 36
            echo $this->env->getExtension('app_extension')->util("tinyeditor", array("input_id" => "content", "form_id" => "blog_form"));
            // line 39
            echo "
            </div>
            <input id=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "_submit_blog_button\" class=\"button\" type=\"submit\" value=\"Guardar cambios\">
        </form> 
    </div>
    <script>
        \$(function() {
            \$(\"#";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "_blog_form\").submit(function(event) {
                event.preventDefault();
                //No guarda de una vez, hay algun error (Hilo) que no guarda sincronicamente :(
                //\$(\"#content\").data(\"sceditor\").updateOriginal();
                //setTimeout(function() {
                tinyMCE.triggerSave();
                //var cnt = tinymce.get('";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "').getContent();
                //\$(\"#";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "\").val(cnt);
                
                var bi =  \$(\"#";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "_blog_form\");
                var data = \$(\"#";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "_blog_form\").serialize();
                setElementDisableState(\"#";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "_submit_blog_button\", false);
                \$.ajax({
                    url: \"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("create_blogs");
            echo "\",
                    data: {
                        title: bi.find(\"[name=title]\").val(),
                        identifier: bi.find(\"[name=identifier]\").val(),
                        content: bi.find(\"[name=content]\").val()
                    },
                    type: \"POST\",
                    success: function(d) {
                        console.log(d);
                        \$(\"#";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "_blog_title\").html(d.title);
                        \$(\"#";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "_blog_content\").html(d.content);
                        toggleBlogger('";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "', true);
                        setElementDisableState(\"#";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "_submit_blog_button\", true);
                    }
                });
                //}, 1000);
            });
        });
    </script>
";
        }
        // line 79
        echo "<div id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
        echo "_blog_preview\"
     >
    ";
        // line 81
        if ($this->env->getExtension('app_extension')->roleGranted("ADMIN")) {
            // line 82
            echo "        <center>
            <button class=\"button\" onclick=\"toggleBlogger('";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "', false)\">
                <img src=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmesfs/img_icons/edit.png"), "html", null, true);
            echo "\" align=\"top\"/> Editar entrada
            </button>
        </center>
    ";
        }
        // line 88
        echo "    ";
        if ((null === $this->getContext($context, "blog"))) {
            // line 89
            echo "        <h1>El blog se encuentra vacio!</h1>
    ";
        } elseif (true) {
            // line 91
            echo "        <title id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "_blog_title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "title"), "html", null, true);
            echo "</title>
        <meta name=\"description\" content=\"";
            // line 92
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($this->getContext($context, "blog"), "content")), 0, 255), "html", null, true);
            echo "\">
        <div class=\"segment-content\" id=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "identifier"), "html", null, true);
            echo "_blog_content\">
            ";
            // line 94
            echo $this->getAttribute($this->getContext($context, "blog"), "content");
            echo "
        </div>
    ";
        }
        // line 97
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Blog:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 97,  201 => 94,  197 => 93,  186 => 91,  172 => 84,  168 => 83,  165 => 82,  146 => 71,  142 => 70,  138 => 69,  117 => 57,  83 => 41,  79 => 39,  73 => 35,  68 => 33,  63 => 31,  55 => 28,  51 => 26,  80 => 40,  39 => 4,  177 => 87,  167 => 83,  163 => 81,  153 => 78,  144 => 75,  141 => 74,  135 => 72,  122 => 59,  115 => 63,  109 => 55,  107 => 60,  91 => 46,  82 => 50,  77 => 36,  75 => 31,  37 => 3,  132 => 53,  128 => 68,  124 => 51,  116 => 49,  112 => 62,  100 => 52,  95 => 44,  93 => 43,  90 => 47,  38 => 8,  26 => 4,  21 => 2,  19 => 1,  193 => 92,  187 => 15,  182 => 89,  151 => 9,  139 => 7,  136 => 54,  131 => 52,  123 => 51,  120 => 50,  113 => 56,  88 => 29,  81 => 28,  74 => 24,  70 => 27,  62 => 16,  58 => 29,  54 => 13,  50 => 14,  45 => 24,  42 => 11,  30 => 5,  27 => 1,  383 => 148,  376 => 144,  373 => 143,  359 => 137,  351 => 136,  344 => 134,  339 => 131,  335 => 130,  327 => 128,  324 => 127,  321 => 126,  319 => 125,  314 => 124,  312 => 123,  307 => 122,  305 => 121,  301 => 120,  298 => 119,  294 => 118,  291 => 117,  289 => 116,  286 => 115,  280 => 111,  274 => 110,  264 => 108,  261 => 107,  257 => 106,  252 => 104,  239 => 94,  235 => 93,  231 => 92,  227 => 91,  221 => 87,  219 => 86,  213 => 83,  206 => 78,  195 => 75,  190 => 74,  184 => 91,  179 => 88,  176 => 8,  173 => 68,  171 => 84,  166 => 66,  164 => 65,  159 => 81,  157 => 79,  154 => 62,  150 => 77,  145 => 8,  134 => 68,  129 => 55,  119 => 53,  108 => 47,  104 => 53,  99 => 49,  94 => 48,  66 => 26,  57 => 15,  49 => 25,  43 => 6,  40 => 9,  35 => 15,  28 => 3,);
    }
}
