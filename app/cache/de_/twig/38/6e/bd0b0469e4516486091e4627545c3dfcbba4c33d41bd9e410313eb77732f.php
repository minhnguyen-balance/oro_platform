<?php

/* OroSecurityBundle:Form:fields.html.twig */
class __TwigTemplate_386ebd0b0469e4516486091e4627545c3dfcbba4c33d41bd9e410313eb77732f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_acl_access_level_selector_widget' => array($this, 'block_oro_acl_access_level_selector_widget'),
            'oro_acl_label_widget' => array($this, 'block_oro_acl_label_widget'),
            'oro_acl_object_name_widget' => array($this, 'block_oro_acl_object_name_widget'),
            'oro_acl_collection_widget' => array($this, 'block_oro_acl_collection_widget'),
            'oro_acl_privilege_widget' => array($this, 'block_oro_acl_privilege_widget'),
            'oro_acl_permission_widget' => array($this, 'block_oro_acl_permission_widget'),
            'oro_acl_permission_collection_widget' => array($this, 'block_oro_acl_permission_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('oro_acl_access_level_selector_widget', $context, $blocks);
        // line 23
        echo "
";
        // line 24
        $this->displayBlock('oro_acl_label_widget', $context, $blocks);
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('oro_acl_object_name_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('oro_acl_collection_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('oro_acl_privilege_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('oro_acl_permission_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('oro_acl_permission_collection_widget', $context, $blocks);
    }

    // line 1
    public function block_oro_acl_access_level_selector_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"access_level_value\"
         data-identity=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["identity"]) ? $context["identity"] : $this->getContext($context, "identity")), "html", null, true);
        echo "\"
         data-selector-id=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"
         data-selector-name=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"
         data-value=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\"
    >
        <div class=\"access_level_value_link\">
            <a href=\"javascript:void(0);\">
                ";
        // line 10
        if ((isset($context["level_label"]) ? $context["level_label"] : $this->getContext($context, "level_label"))) {
            // line 11
            echo "                    ";
            $context["label"] = ("oro.security.access-level." . (isset($context["level_label"]) ? $context["level_label"] : $this->getContext($context, "level_label")));
            // line 12
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
                ";
        } else {
            // line 14
            echo "                    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.security.access-level.NONE", array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "
                ";
        }
        // line 16
        echo "            </a>
            ";
        // line 17
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 18
        echo "            ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
        </div>
        <div class=\"access_level_value_choice\" style=\"display: none\"></div>
    </div>
";
    }

    // line 24
    public function block_oro_acl_label_widget($context, array $blocks = array())
    {
        // line 25
        echo "    <strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "</strong>
    ";
        // line 26
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 27
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
    }

    // line 30
    public function block_oro_acl_object_name_widget($context, array $blocks = array())
    {
        // line 31
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "oid"), 'widget');
        echo "
    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
";
    }

    // line 35
    public function block_oro_acl_collection_widget($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        if (($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : $this->getContext($context, "privileges_config")), "view_type") == "grid")) {
            // line 37
            echo "        <table class=\"table table-striped acl-table\">
            <tbody>
            <tr>
                <th>
                    &nbsp;
                </th>
                ";
            // line 43
            $context["width"] = twig_number_format_filter($this->env, ((100 / (twig_length_filter($this->env, $this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : $this->getContext($context, "privileges_config")), "permissions", array(), "array")) + 1)) - 1), 0);
            // line 44
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : $this->getContext($context, "privileges_config")), "permissions", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 45
                echo "                    <th width=\"";
                echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
                echo "%\">
                        ";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field"))), "html", null, true);
                echo "
                    </th>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </tr>
            ";
            // line 50
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 51
                echo "                ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            </tbody>
        </table>
    ";
        } else {
            // line 56
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 57
                echo "            <div class=\"security-row\">
                ";
                // line 58
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'widget');
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "    ";
        }
    }

    // line 64
    public function block_oro_acl_privilege_widget($context, array $blocks = array())
    {
        // line 65
        echo "     ";
        ob_start();
        // line 66
        echo "         <tr ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "value"), "identity"), "name") == "(default)")) {
            echo "class=\"default-field\"";
        }
        echo ">
             <td>
                 ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identity"), 'widget');
        echo "
             </td>
             ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "permissions"), 'widget');
        echo "
         </tr>
     ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 75
    public function block_oro_acl_permission_widget($context, array $blocks = array())
    {
        // line 76
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "accessLevel"), 'widget');
        echo "
    ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
