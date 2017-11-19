<?php

/* AcmeWebBundle:Schemas:editor_inputs.html.twig */
class __TwigTemplate_8b855bce34e3c312b56b3bb9f715bcdd448b998292042794bedfb8dfe3745391 extends Twig_Template
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
        $context["space_name"] = $this->getContext($context, "entity");
        // line 3
        echo "
";
        // line 4
        if ($this->getAttribute($this->getContext($context, "form", true), "contenido", array(), "any", true, true)) {
            // line 5
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Utils:tinyeditor", array("input_id" => ($this->getContext($context, "space_name") . "_contenido"), "form_id" => ($this->getContext($context, "space_name") . "_form"))));
            echo "
";
        }
        // line 7
        if ($this->getAttribute($this->getContext($context, "form", true), "descripcion", array(), "any", true, true)) {
            // line 8
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Utils:tinyeditor", array("input_id" => ($this->getContext($context, "space_name") . "_descripcion"), "form_id" => ($this->getContext($context, "space_name") . "_form"))));
            echo "
";
        }
        // line 10
        if ($this->getAttribute($this->getContext($context, "form", true), "archivos", array(), "any", true, true)) {
            // line 11
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Uploader:uploader", array("identifier" => "IPSCDOCertificado", "input_id" => ($this->getContext($context, "space_name") . "_archivos"), "form_id" => ($this->getContext($context, "space_name") . "_form"))));
            echo "
";
        }
        // line 13
        if ($this->getAttribute($this->getContext($context, "form", true), "tags", array(), "any", true, true)) {
            // line 14
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Utils:tagger", array("input_id" => ($this->getContext($context, "space_name") . "_tags"))));
            echo "
";
        }
        // line 16
        if ($this->getAttribute($this->getContext($context, "form", true), "keywords", array(), "any", true, true)) {
            // line 17
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Utils:tagger", array("input_id" => ($this->getContext($context, "space_name") . "_keywords"))));
            echo "
";
        }
        // line 19
        if ($this->getAttribute($this->getContext($context, "form", true), "subcategorias", array(), "any", true, true)) {
            // line 20
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Utils:tagger", array("input_id" => ($this->getContext($context, "space_name") . "_subcategorias"))));
            echo "
";
        }
        // line 22
        echo "
";
        // line 23
        if ($this->getAttribute($this->getContext($context, "form", true), "imagen", array(), "any", true, true)) {
            // line 24
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Utils:imagen", array("input_id" => ($this->getContext($context, "space_name") . "_imagen"), "form_id" => ($this->getContext($context, "space_name") . "_form"))));
            echo "
";
        }
        // line 26
        echo "
