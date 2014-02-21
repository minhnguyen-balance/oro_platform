<?php

/* OroUIBundle:Form:translatable.html.twig */
class __TwigTemplate_ccbf91876481a9e88c0c0b9874042d93cfa132bdb74140c901f08a0890758cef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'a2lix_translations_widget' => array($this, 'block_a2lix_translations_widget'),
            'a2lix_translations_gedmo_widget' => array($this, 'block_a2lix_translations_gedmo_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('a2lix_translations_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('a2lix_translations_gedmo_widget', $context, $blocks);
    }

    // line 1
    public function block_a2lix_translations_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 5
            echo "            ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), "vars"), "name");
            // line 6
            echo "
            <li ";
            // line 7
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo "class=\"active\"";
            }
            echo ">
                <a href=\".a2lix_translationsFields-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo "\" data-toggle=\"tab\">
                   ";
            // line 9
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 17
            echo "            ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), "vars"), "name");
            // line 18
            echo "
            <div class=\"a2lix_translationsFields-";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo " tab-pane ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo "active";
            }
            echo "\">
                ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), 'widget');
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>
";
    }

    // line 27
    public function block_a2lix_translations_gedmo_widget($context, array $blocks = array())
    {
        // line 28
        echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
            // line 31
            echo "            ";
            $context["isDefaultLocale"] = ("defaultLocale" == $this->getAttribute($this->getAttribute((isset($context["translationsLocales"]) ? $context["translationsLocales"] : $this->getContext($context, "translationsLocales")), "vars"), "name"));
            // line 32
            echo "
            ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["translationsLocales"]) ? $context["translationsLocales"] : $this->getContext($context, "translationsLocales")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 34
                echo "                ";
                $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), "vars"), "name");
                // line 35
                echo "
                <li ";
                // line 36
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                    echo "class=\"active\"";
                }
                echo ">
                    <a href=\"javascript:void(0);\" data-target=\".a2lix_translationsFields-";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                echo "\" data-toggle=\"tab\">
                        ";
                // line 38
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
                echo " ";
                if ((isset($context["isDefaultLocale"]) ? $context["isDefaultLocale"] : $this->getContext($context, "isDefaultLocale"))) {
                    echo "[Default]";
                }
                // line 39
                echo "                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
            // line 47
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["translationsLocales"]) ? $context["translationsLocales"] : $this->getContext($context, "translationsLocales")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 48
                echo "                ";
                $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), "vars"), "name");
                // line 49
                echo "
                <div class=\"a2lix_translationsFields-";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                echo " tab-pane ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "locale") == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                    echo "active";
                }
                echo "\">
                    ";
                // line 51
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["translationsFields"]) ? $context["translationsFields"] : $this->getContext($context, "translationsFields")), 'widget');
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Form:translatable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1109 => 317,  1106 => 316,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1067 => 299,  1064 => 298,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  979 => 260,  976 => 259,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  920 => 235,  918 => 234,  915 => 233,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  833 => 199,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  785 => 178,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  749 => 162,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  710 => 149,  707 => 148,  697 => 141,  696 => 140,  695 => 139,  689 => 137,  683 => 135,  680 => 134,  675 => 132,  666 => 126,  658 => 124,  654 => 123,  643 => 120,  638 => 118,  635 => 117,  619 => 113,  614 => 111,  564 => 99,  557 => 96,  547 => 93,  529 => 92,  524 => 90,  512 => 84,  509 => 83,  490 => 77,  470 => 73,  433 => 60,  414 => 52,  403 => 48,  400 => 47,  377 => 37,  374 => 36,  363 => 32,  308 => 13,  299 => 8,  271 => 374,  266 => 366,  492 => 164,  473 => 156,  456 => 68,  447 => 149,  421 => 139,  412 => 134,  386 => 127,  372 => 126,  337 => 22,  310 => 114,  295 => 107,  276 => 381,  254 => 91,  184 => 233,  343 => 283,  365 => 316,  2431 => 2339,  2364 => 2275,  2246 => 2160,  2128 => 2045,  2010 => 1930,  1892 => 1815,  1774 => 1700,  1656 => 1585,  1538 => 1470,  1420 => 1355,  1302 => 1240,  1184 => 1125,  948 => 895,  830 => 198,  712 => 150,  2321 => 2207,  2254 => 2143,  2136 => 2028,  2018 => 1913,  1900 => 1798,  1782 => 1683,  1664 => 1568,  1546 => 1453,  1428 => 1338,  1310 => 1223,  1192 => 1108,  1074 => 304,  956 => 878,  838 => 763,  720 => 648,  602 => 533,  484 => 162,  257 => 93,  207 => 269,  277 => 76,  268 => 373,  251 => 64,  185 => 27,  282 => 84,  221 => 78,  212 => 279,  214 => 60,  211 => 59,  191 => 246,  159 => 196,  143 => 109,  23 => 26,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 318,  1105 => 510,  1103 => 315,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 1010,  1062 => 492,  1058 => 490,  1056 => 293,  1053 => 292,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 276,  999 => 440,  996 => 439,  992 => 437,  982 => 261,  980 => 430,  973 => 258,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 251,  950 => 250,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 236,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 204,  841 => 203,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 182,  790 => 347,  783 => 177,  777 => 338,  775 => 337,  770 => 334,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  746 => 161,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  681 => 287,  678 => 133,  673 => 285,  670 => 284,  662 => 125,  657 => 277,  649 => 122,  644 => 268,  630 => 257,  611 => 247,  598 => 107,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  567 => 230,  554 => 223,  536 => 217,  533 => 216,  531 => 215,  498 => 198,  461 => 70,  445 => 163,  443 => 162,  429 => 154,  423 => 57,  411 => 144,  394 => 131,  388 => 42,  357 => 113,  350 => 26,  346 => 110,  338 => 107,  332 => 20,  319 => 98,  313 => 15,  291 => 106,  250 => 341,  238 => 312,  127 => 27,  517 => 168,  503 => 81,  489 => 156,  487 => 163,  482 => 153,  477 => 151,  467 => 72,  462 => 142,  459 => 69,  450 => 64,  442 => 62,  422 => 132,  416 => 130,  401 => 125,  391 => 130,  383 => 118,  353 => 107,  349 => 106,  330 => 104,  324 => 102,  306 => 127,  304 => 110,  288 => 4,  261 => 77,  259 => 70,  256 => 69,  248 => 336,  245 => 335,  243 => 327,  232 => 83,  229 => 82,  224 => 79,  216 => 60,  186 => 239,  147 => 51,  130 => 37,  284 => 104,  280 => 127,  253 => 342,  227 => 301,  223 => 94,  153 => 53,  77 => 17,  520 => 208,  513 => 403,  510 => 402,  506 => 400,  501 => 80,  496 => 79,  474 => 382,  341 => 260,  335 => 21,  273 => 380,  67 => 13,  20 => 1,  161 => 202,  122 => 33,  119 => 32,  671 => 293,  621 => 251,  615 => 242,  610 => 239,  608 => 246,  600 => 232,  596 => 106,  590 => 229,  561 => 224,  558 => 224,  555 => 95,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  523 => 215,  518 => 207,  515 => 85,  511 => 203,  508 => 164,  505 => 209,  502 => 208,  483 => 190,  478 => 74,  475 => 202,  471 => 183,  454 => 196,  449 => 194,  439 => 189,  436 => 188,  431 => 143,  426 => 58,  408 => 50,  396 => 132,  389 => 171,  368 => 34,  355 => 27,  351 => 123,  347 => 262,  344 => 24,  340 => 282,  322 => 136,  311 => 14,  301 => 90,  297 => 88,  286 => 89,  283 => 82,  260 => 363,  237 => 98,  233 => 304,  230 => 303,  226 => 64,  217 => 289,  202 => 266,  197 => 249,  192 => 68,  175 => 24,  182 => 50,  179 => 49,  152 => 118,  149 => 182,  124 => 132,  97 => 70,  84 => 41,  34 => 7,  181 => 232,  137 => 31,  125 => 13,  107 => 18,  90 => 20,  63 => 9,  53 => 8,  485 => 171,  480 => 75,  472 => 165,  468 => 380,  455 => 159,  451 => 195,  448 => 157,  438 => 160,  434 => 144,  424 => 140,  420 => 150,  418 => 138,  409 => 139,  404 => 126,  398 => 137,  392 => 130,  390 => 43,  385 => 41,  379 => 124,  376 => 161,  373 => 115,  366 => 33,  348 => 113,  333 => 257,  325 => 137,  320 => 107,  316 => 16,  309 => 93,  305 => 129,  294 => 99,  289 => 90,  279 => 103,  275 => 82,  269 => 75,  263 => 365,  252 => 89,  240 => 326,  235 => 311,  219 => 78,  193 => 55,  189 => 240,  170 => 77,  129 => 35,  102 => 16,  65 => 17,  58 => 12,  71 => 19,  270 => 100,  255 => 353,  247 => 88,  244 => 78,  241 => 86,  239 => 54,  236 => 46,  231 => 80,  228 => 42,  225 => 298,  222 => 297,  220 => 290,  218 => 177,  209 => 74,  205 => 55,  180 => 34,  172 => 60,  144 => 176,  93 => 17,  88 => 63,  78 => 26,  201 => 56,  199 => 54,  196 => 33,  187 => 28,  173 => 48,  168 => 13,  166 => 209,  156 => 42,  138 => 37,  136 => 168,  133 => 38,  121 => 131,  112 => 30,  62 => 33,  706 => 189,  699 => 142,  694 => 138,  691 => 184,  687 => 288,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 278,  655 => 164,  651 => 163,  647 => 162,  640 => 119,  636 => 157,  632 => 258,  628 => 155,  624 => 154,  617 => 112,  613 => 248,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 105,  589 => 143,  581 => 137,  579 => 136,  576 => 101,  572 => 180,  569 => 231,  566 => 226,  560 => 125,  556 => 123,  550 => 94,  539 => 218,  534 => 119,  530 => 118,  527 => 91,  525 => 211,  507 => 202,  504 => 99,  500 => 162,  493 => 78,  491 => 157,  488 => 93,  481 => 189,  479 => 383,  476 => 157,  469 => 'placeholder',  466 => 379,  464 => 71,  460 => 153,  457 => 90,  453 => 151,  446 => 138,  444 => 148,  441 => 154,  437 => 61,  430 => 'placeholder',  428 => 59,  425 => 152,  419 => 131,  417 => 179,  413 => 129,  410 => 128,  407 => 127,  405 => 49,  402 => 138,  399 => 133,  395 => 131,  393 => 172,  380 => 'placeholder',  378 => 162,  375 => 67,  371 => 35,  364 => 115,  362 => 109,  359 => 114,  354 => 124,  352 => 115,  345 => 'placeholder',  342 => 23,  339 => 103,  334 => 117,  329 => 76,  327 => 103,  323 => 108,  321 => 99,  317 => 133,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 100,  293 => 6,  290 => 5,  285 => 3,  281 => 388,  278 => 387,  274 => 75,  267 => 99,  265 => 72,  262 => 96,  258 => 354,  215 => 280,  213 => 49,  206 => 58,  203 => 73,  178 => 25,  176 => 48,  171 => 47,  167 => 46,  160 => 56,  154 => 189,  151 => 188,  141 => 175,  132 => 36,  116 => 31,  114 => 111,  104 => 90,  91 => 56,  158 => 52,  146 => 181,  140 => 109,  128 => 14,  118 => 35,  110 => 35,  105 => 27,  100 => 20,  81 => 40,  61 => 2,  87 => 15,  46 => 18,  44 => 6,  76 => 17,  70 => 10,  59 => 16,  49 => 290,  28 => 4,  25 => 4,  21 => 1,  94 => 57,  89 => 47,  85 => 62,  75 => 20,  68 => 21,  56 => 7,  27 => 3,  31 => 2,  38 => 4,  26 => 27,  24 => 21,  19 => 1,  79 => 18,  72 => 16,  69 => 13,  47 => 7,  40 => 5,  37 => 4,  22 => 2,  246 => 108,  164 => 203,  162 => 43,  157 => 36,  139 => 169,  120 => 25,  115 => 34,  111 => 110,  108 => 28,  101 => 89,  98 => 30,  96 => 67,  83 => 17,  74 => 20,  66 => 12,  55 => 6,  52 => 8,  50 => 7,  43 => 7,  41 => 5,  35 => 4,  32 => 3,  29 => 2,  210 => 270,  204 => 267,  200 => 72,  194 => 248,  190 => 51,  188 => 71,  183 => 24,  177 => 49,  174 => 217,  169 => 210,  165 => 56,  163 => 57,  155 => 23,  150 => 52,  148 => 39,  145 => 16,  142 => 38,  134 => 161,  131 => 160,  126 => 34,  123 => 14,  117 => 39,  113 => 12,  109 => 105,  106 => 104,  103 => 21,  99 => 23,  95 => 23,  92 => 28,  86 => 46,  82 => 19,  80 => 20,  73 => 14,  64 => 3,  60 => 6,  57 => 9,  54 => 4,  51 => 20,  48 => 8,  45 => 13,  42 => 7,  39 => 6,  36 => 4,  33 => 2,  30 => 1,);
    }
}
