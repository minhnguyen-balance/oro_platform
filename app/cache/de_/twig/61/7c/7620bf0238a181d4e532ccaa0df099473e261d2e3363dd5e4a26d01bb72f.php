<?php

/* OroUIBundle:actions:update.html.twig */
class __TwigTemplate_617c7620bf0238a181d4e532ccaa0df099473e261d2e3363dd5e4a26d01bb72f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'page_container' => array($this, 'block_page_container'),
            'content' => array($this, 'block_content'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'stats' => array($this, 'block_stats'),
            'navButtons' => array($this, 'block_navButtons'),
            'content_data' => array($this, 'block_content_data'),
            'navigation_content_tags' => array($this, 'block_navigation_content_tags'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["navigationMacro"] = $this->env->loadTemplate("OroNavigationBundle:Include:contentTags.html.twig");
        // line 3
        $context["UI"] = $this->env->loadTemplate("OroUIBundle::macros.html.twig");
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_page_container($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "        <form id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "name"), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "
              method=\"post\" data-collect=\"true\">
            <div class=\"container-fluid page-title\">
                <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
                    <div class=\"row\">
                        <div class=\"span9\">
                            ";
        // line 13
        $this->displayBlock('pageHeader', $context, $blocks);
        // line 50
        echo "                        </div>
                        <div class=\"pull-right\">
                            <div class=\"pull-right title-buttons-container\">
                                ";
        // line 54
        echo "                                ";
        $this->displayBlock('navButtons', $context, $blocks);
        // line 55
        echo "                                ";
        // line 56
        echo "
                                <input type=\"hidden\" name=\"input_action\" value=\"\" data-form-id=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "name"), "html", null, true);
        echo "\"/>
                            </div>
                            <div class=\"pull-right user-info-state\">
                                <ul class=\"inline-decorate\">
                                    ";
        // line 61
        $context["audit_entity_id"] = ((array_key_exists("audit_entity_id", $context)) ? ((isset($context["audit_entity_id"]) ? $context["audit_entity_id"] : $this->getContext($context, "audit_entity_id"))) : ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id"))) : (""))));
        // line 62
        echo "                                    ";
        if ((array_key_exists("audit_entity_class", $context) && (isset($context["audit_entity_id"]) ? $context["audit_entity_id"] : $this->getContext($context, "audit_entity_id")))) {
            // line 63
            echo "                                        ";
            // line placeholder
            try {
                $this->env->loadTemplate("OroDataAuditBundle::change_history_link.html.twig")->display(array("entity" => ((array_key_exists("entity", $context)) ? (_twig_default_filter((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "value"))) : ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "value"))), "entity_class" => (isset($context["audit_entity_class"]) ? $context["audit_entity_class"] : $this->getContext($context, "audit_entity_class")), "id" => (isset($context["audit_entity_id"]) ? $context["audit_entity_id"] : $this->getContext($context, "audit_entity_id")), "title" => ((array_key_exists("audit_title", $context)) ? (_twig_default_filter((isset($context["audit_title"]) ? $context["audit_title"] : $this->getContext($context, "audit_title")), $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "value"))) : ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "value"))), "audit_path" => ((array_key_exists("audit_path", $context)) ? (_twig_default_filter((isset($context["audit_path"]) ? $context["audit_path"] : $this->getContext($context, "audit_path")), "oro_dataaudit_history")) : ("oro_dataaudit_history"))));
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 70
            echo "                                    ";
        }
        // line 71
        echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"layout-content\">
                ";
        // line 78
        $this->displayBlock('content_data', $context, $blocks);
        // line 82
        echo "            </div>
            ";
        // line 83
        $this->displayBlock('navigation_content_tags', $context, $blocks);
        // line 87
        echo "        </form>
        ";
        // line 88
        echo $this->env->getExtension('oro_form_js_validation')->renderFormJsValidationBlock($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    ";
    }

    // line 13
    public function block_pageHeader($context, array $blocks = array())
    {
        // line 14
        echo "                                ";
        $context["hasAvatar"] = ($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "hasAvatar", array(), "any", true, true) && $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "hasAvatar"));
        // line 15
        echo "                                <div class=\"clearfix customer-info well-small";
        if ((!(isset($context["hasAvatar"]) ? $context["hasAvatar"] : $this->getContext($context, "hasAvatar")))) {
            echo " customer-simple";
        }
        echo "\">
                                    ";
        // line 16
        if ((isset($context["hasAvatar"]) ? $context["hasAvatar"] : $this->getContext($context, "hasAvatar"))) {
            // line 17
            echo "                                        <div class=\"visual\">
                                            <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "imagePath")) ? ($this->env->getExtension('liip_imagine')->filter($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "imagePath"), "avatar_med")) : ($this->env->getExtension('assets')->getAssetUrl("bundles/oroui/img/info-user.png"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entityTitle"), "html", null, true);
            echo "\"/>
                                        </div>
                                    ";
        }
        // line 21
        echo "                                    <div class=\"customer-content pull-left\">
                                        <div class=\"clearfix\">
                                            ";
        // line 23
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 36
        echo "                                        </div>
                                        <div class=\"clearfix\">
                                            <ul class=\"inline\">
                                                ";
        // line 39
        $this->displayBlock('stats', $context, $blocks);
        // line 45
        echo "                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            ";
    }

    // line 23
    public function block_breadcrumbs($context, array $blocks = array())
    {
        // line 24
        echo "                                                <div class=\"pull-left\">
                                                    <div class=\"sub-title\"><a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "indexPath"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "indexLabel")), "html", null, true);
        echo "</a></div>
                                                    <span class=\"separator\">/</span>
                                                    ";
        // line 27
        if ($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "additional", array(), "any", true, true)) {
            // line 28
            echo "                                                        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "additional"));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 29
                echo "                                                        <div class=\"sub-title\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb")), "indexPath"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb")), "indexLabel")), "html", null, true);
                echo "</a></div>
                                                        <span class=\"separator\">/</span>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                                                    ";
        }
        // line 33
        echo "                                                    <h1 class=\"user-name\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entityTitle"), "html", null, true);
        echo "</h1>
                                                </div>
                                            ";
    }

    // line 39
    public function block_stats($context, array $blocks = array())
    {
        // line 40
        echo "                                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "entity", array(), "any", false, true), "createdAt", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "entity", array(), "any", false, true), "updatedAt", array(), "any", true, true))) {
            // line 41
            echo "                                                        <li>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Created"), "html", null, true);
            echo ": ";
            echo (($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity"), "createdAt")) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity"), "createdAt"))) : ("N/A"));
            echo "</li>
                                                        <li>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Updated"), "html", null, true);
            echo ": ";
            echo (($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity"), "updatedAt")) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity"), "updatedAt"))) : ("N/A"));
            echo "</li>
                                                    ";
        }
        // line 44
        echo "                                                ";
    }

    // line 54
    public function block_navButtons($context, array $blocks = array())
    {
    }

    // line 78
    public function block_content_data($context, array $blocks = array())
    {
        // line 79
        echo "                    ";
        $context["data"] = $this->env->getExtension('oro_form_process')->process($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        // line 80
        echo "                    ";
        echo $context["UI"]->getscrollData((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
                ";
    }

    // line 83
    public function block_navigation_content_tags($context, array $blocks = array())
    {
        // line 84
        echo "                ";
        // line 85
        echo "                ";
        echo $context["navigationMacro"]->getnavigationContentTags($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "value"));
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 83,  207 => 33,  277 => 76,  268 => 73,  251 => 64,  185 => 27,  282 => 84,  221 => 41,  212 => 58,  214 => 60,  211 => 59,  191 => 53,  159 => 44,  143 => 18,  23 => 26,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  657 => 277,  649 => 271,  644 => 268,  630 => 257,  611 => 247,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  567 => 230,  554 => 223,  536 => 217,  533 => 216,  531 => 215,  498 => 198,  461 => 175,  445 => 163,  443 => 162,  429 => 154,  423 => 151,  411 => 144,  394 => 136,  388 => 133,  357 => 113,  350 => 111,  346 => 110,  338 => 107,  332 => 105,  319 => 98,  313 => 96,  291 => 98,  250 => 80,  238 => 56,  127 => 27,  517 => 168,  503 => 200,  489 => 156,  487 => 192,  482 => 153,  477 => 151,  467 => 144,  462 => 142,  459 => 141,  450 => 139,  442 => 137,  422 => 132,  416 => 130,  401 => 125,  391 => 121,  383 => 118,  353 => 107,  349 => 106,  330 => 104,  324 => 102,  306 => 127,  304 => 96,  288 => 83,  261 => 77,  259 => 70,  256 => 69,  248 => 66,  245 => 70,  243 => 47,  232 => 66,  229 => 65,  224 => 53,  216 => 60,  186 => 50,  147 => 45,  130 => 37,  284 => 94,  280 => 127,  253 => 75,  227 => 95,  223 => 94,  153 => 43,  77 => 132,  520 => 208,  513 => 403,  510 => 402,  506 => 400,  501 => 199,  496 => 397,  474 => 382,  341 => 260,  335 => 106,  273 => 200,  67 => 53,  20 => 1,  161 => 45,  122 => 488,  119 => 88,  671 => 293,  621 => 251,  615 => 242,  610 => 239,  608 => 246,  600 => 232,  596 => 230,  590 => 229,  561 => 224,  558 => 224,  555 => 222,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  523 => 215,  518 => 207,  515 => 212,  511 => 203,  508 => 164,  505 => 209,  502 => 208,  483 => 190,  478 => 188,  475 => 202,  471 => 183,  454 => 196,  449 => 194,  439 => 189,  436 => 188,  431 => 135,  426 => 183,  408 => 177,  396 => 123,  389 => 171,  368 => 116,  355 => 153,  351 => 152,  347 => 262,  344 => 105,  340 => 149,  322 => 136,  311 => 132,  301 => 90,  297 => 88,  286 => 89,  283 => 82,  260 => 84,  237 => 98,  233 => 45,  230 => 63,  226 => 64,  217 => 61,  202 => 33,  197 => 30,  192 => 29,  175 => 24,  182 => 52,  179 => 72,  152 => 50,  149 => 49,  124 => 655,  97 => 70,  84 => 19,  34 => 6,  181 => 23,  137 => 31,  125 => 13,  107 => 18,  90 => 'placeholder',  63 => 50,  53 => 79,  485 => 171,  480 => 152,  472 => 165,  468 => 380,  455 => 159,  451 => 195,  448 => 157,  438 => 160,  434 => 187,  424 => 144,  420 => 150,  418 => 141,  409 => 139,  404 => 126,  398 => 137,  392 => 130,  390 => 134,  385 => 132,  379 => 124,  376 => 161,  373 => 115,  366 => 116,  348 => 113,  333 => 257,  325 => 137,  320 => 107,  316 => 97,  309 => 93,  305 => 129,  294 => 99,  289 => 90,  279 => 84,  275 => 82,  269 => 75,  263 => 72,  252 => 87,  240 => 68,  235 => 44,  219 => 78,  193 => 55,  189 => 75,  170 => 77,  129 => 667,  102 => 16,  65 => 79,  58 => 60,  71 => 55,  270 => 81,  255 => 68,  247 => 79,  244 => 78,  241 => 59,  239 => 54,  236 => 46,  231 => 80,  228 => 42,  225 => 39,  222 => 38,  220 => 92,  218 => 40,  209 => 57,  205 => 34,  180 => 34,  172 => 23,  144 => 4,  93 => 162,  88 => 63,  78 => 'placeholder',  201 => 56,  199 => 53,  196 => 33,  187 => 28,  173 => 48,  168 => 13,  166 => 26,  156 => 9,  138 => 16,  136 => 19,  133 => 38,  121 => 46,  112 => 365,  62 => 33,  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 288,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 278,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 258,  628 => 155,  624 => 154,  617 => 250,  613 => 248,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 231,  566 => 226,  560 => 125,  556 => 123,  550 => 122,  539 => 218,  534 => 119,  530 => 118,  527 => 117,  525 => 211,  507 => 202,  504 => 99,  500 => 162,  493 => 158,  491 => 157,  488 => 93,  481 => 189,  479 => 383,  476 => 98,  469 => 'placeholder',  466 => 379,  464 => 161,  460 => 91,  457 => 90,  453 => 89,  446 => 138,  444 => 191,  441 => 154,  437 => 86,  430 => 'placeholder',  428 => 134,  425 => 152,  419 => 131,  417 => 179,  413 => 129,  410 => 128,  407 => 127,  405 => 84,  402 => 138,  399 => 82,  395 => 131,  393 => 172,  380 => 'placeholder',  378 => 162,  375 => 67,  371 => 114,  364 => 115,  362 => 109,  359 => 114,  354 => 58,  352 => 115,  345 => 'placeholder',  342 => 109,  339 => 103,  334 => 80,  329 => 76,  327 => 103,  323 => 108,  321 => 99,  317 => 133,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 100,  293 => 85,  290 => 49,  285 => 85,  281 => 93,  278 => 83,  274 => 75,  267 => 80,  265 => 72,  262 => 85,  258 => 70,  215 => 39,  213 => 49,  206 => 58,  203 => 34,  178 => 25,  176 => 33,  171 => 14,  167 => 55,  160 => 62,  154 => 37,  151 => 21,  141 => 70,  132 => 65,  116 => 87,  114 => 83,  104 => 346,  91 => 14,  158 => 52,  146 => 55,  140 => 17,  128 => 14,  118 => 34,  110 => 11,  105 => 102,  100 => 71,  81 => 18,  61 => 13,  87 => 11,  46 => 64,  44 => 8,  76 => 57,  70 => 4,  59 => 17,  49 => 60,  28 => 23,  25 => 1,  21 => 1,  94 => 245,  89 => 197,  85 => 62,  75 => 102,  68 => 54,  56 => 80,  27 => 10,  31 => 24,  38 => 34,  26 => 1,  24 => 21,  19 => 1,  79 => 149,  72 => 89,  69 => 13,  47 => 7,  40 => 6,  37 => 5,  22 => 2,  246 => 108,  164 => 45,  162 => 39,  157 => 36,  139 => 3,  120 => 25,  115 => 48,  111 => 82,  108 => 44,  101 => 30,  98 => 168,  96 => 14,  83 => 61,  74 => 5,  66 => 66,  55 => 8,  52 => 11,  50 => 15,  43 => 63,  41 => 35,  35 => 2,  32 => 3,  29 => 3,  210 => 35,  204 => 32,  200 => 80,  194 => 28,  190 => 51,  188 => 71,  183 => 24,  177 => 49,  174 => 46,  169 => 45,  165 => 56,  163 => 78,  155 => 23,  150 => 21,  148 => 35,  145 => 16,  142 => 42,  134 => 30,  131 => 15,  126 => 48,  123 => 14,  117 => 24,  113 => 12,  109 => 78,  106 => 36,  103 => 98,  99 => 96,  95 => 167,  92 => 20,  86 => 30,  82 => 26,  80 => 112,  73 => 56,  64 => 65,  60 => 1,  57 => 13,  54 => 'placeholder',  51 => 75,  48 => 74,  45 => 41,  42 => 1,  39 => 11,  36 => 30,  33 => 29,  30 => 2,);
    }
}