";
        // line 27
        if ($this->getAttribute($this->getContext($context, "form", true), "imagenes", array(), "any", true, true)) {
            // line 28
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AcmeSFSBundle:Utils:imagenes", array("title" => (($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form", true), "vars", array(), "any", false, true), "data", array(), "any", false, true), "titulo", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "data"), "titulo")) : ("Imagenes")), "section" => $this->getContext($context, "space_name"), "identifier" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "data"), "id"), "resource_values" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "vars"), "data"), "imagenes"), "level_path" => "/", "input_id" => ($this->getContext($context, "space_name") . "_imagenes"), "form_id" => ($this->getContext($context, "space_name") . "_form"), "is_multiple" => true)));
            // line 37
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "AcmeWebBundle:Schemas:editor_inputs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 28,  83 => 26,  77 => 24,  75 => 23,  72 => 22,  56 => 16,  50 => 14,  48 => 13,  42 => 11,  34 => 8,  32 => 7,  26 => 5,  1414 => 421,  1408 => 419,  1402 => 417,  1400 => 416,  1398 => 415,  1394 => 414,  1383 => 412,  1380 => 411,  1367 => 405,  1361 => 403,  1355 => 401,  1351 => 399,  1347 => 398,  1341 => 397,  1339 => 396,  1336 => 395,  1323 => 389,  1317 => 387,  1311 => 385,  1303 => 382,  1297 => 381,  1291 => 380,  1287 => 379,  1279 => 377,  1273 => 376,  1271 => 375,  1268 => 374,  1256 => 369,  1251 => 368,  1246 => 366,  1237 => 360,  1231 => 358,  1228 => 357,  1223 => 356,  1211 => 349,  1202 => 347,  1198 => 346,  1192 => 344,  1190 => 343,  1187 => 342,  1179 => 338,  1174 => 336,  1168 => 332,  1162 => 330,  1157 => 328,  1154 => 327,  1145 => 322,  1143 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  961 => 254,  958 => 253,  955 => 252,  950 => 250,  939 => 243,  936 => 242,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  764 => 169,  753 => 164,  751 => 163,  749 => 162,  739 => 156,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  695 => 139,  694 => 138,  689 => 137,  680 => 134,  678 => 133,  675 => 132,  666 => 126,  662 => 125,  658 => 124,  654 => 123,  649 => 122,  643 => 120,  640 => 119,  638 => 118,  635 => 117,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  596 => 106,  593 => 105,  576 => 101,  564 => 99,  557 => 96,  555 => 95,  550 => 94,  547 => 93,  529 => 92,  527 => 91,  524 => 90,  512 => 84,  509 => 83,  503 => 81,  501 => 80,  493 => 78,  490 => 77,  478 => 74,  470 => 73,  467 => 72,  464 => 71,  461 => 70,  459 => 69,  456 => 68,  442 => 62,  428 => 59,  426 => 58,  423 => 57,  414 => 52,  408 => 50,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  371 => 35,  368 => 34,  366 => 33,  355 => 27,  350 => 26,  344 => 24,  342 => 23,  337 => 22,  335 => 21,  332 => 20,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  288 => 4,  285 => 3,  278 => 410,  273 => 394,  271 => 374,  263 => 365,  258 => 354,  250 => 341,  248 => 336,  245 => 335,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  233 => 304,  227 => 301,  225 => 298,  222 => 297,  217 => 289,  215 => 280,  210 => 270,  204 => 267,  199 => 265,  197 => 249,  191 => 246,  189 => 240,  186 => 239,  184 => 233,  181 => 232,  176 => 223,  174 => 217,  171 => 216,  169 => 210,  166 => 209,  164 => 203,  161 => 202,  159 => 196,  156 => 195,  154 => 189,  151 => 188,  149 => 182,  146 => 181,  144 => 176,  141 => 175,  139 => 169,  134 => 161,  131 => 160,  129 => 148,  126 => 147,  124 => 132,  121 => 131,  119 => 117,  116 => 116,  114 => 111,  111 => 110,  109 => 105,  106 => 104,  101 => 89,  99 => 68,  96 => 67,  94 => 57,  91 => 37,  89 => 47,  84 => 41,  81 => 40,  79 => 32,  76 => 31,  74 => 20,  71 => 19,  69 => 13,  66 => 20,  64 => 19,  61 => 2,  1393 => 199,  1385 => 413,  1378 => 197,  1374 => 195,  1366 => 194,  1359 => 193,  1356 => 192,  1353 => 400,  1350 => 189,  1342 => 188,  1333 => 187,  1330 => 186,  1327 => 185,  1324 => 183,  1316 => 182,  1309 => 384,  1307 => 383,  1304 => 179,  1301 => 178,  1298 => 176,  1290 => 175,  1283 => 378,  1281 => 173,  1278 => 172,  1264 => 171,  1249 => 367,  1243 => 163,  1241 => 162,  1238 => 161,  1232 => 159,  1229 => 158,  1221 => 355,  1218 => 354,  1212 => 153,  1209 => 152,  1203 => 150,  1201 => 149,  1195 => 345,  1191 => 131,  1177 => 337,  1171 => 862,  1165 => 860,  1163 => 859,  1159 => 329,  1147 => 849,  1134 => 838,  1130 => 836,  1128 => 835,  1077 => 305,  982 => 261,  968 => 684,  964 => 255,  960 => 682,  956 => 681,  952 => 251,  947 => 249,  943 => 675,  934 => 241,  932 => 667,  876 => 218,  872 => 613,  854 => 598,  850 => 597,  831 => 581,  823 => 578,  813 => 571,  801 => 185,  797 => 559,  795 => 558,  767 => 170,  756 => 165,  750 => 524,  746 => 161,  740 => 521,  729 => 155,  723 => 510,  719 => 509,  704 => 497,  700 => 496,  696 => 140,  690 => 492,  683 => 135,  679 => 487,  639 => 450,  618 => 432,  612 => 429,  566 => 386,  560 => 383,  553 => 379,  544 => 373,  536 => 368,  532 => 367,  525 => 363,  515 => 85,  506 => 350,  496 => 79,  480 => 75,  476 => 329,  469 => 327,  462 => 323,  458 => 322,  454 => 321,  450 => 64,  441 => 314,  437 => 61,  433 => 60,  429 => 311,  409 => 293,  405 => 49,  402 => 290,  397 => 289,  386 => 280,  384 => 279,  374 => 36,  363 => 32,  361 => 272,  357 => 271,  352 => 269,  347 => 268,  338 => 267,  329 => 266,  322 => 260,  320 => 259,  314 => 243,  310 => 240,  307 => 239,  304 => 238,  299 => 8,  293 => 6,  290 => 5,  284 => 232,  281 => 411,  279 => 230,  276 => 395,  268 => 373,  266 => 366,  260 => 363,  255 => 353,  253 => 342,  247 => 218,  242 => 217,  236 => 216,  232 => 214,  230 => 303,  226 => 212,  220 => 290,  216 => 210,  212 => 279,  209 => 208,  207 => 269,  205 => 206,  202 => 266,  194 => 248,  188 => 122,  182 => 119,  179 => 224,  136 => 168,  128 => 70,  120 => 65,  112 => 60,  104 => 90,  86 => 27,  78 => 35,  58 => 17,  49 => 18,  40 => 10,  33 => 8,  29 => 6,  24 => 4,  21 => 3,  19 => 2,);
    }
}
