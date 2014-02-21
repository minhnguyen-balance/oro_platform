<?php

/* OroUIBundle:Default:formHorizontal.html.twig */
class __TwigTemplate_a32b168da926a19b4a9d9959b48af4f2ee53f40d88bc6eed43f1d05791d8a43e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OroUIBundle:Default:index.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"layout-content\">
    <div class=\"clearfix\"><div class=\"navbar application-menu\">
            <div class=\"cleearfix\">
                <div class=\"container\">
                    <div class=\" navbar-responsive-collapse\">
                        <ul class=\"nav nav-tabs\" id=\"myTab\">
                            <li class=\"home\"><a href=\"#myhome\"><span>Home</span></a></li>
                            <li><a href=\"#mycrm\">My CRM</a></li>
                            <li><a href=\"#mypim\">My PIM</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div></div>
    <div class=\"clearfix application-menu\">
        <div class=\"tab-content\">
            <div class=\"tab-pane\" id=\"myhome\">
                <ul class=\"nav nav-pills\">
                    <li class=\"active\">
                        <a href=\"#\">Dashboard</a>
                    </li>
                    <li><a href=\"#\">Leads</a></li>
                    <li><a href=\"#\">Customers</a></li>
                    <li><a href=\"#\">Accounts</a></li>
                    <li><a href=\"#\">Forecasts</a></li>
                    <li><a href=\"#\">Reports</a></li>
                </ul>
            </div>
            <div class=\"tab-pane\" id=\"mycrm\">
                <ul class=\"nav nav-pills\">
                    <li class=\"active\">
                        <a href=\"#\">Dashboard</a>
                    </li>
                    <li><a href=\"#\">Leads</a></li>
                    <li><a href=\"#\">Customers</a></li>
                    <li><a href=\"#\">Accounts</a></li>
                    <li><a href=\"#\">Forecasts</a></li>
                    <li><a href=\"#\">Reports</a></li>
                </ul>
            </div>
            <div class=\"tab-pane\" id=\"mypim\">
                <ul class=\"nav nav-pills\">
                    <li class=\"active\">
                        <a href=\"#\">Dashboard pim</a>
                    </li>
                    <li><a href=\"#\">Leads pim</a></li>
                    <li><a href=\"#\">Customers pim</a></li>
                    <li><a href=\"#\">Accounts pim</a></li>
                    <li><a href=\"#\">Forecasts pim</a></li>
                    <li><a href=\"#\">Reports pim</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        require(['jquery', 'jquery-ui', 'bootstrap'],
        function(\$) {
            \$(function () {
                \$('#myTab a:last').tab('show');
                \$('#myTab a').click(function (e) {
                    e.preventDefault();
                    \$(this).tab('show');
                });
                \$('a.popup-me').popover();
            });
        });
    </script>

    ";
        // line 72
        echo "        <div class=\"responsive-section\">
            <h4 class=\"scrollspy-title\" id=\"scroll-main\">Overview</h4>
            <div class=\"row-fluid row-fluid-divider\">
                <fieldset class=\"form-horizontal span6\">
                    <h5 class=\"user-fiedset\"><span>Basic Information</span></h5>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_enabled\" class=\"control-label\">Enabled</label>
                        <div class=\"controls validation-error\">
                            <select name=\"oro_user_user_form[enabled]\" id=\"oro_user_user_form_enabled\" class=\"error\">
                                <option selected=\"selected\" value=\"1\">Active</option>
                                <option value=\"0\">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_username\" class=\"control-label required\"><em>*</em>Username</label>
                        <div class=\"controls validation-error\">
                            <input class=\"error\" type=\"text\" value=\"micky.figueroa_36a4c\" required=\"required\" name=\"oro_user_user_form[username]\" id=\"oro_user_user_form_username\" />
                            <span class=\"validation-faled\">";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("should have min 3 symbols"), "html", null, true);
        echo "</span>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_firstName\" class=\"control-label required\"><em>*</em>First name</label>
                        <div class=\"controls\">
                            <input type=\"text\" value=\"Micky\" required=\"required\" name=\"oro_user_user_form[firstName]\" id=\"oro_user_user_form_firstName\" />
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_lastName\" class=\"control-label required\"><em>*</em>Last name</label>
                        <div class=\"controls\">
                            <input type=\"text\" value=\"Figueroa\" required=\"required\" name=\"oro_user_user_form[lastName]\" id=\"oro_user_user_form_lastName\" />
                        </div>
                    </div>
                    <div class=\"control-group datepicker \">
                        <label for=\"oro_user_user_form_birthday\" class=\"control-label\">Date of birth</label>
                        <div class=\"controls validation-error\">
                            <input type=\"text\" value=\"11/16/56\" data-dateformat=\"m/d/y\" placeholder=\"m/d/y\" class=\"datepicker hasdatepicker error\" name=\"oro_user_user_form[birthday]\" id=\"oro_user_user_form_birthday\" />
                            <span class=\"validation-faled\">";
        // line 109
        echo $this->env->getExtension('translator')->trans("some msgs span two lines <br/> use mm/dd/yy format");
        echo "</span>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_imageFile\" class=\"control-label\">Avatar</label>
                        <div class=\"controls\">
                             <input type=\"file\" name=\"oro_user_user_form[imageFile]\" id=\"oro_user_user_form_imageFile\" />
                        </div>
                    </div>
                </fieldset>
                <fieldset class=\"form-horizontal span6\">
                    <h5 class=\"user-fiedset\"><span>Contact Information</span></h5>
                    <div class=\"control-group validation-error\">
                        <label for=\"oro_user_user_form_email\" class=\"control-label required\"><em>*</em>E-mail</label>
                        <div class=\"controls\">
                            <input type=\"email\" value=\"micky.figueroa_36a5a@example.com\" required=\"required\" name=\"oro_user_user_form[email]\" id=\"oro_user_user_form_email\" class=\"error\" />
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label class=\"control-label\">Additional emails:</label>
                        <div class=\"controls\">
                            <div class=\"row-oro\">
                                <div data-prototype=\"&lt;div data-content=&quot;tag__name__&quot;&gt; &lt;div class=&quot;row-oro oro-multiselect-holder&quot;&gt;
                &lt;input type=&quot;email&quot; id=&quot;oro_user_user_form_emails_tag__name___email&quot; name=&quot;oro_user_user_form[emails][tag__name__][email]&quot; /&gt;
                &lt;select class=&quot;oro-multiselect&quot;&gt;
                                &lt;option&gt;Work&lt;/option&gt;
                                &lt;option&gt;Home&lt;/option&gt;
                                &lt;option&gt;Cell&lt;/option&gt;
                                &lt;/select&gt;
            &lt;button class=&quot;removeRow btn-action btn-link&quot; type=&quot;button&quot; data-related=&quot;tag__name__&quot;&gt;×&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
