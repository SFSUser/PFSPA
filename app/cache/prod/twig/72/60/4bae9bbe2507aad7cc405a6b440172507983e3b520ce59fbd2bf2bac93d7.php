<?php

/* AcmeSFSBundle:Utils:tinyeditor.html.twig */
class __TwigTemplate_72604bae9bbe2507aad7cc405a6b440172507983e3b520ce59fbd2bf2bac93d7 extends Twig_Template
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
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/plugins/tinymce/tinymce.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

<script type=\"text/javascript\">
    function loadTiny_";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "(){
        var parent = \$(\"#";
        // line 6
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\").parent();
        tinymce.init({
            height: 400,
            selector: \"#";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\",
            theme: \"modern\",
            plugins: [\"advlist autolink lists link image charmap print preview hr anchor pagebreak\", \"searchreplace wordcount visualblocks visualchars code fullscreen\", \"insertdatetime media nonbreaking save table contextmenu directionality\", \"emoticons template paste textcolor moxiemanager\"],
            toolbar1: \"insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image\",
            toolbar2: \"print preview media | forecolor backcolor emoticons\",
            image_advtab: true,
            templates: [{title: 'Test template 1', content: 'Test 1'}, {title: 'Test template 2', content: 'Test 2'}],
            setup: function(ed) {
                ed.on('init', function(args) {
                    console.log(\"Tiny onInit\");
                    //\$(\"#";
        // line 19
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\").appendTo(parent);

                    //IMGUR UPLOADER

                    //tinymce.get('";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "').setContent(\$(\"#";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\").val());
                    
        
                    \$(\".mce-i-browse:first\").click(function() {
                        //\$(\"#mce_108-inp\").val(\"Cargando... espere\");
                        ImgurUploader.set(null, null, function(data) {
                            console.log(data);
                            var image = data.upload.links.original;
                            if (\$(\"#mce_108-inp\").size() > 0) {
                                \$(\"#mce_108-inp\").val(image);
                            } else {
                                tinymce.execCommand('mceInsertContent', false, '<img src=\"' + image + '\">');
                            }
                        });
                        ImgurUploader.upload();
                    });
                });
            }
        });
    }

    \$(function() {
        //\$(\"#";
        // line 45
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\").appendTo(\"#editor_container_";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\");
        
        loadTiny_";
        // line 47
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "();
        
        //console.log(\"SET CHANGE EVENT\");
        //\$(\"#";
        // line 50
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\").change(function(){
        //    console.log(\"CHANGE EVENT\");
        //    console.log(\"Content: \" + \$(this).val());
            //tinymce.get('";
        // line 53
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "').setContent(\$(this).val());
        //});
                    
        //\$(\"#";
        // line 56
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\").change(function(){
        //    tinymce.get('";
        // line 57
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "').setContent(\$(this).val());
        //});

        var editCallback = function(event) {
            console.log(\"Guardando editor...\");
            tinyMCE.triggerSave();
            var contenido = tinymce.get('";
        // line 63
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "').getContent(); //\$(\"#nic_editor_contenido\").val();
            \$(\"#";
        // line 64
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\").val(contenido);
            console.log(\"TinyMCE: Saved!\");
            return true;
        };

        \$(\"#SchemeEditor_";
        // line 69
        echo twig_escape_filter($this->env, $this->getContext($context, "form"), "html", null, true);
        echo "\").submit(editCallback);
        \$(\"#SchemeEditor_";
        // line 70
        echo twig_escape_filter($this->env, $this->getContext($context, "form"), "html", null, true);
        echo "\").find(\"input[type=submit]\").click(editCallback);
        \$(\"#";
        // line 71
        echo twig_escape_filter($this->env, $this->getContext($context, "form"), "html", null, true);
        echo "\").submit(editCallback);
        \$(\"#";
        // line 72
        echo twig_escape_filter($this->env, $this->getContext($context, "form"), "html", null, true);
        echo "\").find(\"input[type=submit]\").click(editCallback);
    });
</script>
<div style=\"margin-top: 5px;\" id=\"editor_container_";
        // line 75
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\">
</div>";
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Utils:tinyeditor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 75,  145 => 72,  141 => 71,  137 => 70,  133 => 69,  125 => 64,  121 => 63,  112 => 57,  108 => 56,  102 => 53,  96 => 50,  90 => 47,  83 => 45,  56 => 23,  49 => 19,  36 => 9,  30 => 6,  26 => 5,  19 => 2,);
    }
}
