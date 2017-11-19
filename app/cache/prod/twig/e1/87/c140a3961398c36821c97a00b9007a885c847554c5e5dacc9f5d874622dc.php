<?php

/* AcmeSFSBundle:Schema:field_image.html.twig */
class __TwigTemplate_e187c140a3961398c36821c97a00b9007a885c847554c5e5dacc9f5d874622dc extends Twig_Template
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
        echo "   ";
        // line 2
        echo "   <div style=\"display: inline-block;width: 150px;margin: 10px\">
       <style>
           .sty-label-photoclip{
               position: absolute;
               margin-bottom: -50px;
               z-index: 10;
               background-color: white;
               border-radius: 5px;
               padding: 5px;
               border-style: solid;
               border-width: 1px;
               border-color: gainsboro;
           }
       </style>
       <span class=\"sty-box-margin-5 sty-label-photoclip\">";
        // line 16
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getContext($context, "name")), "html", null, true);
        echo "</span>


       <img title=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getContext($context, "name")), "html", null, true);
        echo " - Haga click en la imagen para cambiarla.\" name=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\" onerror=\"this.src='";
        echo twig_escape_filter($this->env, $this->getContext($context, "image"), "html", null, true);
        echo "'\" src=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "image"), "html", null, true);
        echo "\" class=\"sheet-art\" style=\"width: 100%;\" id=\"field_image_";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\"/>
       <div id=\"camera_";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\">
           <div id=\"camera_preview_";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" class=\"preview sty-box-dotted\" style=\"width: 150px;height: 150px;display: none;\"></div>
       </div>

       <progress value=\"0\" id=\"progress_bar_";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\"></progress>

       <div id=\"upload_options_";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\">
           <a class=\"btn btn-success\" id=\"field_button_";
        // line 27
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" title=\"Seleccionar imagen del computador\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/open.png"), "html", null, true);
        echo "\"/></a>
           <a class=\"btn btn-warning\" id=\"field_button_remove_";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" title=\"Eliminar imagen actual\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/remove.png"), "html", null, true);
        echo "\"/></a>
           <a class=\"btn btn-info\" id=\"field_button_camera_";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" title=\"Tomar fotografia con la cámara\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/camera.png"), "html", null, true);
        echo "\"/></a>
       </div>
       <div style=\"display: none;\" id=\"camera_options_";
        // line 31
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\">
           <a class=\"btn btn-success\" id=\"field_button_capture_";
        // line 32
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" title=\"Tomar foto\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/camera.png"), "html", null, true);
        echo "\"/></a>
           <a class=\"btn btn-warning\" id=\"field_button_cancel_";
        // line 33
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" title=\"Volver\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img_icons/logout.png"), "html", null, true);
        echo "\"/></a>
       </div>
       <input id=\"field_input_";
        // line 35
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" type=\"hidden\" name=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "\"/>
       <script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/plugins/webcamjs/webcam.js"), "html", null, true);
        echo "\"></script>
       <script>
           var FieldImage_";
        // line 38
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo " = {
               camera_init: false,
               uploader: null,
               cameraMode: function (s) {
                   if (s) {
                       \$(\"#field_image_";
        // line 43
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").hide();
                       \$(\"#camera_preview_";
        // line 44
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").show();

                       \$(\"#camera_options_";
        // line 46
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").show();
                       \$(\"#upload_options_";
        // line 47
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").hide();
                   } else {
                       \$(\"#field_image_";
        // line 49
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").show();
                       \$(\"#camera_preview_";
        // line 50
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").hide();

                       \$(\"#camera_options_";
        // line 52
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").hide();
                       \$(\"#upload_options_";
        // line 53
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").show();
                   }
               },
               prepare: function () {
                   this.uploader = new ImgurUpload();
                   var context = this;
                   //\$(\"#field_input_";
        // line 59
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").change(function() {
                   \$(\"#field_image_";
        // line 60
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").load(function () {
                       \$(\"#progress_bar_";
        // line 61
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").val(0);
                   });
                   //});
                   \$(\"#field_button_remove_";
        // line 64
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").click(function () {
   \t\t\t\t\t      sconfirm(\"Eliminar imagen\", \"¿Confirma que desea eliminar esta imagen?\", function(c){
             \t\t\t\t\t\tif(c){
             \t\t\t\t\t\t\t\$(\"#field_input_";
        // line 67
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").val(\"\").trigger(\"change\");
             \t\t\t\t\t\t}
           \t\t\t\t\t});
                       //if (!confirm(\"¿Confirma que desea eliminar esta imagen?\"))
                       //    return;
                   });
                   \$(\"#field_button_camera_";
        // line 73
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").click(function () {
                       context.cameraMode(true);
                       if (!context.camera_init) {
                           context.initialize_cam();
                       }
                       context.camera_init = true;
                   });
                   \$(\"#field_button_cancel_";
        // line 80
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").click(function () {
                       context.cameraMode(false);
                   });
                   \$(\"#field_button_capture_";
        // line 83
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").click(function () {
                       var btn = this;
                       setElementDisableState(btn, false);
                       if (context.camera_init) {
                           context.take_snapshot(function () {
                               setElementDisableState(btn, true);
                               context.cameraMode(false);
                           });
                       }
                   });

                   \$(\"#field_image_";
        // line 94
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo ", #field_button_";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").click(function () {
                       var c = \$(\"#field_image_";
        // line 95
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\");
                       \$(c).attr('src', '";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/acmesfs/img/loading.gif"), "html", null, true);
        echo "');

                       //c//onsole.log(\"FLAG\");
                       //
                       context.uploader.set(\"progress_bar_";
        // line 100
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\", null, null);
                       context.uploader.targetOnLoad = function (data) {
                           console.log(data);
                           \$(\"#progress_bar_";
        // line 103
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").removeAttr(\"value\");
                           var image = data.upload.links.original;
                           \$(\"#field_input_";
        // line 105
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").val(image).trigger(\"change\");
                           if (image !== \"\") {
                               \$(c).attr('src', image);
                           }
                       };
                       context.uploader.upload();
                   });

                   var fii = \$(\"#field_input_";
        // line 113
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\");
                   fii.change(function () {
                       context.updateFieldImage(this);
                   });
                   context.updateFieldImage(fii);
               },
               updateFieldImage: function (i) {
                   var val = \$(i).val();
                   var f_img = \$(\"#field_image_";
        // line 121
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\");
                   if (val === null || val === undefined || val === \"\") {
                       f_img.attr('src', '";
        // line 123
        echo twig_escape_filter($this->env, $this->getContext($context, "image"), "html", null, true);
        echo "');
                   } else {
                       f_img.attr(\"src\", \$(i).val());
                   }
               },
               initialize_cam: function () {
                   //\$(function(){
                   var w = 200;
                   var h = 150;
                   Webcam.set({
                       // live preview size
                       width: w,//200,
                       height: h,//140,
                       // device capture size
                       dest_width: w,//200,
                       dest_height: h,//140,
                       // final cropped size
                       crop_width: 140,//140,
                       crop_height: 150,//140,
                       // format and quality
                       image_format: 'jpeg',
                       jpeg_quality: 90
                   });
                   Webcam.attach('#camera_preview_";
        // line 146
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "');
               },
               take_snapshot: function (tg) {
                   var context = this;
                   // take snapshot and get image data
                   Webcam.snap(function (data_uri) {
                       // display results in page
                       Webcam.freeze();
                       context.uploader.targetOnLoad = function (d) {
                           Webcam.unfreeze();
                           console.log(d);
                           var image = d.upload.links.original;
                           \$(\"#field_input_";
        // line 158
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\").val(image).trigger(\"change\");
                           //\$(\"#results\").prepend('<img src=\"' + d.data.link + '\"/>')
                           tg(data_uri);
                       };
                       context.uploader.uploadOne(data_uri);
                   });
               }
           };
           var FieldImage_";
        // line 166
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo " = FieldImage_";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo ";
           \$(function(){
               FieldImage_";
        // line 168
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo ".prepare();
           });
       </script>
   </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeSFSBundle:Schema:field_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 166,  324 => 158,  309 => 146,  283 => 123,  278 => 121,  267 => 113,  256 => 105,  251 => 103,  238 => 96,  234 => 95,  228 => 94,  214 => 83,  208 => 80,  198 => 73,  189 => 67,  183 => 64,  177 => 61,  173 => 60,  169 => 59,  160 => 53,  156 => 52,  151 => 50,  147 => 49,  142 => 47,  138 => 46,  133 => 44,  129 => 43,  121 => 38,  116 => 36,  110 => 35,  103 => 33,  97 => 32,  93 => 31,  86 => 29,  80 => 28,  74 => 27,  65 => 24,  55 => 20,  21 => 2,  126 => 65,  118 => 59,  104 => 47,  100 => 46,  96 => 45,  92 => 44,  88 => 43,  83 => 41,  79 => 40,  75 => 39,  71 => 38,  67 => 37,  59 => 21,  54 => 34,  42 => 16,  38 => 15,  27 => 7,  679 => 98,  667 => 97,  653 => 94,  650 => 93,  636 => 92,  608 => 88,  605 => 87,  595 => 85,  593 => 84,  590 => 83,  577 => 82,  564 => 78,  541 => 76,  511 => 74,  481 => 72,  478 => 71,  461 => 70,  457 => 68,  447 => 66,  445 => 65,  442 => 64,  439 => 63,  436 => 62,  433 => 61,  419 => 60,  406 => 56,  400 => 55,  392 => 53,  386 => 51,  383 => 50,  379 => 49,  355 => 48,  352 => 47,  342 => 168,  340 => 44,  337 => 43,  323 => 42,  296 => 39,  287 => 38,  274 => 37,  245 => 100,  236 => 30,  233 => 29,  220 => 28,  200 => 24,  175 => 22,  171 => 20,  158 => 19,  144 => 16,  131 => 15,  112 => 52,  98 => 10,  95 => 9,  84 => 8,  70 => 26,  66 => 4,  63 => 36,  51 => 2,  46 => 96,  43 => 19,  40 => 81,  37 => 16,  34 => 41,  31 => 36,  28 => 27,  25 => 18,  22 => 14,  19 => 1,);
    }
}