\" class=\"collection-fields-list\">
                                    <div>
                                        <div data-content=\"tag0\">
                                            <div class=\"row-oro oro-multiselect-holder validation-error\">
                                                <input type=\"email\" name=\"oro_user_user_form[emails][tag0][email]\" id=\"oro_user_user_form_emails_tag0_email\" class=\"error\" />
                                                <select class=\"oro-multiselect\">
                                                    <option>Work</option>
                                                    <option>Home</option>
                                                    <option>Cell</option>
                                                </select>
                                                <button data-related=\"tag0\" type=\"button\" class=\"removeRow btn-action btn-link\">×</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href=\"javascript: void(0);\" class=\"btn add-list-item\">Add another email</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_imageFile\" class=\"control-label\">Avatar</label>
                        <div class=\"controls validation-error\">
                            <textarea cols=\"30\" rows=\"10\" class=\"error\" placeholder=\"Enter text\"></textarea>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_imageFile\" class=\"control-label\">test</label>
                        <div class=\"controls validation-error\">
                            <div class=\"error validate-group\">
                                <label class=\"checkbox\">
                                    <input type=\"checkbox\" value=\"\">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                <label class=\"checkbox\">
                                    <input type=\"checkbox\" value=\"\">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_imageFile\" class=\"control-label\">test</label>
                        <div class=\"controls validation-error\">
                            <label class=\"checkbox error\">
                                <input type=\"checkbox\" value=\"\">
                                Option one is this and that—be sure to include why it's great
                            </label>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"oro_user_user_form_imageFile\" class=\"control-label\">Radio</label>
                        <div class=\"controls validation-error\">
                            <div class=\"error validate-group\">
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios1\" value=\"option1\" checked>
                                    Option one is this and that—be sure to include why it's great
                                </label>
                                <label class=\"radio\">
                                    <input type=\"radio\" name=\"optionsRadios\" id=\"optionsRadios2\" value=\"option2\">
                                    Option two can be something else and selecting it will deselect option one
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    ";
        // line 209
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:formHorizontal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 83,  207 => 33,  277 => 76,  268 => 73,  251 => 64,  185 => 27,  282 => 84,  221 => 41,  212 => 58,  214 => 60,  211 => 59,  191 => 53,  159 => 44,  143 => 109,  23 => 26,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 493,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  657 => 277,  649 => 271,  644 => 268,  630 => 257,  611 => 247,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  567 => 230,  554 => 223,  536 => 217,  533 => 216,  531 => 215,  498 => 198,  461 => 175,  445 => 163,  443 => 162,  429 => 154,  423 => 151,  411 => 144,  394 => 136,  388 => 133,  357 => 113,  350 => 111,  346 => 110,  338 => 107,  332 => 105,  319 => 98,  313 => 96,  291 => 98,  250 => 80,  238 => 56,  127 => 27,  517 => 168,  503 => 200,  489 => 156,  487 => 192,  482 => 153,  477 => 151,  467 => 144,  462 => 142,  459 => 141,  450 => 139,  442 => 137,  422 => 132,  416 => 130,  401 => 125,  391 => 121,  383 => 118,  353 => 107,  349 => 106,  330 => 104,  324 => 102,  306 => 127,  304 => 96,  288 => 83,  261 => 77,  259 => 70,  256 => 69,  248 => 66,  245 => 209,  243 => 47,  232 => 66,  229 => 65,  224 => 53,  216 => 60,  186 => 50,  147 => 45,  130 => 37,  284 => 94,  280 => 127,  253 => 75,  227 => 95,  223 => 94,  153 => 43,  77 => 132,  520 => 208,  513 => 403,  510 => 402,  506 => 400,  501 => 199,  496 => 397,  474 => 382,  341 => 260,  335 => 106,  273 => 200,  67 => 17,  20 => 1,  161 => 45,  122 => 488,  119 => 88,  671 => 293,  621 => 251,  615 => 242,  610 => 239,  608 => 246,  600 => 232,  596 => 230,  590 => 229,  561 => 224,  558 => 224,  555 => 222,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  523 => 215,  518 => 207,  515 => 212,  511 => 203,  508 => 164,  505 => 209,  502 => 208,  483 => 190,  478 => 188,  475 => 202,  471 => 183,  454 => 196,  449 => 194,  439 => 189,  436 => 188,  431 => 135,  426 => 183,  408 => 177,  396 => 123,  389 => 171,  368 => 116,  355 => 153,  351 => 152,  347 => 262,  344 => 105,  340 => 149,  322 => 136,  311 => 132,  301 => 90,  297 => 88,  286 => 89,  283 => 82,  260 => 84,  237 => 98,  233 => 45,  230 => 63,  226 => 64,  217 => 61,  202 => 33,  197 => 30,  192 => 29,  175 => 24,  182 => 52,  179 => 72,  152 => 50,  149 => 49,  124 => 655,  97 => 70,  84 => 19,  34 => 6,  181 => 23,  137 => 31,  125 => 13,  107 => 18,  90 => 'placeholder',  63 => 19,  53 => 79,  485 => 171,  480 => 152,  472 => 165,  468 => 380,  455 => 159,  451 => 195,  448 => 157,  438 => 160,  434 => 187,  424 => 144,  420 => 150,  418 => 141,  409 => 139,  404 => 126,  398 => 137,  392 => 130,  390 => 134,  385 => 132,  379 => 124,  376 => 161,  373 => 115,  366 => 116,  348 => 113,  333 => 257,  325 => 137,  320 => 107,  316 => 97,  309 => 93,  305 => 129,  294 => 99,  289 => 90,  279 => 84,  275 => 82,  269 => 75,  263 => 72,  252 => 87,  240 => 68,  235 => 44,  219 => 78,  193 => 55,  189 => 75,  170 => 77,  129 => 667,  102 => 16,  65 => 79,  58 => 60,  71 => 55,  270 => 81,  255 => 68,  247 => 79,  244 => 78,  241 => 59,  239 => 54,  236 => 46,  231 => 80,  228 => 42,  225 => 39,  222 => 38,  220 => 92,  218 => 40,  209 => 57,  205 => 34,  180 => 34,  172 => 23,  144 => 4,  93 => 162,  88 => 63,  78 => 21,  201 => 56,  199 => 53,  196 => 33,  187 => 28,  173 => 48,  168 => 13,  166 => 26,  156 => 9,  138 => 16,  136 => 19,  133 => 38,  121 => 90,  112 => 365,  62 => 33,  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 288,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 278,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 258,  628 => 155,  624 => 154,  617 => 250,  613 => 248,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 231,  566 => 226,  560 => 125,  556 => 123,  550 => 122,  539 => 218,  534 => 119,  530 => 118,  527 => 117,  525 => 211,  507 => 202,  504 => 99,  500 => 162,  493 => 158,  491 => 157,  488 => 93,  481 => 189,  479 => 383,  476 => 98,  469 => 'placeholder',  466 => 379,  464 => 161,  460 => 91,  457 => 90,  453 => 89,  446 => 138,  444 => 191,  441 => 154,  437 => 86,  430 => 'placeholder',  428 => 134,  425 => 152,  419 => 131,  417 => 179,  413 => 129,  410 => 128,  407 => 127,  405 => 84,  402 => 138,  399 => 82,  395 => 131,  393 => 172,  380 => 'placeholder',  378 => 162,  375 => 67,  371 => 114,  364 => 115,  362 => 109,  359 => 114,  354 => 58,  352 => 115,  345 => 'placeholder',  342 => 109,  339 => 103,  334 => 80,  329 => 76,  327 => 103,  323 => 108,  321 => 99,  317 => 133,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 100,  293 => 85,  290 => 49,  285 => 85,  281 => 93,  278 => 83,  274 => 75,  267 => 80,  265 => 72,  262 => 85,  258 => 70,  215 => 39,  213 => 49,  206 => 58,  203 => 34,  178 => 25,  176 => 33,  171 => 14,  167 => 55,  160 => 62,  154 => 37,  151 => 21,  141 => 70,  132 => 65,  116 => 87,  114 => 83,  104 => 32,  91 => 14,  158 => 52,  146 => 55,  140 => 17,  128 => 14,  118 => 34,  110 => 35,  105 => 102,  100 => 71,  81 => 18,  61 => 16,  87 => 11,  46 => 8,  44 => 11,  76 => 57,  70 => 18,  59 => 17,  49 => 9,  28 => 2,  25 => 4,  21 => 2,  94 => 245,  89 => 27,  85 => 62,  75 => 102,  68 => 21,  56 => 14,  27 => 5,  31 => 3,  38 => 34,  26 => 2,  24 => 21,  19 => 1,  79 => 149,  72 => 19,  69 => 13,  47 => 12,  40 => 10,  37 => 9,  22 => 2,  246 => 108,  164 => 45,  162 => 39,  157 => 36,  139 => 3,  120 => 25,  115 => 48,  111 => 82,  108 => 44,  101 => 72,  98 => 30,  96 => 14,  83 => 25,  74 => 25,  66 => 20,  55 => 14,  52 => 11,  50 => 15,  43 => 63,  41 => 6,  35 => 2,  32 => 3,  29 => 3,  210 => 35,  204 => 32,  200 => 80,  194 => 28,  190 => 51,  188 => 71,  183 => 24,  177 => 49,  174 => 46,  169 => 45,  165 => 56,  163 => 78,  155 => 23,  150 => 21,  148 => 35,  145 => 16,  142 => 42,  134 => 30,  131 => 15,  126 => 48,  123 => 14,  117 => 39,  113 => 12,  109 => 78,  106 => 33,  103 => 98,  99 => 96,  95 => 167,  92 => 28,  86 => 26,  82 => 23,  80 => 112,  73 => 56,  64 => 65,  60 => 1,  57 => 13,  54 => 'placeholder',  51 => 75,  48 => 74,  45 => 41,  42 => 1,  39 => 11,  36 => 5,  33 => 7,  30 => 2,);
    }
}