";
    }

    // line 80
    public function block_oro_acl_permission_collection_widget($context, array $blocks = array())
    {
        // line 81
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : $this->getContext($context, "privileges_config")), "permissions", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 82
            echo "        <td>
            ";
            // line 83
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 84
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission")), "vars"), "value"), "name") == (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")))) {
                    // line 85
                    echo "                    ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["permission"]) ? $context["permission"] : $this->getContext($context, "permission")), 'widget');
                    echo "
                ";
                }
                // line 87
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "            &nbsp;
        </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "OroSecurityBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  282 => 84,  221 => 61,  212 => 58,  214 => 60,  211 => 59,  191 => 53,  159 => 44,  143 => 39,  23 => 26,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  657 => 277,  649 => 271,  644 => 268,  630 => 257,  611 => 247,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  567 => 230,  554 => 223,  536 => 217,  533 => 216,  531 => 215,  498 => 198,  461 => 175,  445 => 163,  443 => 162,  429 => 154,  423 => 151,  411 => 144,  394 => 136,  388 => 133,  357 => 113,  350 => 111,  346 => 110,  338 => 107,  332 => 105,  319 => 98,  313 => 96,  291 => 87,  250 => 65,  238 => 56,  127 => 27,  517 => 168,  503 => 200,  489 => 156,  487 => 192,  482 => 153,  477 => 151,  467 => 144,  462 => 142,  459 => 141,  450 => 139,  442 => 137,  422 => 132,  416 => 130,  401 => 125,  391 => 121,  383 => 118,  353 => 107,  349 => 106,  330 => 104,  324 => 102,  306 => 127,  304 => 96,  288 => 83,  261 => 77,  259 => 71,  256 => 76,  248 => 66,  245 => 70,  243 => 61,  232 => 66,  229 => 65,  224 => 53,  216 => 60,  186 => 50,  147 => 41,  130 => 37,  284 => 128,  280 => 127,  253 => 75,  227 => 95,  223 => 94,  153 => 43,  77 => 132,  520 => 208,  513 => 403,  510 => 402,  506 => 400,  501 => 199,  496 => 397,  474 => 382,  341 => 260,  335 => 106,  273 => 200,  67 => 53,  20 => 1,  161 => 45,  122 => 488,  119 => 33,  671 => 293,  621 => 251,  615 => 242,  610 => 239,  608 => 246,  600 => 232,  596 => 230,  590 => 229,  561 => 224,  558 => 224,  555 => 222,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  523 => 215,  518 => 207,  515 => 212,  511 => 203,  508 => 164,  505 => 209,  502 => 208,  483 => 190,  478 => 188,  475 => 202,  471 => 183,  454 => 196,  449 => 194,  439 => 189,  436 => 188,  431 => 135,  426 => 183,  408 => 177,  396 => 123,  389 => 171,  368 => 116,  355 => 153,  351 => 152,  347 => 262,  344 => 105,  340 => 149,  322 => 136,  311 => 132,  301 => 90,  297 => 88,  286 => 89,  283 => 82,  260 => 71,  237 => 98,  233 => 54,  230 => 63,  226 => 64,  217 => 61,  202 => 57,  197 => 54,  192 => 76,  175 => 32,  182 => 52,  179 => 72,  152 => 22,  149 => 42,  124 => 655,  97 => 246,  84 => 19,  34 => 6,  181 => 81,  137 => 31,  125 => 26,  107 => 18,  90 => 12,  63 => 2,  53 => 79,  485 => 171,  480 => 152,  472 => 165,  468 => 380,  455 => 159,  451 => 195,  448 => 157,  438 => 160,  434 => 187,  424 => 144,  420 => 150,  418 => 141,  409 => 139,  404 => 126,  398 => 137,  392 => 130,  390 => 134,  385 => 132,  379 => 124,  376 => 161,  373 => 115,  366 => 116,  348 => 113,  333 => 257,  325 => 137,  320 => 107,  316 => 97,  309 => 93,  305 => 129,  294 => 98,  289 => 90,  279 => 84,  275 => 82,  269 => 75,  263 => 72,  252 => 87,  240 => 68,  235 => 55,  219 => 78,  193 => 55,  189 => 75,  170 => 77,  129 => 667,  102 => 16,  65 => 79,  58 => 60,  71 => 27,  270 => 81,  255 => 68,  247 => 67,  244 => 60,  241 => 59,  239 => 104,  236 => 84,  231 => 80,  228 => 82,  225 => 62,  222 => 78,  220 => 92,  218 => 51,  209 => 57,  205 => 73,  180 => 34,  172 => 62,  144 => 4,  93 => 162,  88 => 28,  78 => 6,  201 => 56,  199 => 53,  196 => 33,  187 => 53,  173 => 48,  168 => 13,  166 => 26,  156 => 9,  138 => 69,  136 => 12,  133 => 38,  121 => 46,  112 => 365,  62 => 33,  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 288,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 278,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 258,  628 => 155,  624 => 154,  617 => 250,  613 => 248,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 231,  566 => 226,  560 => 125,  556 => 123,  550 => 122,  539 => 218,  534 => 119,  530 => 118,  527 => 117,  525 => 211,  507 => 202,  504 => 99,  500 => 162,  493 => 158,  491 => 157,  488 => 93,  481 => 189,  479 => 383,  476 => 98,  469 => 'placeholder',  466 => 379,  464 => 161,  460 => 91,  457 => 90,  453 => 89,  446 => 138,  444 => 191,  441 => 154,  437 => 86,  430 => 'placeholder',  428 => 134,  425 => 152,  419 => 131,  417 => 179,  413 => 129,  410 => 128,  407 => 127,  405 => 84,  402 => 138,  399 => 82,  395 => 131,  393 => 172,  380 => 'placeholder',  378 => 162,  375 => 67,  371 => 114,  364 => 115,  362 => 109,  359 => 114,  354 => 58,  352 => 115,  345 => 'placeholder',  342 => 109,  339 => 103,  334 => 80,  329 => 76,  327 => 103,  323 => 108,  321 => 99,  317 => 133,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 94,  293 => 85,  290 => 49,  285 => 85,  281 => 81,  278 => 83,  274 => 80,  267 => 80,  265 => 110,  262 => 30,  258 => 70,  215 => 'placeholder',  213 => 49,  206 => 58,  203 => 34,  178 => 51,  176 => 33,  171 => 14,  167 => 47,  160 => 62,  154 => 37,  151 => 36,  141 => 70,  132 => 65,  116 => 26,  114 => 409,  104 => 346,  91 => 14,  158 => 52,  146 => 55,  140 => 40,  128 => 9,  118 => 34,  110 => 30,  105 => 17,  100 => 33,  81 => 18,  61 => 41,  87 => 11,  46 => 64,  44 => 8,  76 => 9,  70 => 4,  59 => 17,  49 => 7,  28 => 23,  25 => 1,  21 => 1,  94 => 245,  89 => 197,  85 => 10,  75 => 102,  68 => 80,  56 => 80,  27 => 10,  31 => 24,  38 => 34,  26 => 1,  24 => 21,  19 => 9,  79 => 149,  72 => 89,  69 => 13,  47 => 14,  40 => 19,  37 => 12,  22 => 37,  246 => 108,  164 => 44,  162 => 43,  157 => 44,  139 => 3,  120 => 25,  115 => 48,  111 => 32,  108 => 44,  101 => 30,  98 => 168,  96 => 14,  83 => 113,  74 => 5,  66 => 3,  55 => 8,  52 => 11,  50 => 15,  43 => 63,  41 => 35,  35 => 2,  32 => 1,  29 => 3,  210 => 59,  204 => 56,  200 => 80,  194 => 74,  190 => 51,  188 => 71,  183 => 49,  177 => 49,  174 => 46,  169 => 45,  165 => 56,  163 => 78,  155 => 23,  150 => 21,  148 => 35,  145 => 16,  142 => 32,  134 => 30,  131 => 38,  126 => 48,  123 => 35,  117 => 24,  113 => 31,  109 => 364,  106 => 36,  103 => 34,  99 => 317,  95 => 167,  92 => 20,  86 => 30,  82 => 26,  80 => 112,  73 => 22,  64 => 52,  60 => 1,  57 => 13,  54 => 12,  51 => 75,  48 => 74,  45 => 41,  42 => 1,  39 => 11,  36 => 30,  33 => 29,  30 => 9,);
    }
}
