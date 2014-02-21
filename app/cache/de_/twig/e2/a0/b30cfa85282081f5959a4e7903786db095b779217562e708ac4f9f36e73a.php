<?php

/* OroUIBundle:Default:buttonsPage.html.twig */
class __TwigTemplate_e2a0b30cfa85282081f5959a4e7903786db095b779217562e708ac4f9f36e73a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OroUIBundle:Default:index.html.twig");

        $this->blocks = array(
            'header' => array($this, 'block_header'),
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
    public function block_header($context, array $blocks = array())
    {
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row-fluid one-column\">
    <div class=\"span12 top-frame\">
    <!--Body content-->
    <div class=\"container-fluid\">
    <p>
        <button class=\"btn btn-large btn-primary\" type=\"button\">Large button</button>
        <button class=\"btn btn-large\" type=\"button\">Large button</button>
        <button class=\"btn btn-large btn-info\" type=\"button\">Large button</button>
        <button class=\"btn btn-large btn-success\" type=\"button\">Large button</button>
        <button class=\"btn btn-large btn-warning\" type=\"button\">Large button</button>
        <button class=\"btn btn-large btn-danger\" type=\"button\">Large button</button>
        <button class=\"btn btn-large btn-inverse\" type=\"button\">Large button</button>
        <button class=\"btn btn-large btn-link\" type=\"button\">Large button like link</button>
    </p>
    <p>
        <button class=\"btn btn-primary\" type=\"button\">Default button</button>
        <button class=\"btn\" type=\"button\">Default button</button>
        <button class=\"btn btn-info\" type=\"button\">Large button</button>
        <button class=\"btn btn-success\" type=\"button\">Large button</button>
        <button class=\"btn btn-warning\" type=\"button\">Large button</button>
        <button class=\"btn btn-danger\" type=\"button\">Large button</button>
        <button class=\"btn btn-inverse\" type=\"button\">Large button</button>
        <button class=\"btn btn-link\" type=\"button\">Large button like link</button>
    </p>
    <p>
        <button class=\"btn btn-small btn-primary\" type=\"button\">Small button</button>
        <button class=\"btn btn-small\" type=\"button\">Small button</button>
        <button class=\"btn btn-small btn-info\" type=\"button\">Large button</button>
        <button class=\"btn btn-small btn-success\" type=\"button\">Large button</button>
        <button class=\"btn btn-small btn-warning\" type=\"button\">Large button</button>
        <button class=\"btn btn-small btn-danger\" type=\"button\">Large button</button>
        <button class=\"btn btn-small btn-inverse\" type=\"button\">Large button</button>
        <button class=\"btn btn-small btn-link\" type=\"button\">Large button like link</button>
    </p>
    <p>
        <button class=\"btn btn-mini btn-primary\" type=\"button\">Mini button</button>
        <button class=\"btn btn-mini\" type=\"button\">Mini button</button>
        <button class=\"btn btn-mini btn-info\" type=\"button\">Large button</button>
        <button class=\"btn btn-mini btn-success\" type=\"button\">Large button</button>
        <button class=\"btn btn-mini btn-warning\" type=\"button\">Large button</button>
        <button class=\"btn btn-mini btn-danger\" type=\"button\">Large button</button>
        <button class=\"btn btn-mini btn-inverse\" type=\"button\">Large button</button>
        <button class=\"btn btn-mini btn-link\" type=\"button\">Large button like link</button>
    </p>
    <p>
        <button type=\"button\" class=\"btn btn-large btn-primary disabled\" disabled=\"disabled\">Primary button</button>
        <button type=\"button\" class=\"btn btn-large\" disabled>Button</button>
        <a href=\"#\" class=\"btn btn-large btn-primary disabled\">Primary link</a>
        <a href=\"#\" class=\"btn btn-large disabled\">Link</a>
    </p>
    <hr />
    <div style=\"margin: 0;\" class=\"btn-toolbar\">
        <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle\">Action <span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
        <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\">Action <span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
        <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn btn-danger dropdown-toggle\">Danger <span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
        <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn btn-warning dropdown-toggle\">Warning <span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
        <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn btn-success dropdown-toggle\">Success <span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
        <div class=\"btn-group\">
            <button data-toggle=\"dropdown\" class=\"btn btn-info dropdown-toggle\">Info <span class=\"caret\"></span></button>
            <ul class=\"dropdown-menu\">
                <li><a href=\"#\">Action</a></li>
                <li><a href=\"#\">Another action</a></li>
                <li><a href=\"#\">Something else here</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"#\">Separated link</a></li>
            </ul>
        </div><!-- /btn-group -->
        <div class=\"form-row\">
            <div class=\"btn-toolbar\">
                <div class=\"btn-group\">
                    <button class=\"btn\">Action</button>
                    <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class=\"btn-group\">
                    <button class=\"btn btn-primary\">Action</button>
                    <button data-toggle=\"dropdown\" class=\"btn btn-primary dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class=\"btn-group\">
                    <button class=\"btn btn-danger\">Danger</button>
                    <button data-toggle=\"dropdown\" class=\"btn btn-danger dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class=\"btn-group\">
                    <button class=\"btn btn-warning\">Warning</button>
                    <button data-toggle=\"dropdown\" class=\"btn btn-warning dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class=\"btn-group\">
                    <button class=\"btn btn-success\">Success</button>
                    <button data-toggle=\"dropdown\" class=\"btn btn-success dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class=\"btn-group\">
                    <button class=\"btn btn-info\">Info</button>
                    <button data-toggle=\"dropdown\" class=\"btn btn-info dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
                <div class=\"btn-group\">
                    <button class=\"btn btn-inverse\">Inverse</button>
                    <button data-toggle=\"dropdown\" class=\"btn btn-inverse dropdown-toggle\"><span class=\"caret\"></span></button>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </div><!-- /btn-group -->
            </div>
        </div>
    </div>
    <div class=\"form-row\">
        <div class=\"btn-toolbar\">
            <div class=\"btn-group dropup\">
                <button class=\"btn\">Dropup</button>
                <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle\"><span class=\"caret\"></span></button>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Separated link</a></li>
                </ul>
            </div><!-- /btn-group -->
            <div class=\"btn-group dropup\">
                <button class=\"btn primary\">Right dropup</button>
                <button data-toggle=\"dropdown\" class=\"btn primary dropdown-toggle\"><span class=\"caret\"></span></button>
                <ul class=\"dropdown-menu pull-right\">
                    <li><a href=\"#\">Action</a></li>
                    <li><a href=\"#\">Another action</a></li>
                    <li><a href=\"#\">Something else here</a></li>
                    <li class=\"divider\"></li>
                    <li><a href=\"#\">Separated link</a></li>
                </ul>
            </div><!-- /btn-group -->
        </div>
    </div>
    </div>
    <hr />
    <div class=\"container-fluid\">
        <div class=\"form-row\">
            <div class=\"btn-group\">
                <button class=\"btn btn-warning \">Left</button>
                <button class=\"btn\">Middle</button>
                <button class=\"btn btn-danger\">Right</button>
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"btn-group btn-group-vertical\">
                <button class=\"btn\" type=\"button\">one</button>
                <button class=\"btn btn-success\" type=\"button\">two</button>
                <button class=\"btn\" type=\"button\">three</button>
                <button class=\"btn btn-info \" type=\"button\">end</button>
            </div>
        </div>
        <div class=\"form-row\">
            <div style=\"margin: 0;\" class=\"btn-toolbar\">
                <div class=\"btn-group\">
                    <button class=\"btn\">1</button>
                    <button class=\"btn\">2</button>
                    <button class=\"btn\">3</button>
                    <button class=\"btn\">4</button>
                </div>
                <div class=\"btn-group\">
                    <button class=\"btn\">5</button>
                    <button class=\"btn\">6</button>
                    <button class=\"btn\">7</button>
                </div>
                <div class=\"btn-group\">
                    <button class=\"btn\">8</button>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <div class=\"container-fluid\">
        <ul class=\"pager\">
            <li><a href=\"#\">Previous</a></li>
            <li><a href=\"#\">Next</a></li>
        </ul>
        <ul class=\"pager\">
            <li class=\"previous\"><a href=\"#\"><- Older</a></li>
            <li class=\"next\"><a href=\"#\">Newer -></a></li>
        </ul>
    </div>
    <hr />
    <div class=\"container-fluid\">
        <div class=\"form-row\">
            <h2>Buttons <small>bootstrap-button.js</small></h2>
            <p>Add <code>data-loading-text=\"Loading...\"</code> to use a loading state on a button.</p>
            <button class=\"btn btn-primary\" data-loading-text=\"loading...\" id=\"fat-btn\" type=\"button\">Loading state</button>
        </div>
        <div class=\"form-row\">
            <p>Add <code>data-toggle=\"button\"</code> to activate toggling on a single button.</p>
            <button data-toggle=\"button\" class=\"btn btn-primary\" type=\"button\">Single Toggle</button>
        </div>
        <div class=\"form-row\">
            <p>Add <code>data-toggle=\"buttons-checkbox\"</code> for checkbox style toggling on btn-group.</p>
            <div data-toggle=\"buttons-checkbox\" class=\"btn-group\">
                <button class=\"btn btn-primary\" type=\"button\">Left</button>
                <button class=\"btn btn-primary\" type=\"button\">Middle</button>
                <button class=\"btn btn-primary\" type=\"button\">Right</button>
            </div>
        </div>
        <div class=\"form-row\">
            <p>Add <code>data-toggle=\"buttons-radio\"</code> for radio style toggling on btn-group.</p>
            <div data-toggle=\"buttons-radio\" class=\"btn-group\">
                <button class=\"btn btn-primary\" type=\"button\">Left</button>
                <button class=\"btn btn-primary active\" type=\"button\">Middle</button>
                <button class=\"btn btn-primary\" type=\"button\">Right</button>
            </div>
        </div>
    </div>
    <hr />
    <table class=\"table table-bordered table-striped\">
        <thead>
        <tr>
            <th>Variable</th>
            <th>default</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>
                <span class=\"\">@btnBackground</span>
            </td>
            <td>
                <code>@white;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnBackgroundHighlight</span>
            </td>
            <td>
                <code>darken(@white, 10%);</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnBorder</span>
            </td>
            <td>
                <code>#bbb;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnPrimaryBackground</span>
            </td>
            <td>
                <code>@linkColor;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnPrimaryBackgroundHighlight</span>
            </td>
            <td>
                <code>spin(@btnPrimaryBackground, 20%);</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnInfoBackground</span>
            </td>
            <td>
                <code>#5bc0de;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnInfoBackgroundHighlight</span>
            </td>
            <td>
                <code>#2f96b4;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnSuccessBackground</span>
            </td>
            <td>
                <code>#62c462;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnSuccessBackgroundHighlight</span>
            </td>
            <td>
                <code>#51a351;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnWarningBackground:</span>
            </td>
            <td>
                <code>lighten(@orange, 15%);</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnWarningBackgroundHighlight</span>
            </td>
            <td>
                <code>@orange;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnDangerBackground</span>
            </td>
            <td>
                <code>#ee5f5b;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnDangerBackgroundHighlight</span>
            </td>
            <td>
                <code>#bd362f;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnInverseBackground</span>
            </td>
            <td>
                <code>#444;</code>
            </td>
        </tr>
        <tr>
            <td>
                <span class=\"\">@btnInverseBackgroundHighlight</span>
            </td>
            <td>
                <code>@grayDarker;</code>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:buttonsPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 283,  365 => 316,  2431 => 2339,  2364 => 2275,  2246 => 2160,  2128 => 2045,  2010 => 1930,  1892 => 1815,  1774 => 1700,  1656 => 1585,  1538 => 1470,  1420 => 1355,  1302 => 1240,  1184 => 1125,  948 => 895,  830 => 780,  712 => 665,  2321 => 2207,  2254 => 2143,  2136 => 2028,  2018 => 1913,  1900 => 1798,  1782 => 1683,  1664 => 1568,  1546 => 1453,  1428 => 1338,  1310 => 1223,  1192 => 1108,  1074 => 993,  956 => 878,  838 => 763,  720 => 648,  602 => 533,  484 => 418,  257 => 83,  207 => 33,  277 => 76,  268 => 73,  251 => 64,  185 => 27,  282 => 84,  221 => 41,  212 => 58,  214 => 60,  211 => 59,  191 => 53,  159 => 44,  143 => 109,  23 => 26,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 1010,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  657 => 277,  649 => 271,  644 => 268,  630 => 257,  611 => 247,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  567 => 230,  554 => 223,  536 => 217,  533 => 216,  531 => 215,  498 => 198,  461 => 175,  445 => 163,  443 => 162,  429 => 154,  423 => 151,  411 => 144,  394 => 136,  388 => 133,  357 => 113,  350 => 111,  346 => 110,  338 => 107,  332 => 285,  319 => 98,  313 => 96,  291 => 246,  250 => 80,  238 => 56,  127 => 27,  517 => 168,  503 => 200,  489 => 156,  487 => 192,  482 => 153,  477 => 151,  467 => 144,  462 => 142,  459 => 141,  450 => 406,  442 => 137,  422 => 132,  416 => 130,  401 => 125,  391 => 121,  383 => 118,  353 => 107,  349 => 106,  330 => 104,  324 => 102,  306 => 127,  304 => 96,  288 => 83,  261 => 77,  259 => 70,  256 => 69,  248 => 66,  245 => 209,  243 => 47,  232 => 66,  229 => 65,  224 => 53,  216 => 60,  186 => 147,  147 => 45,  130 => 37,  284 => 94,  280 => 127,  253 => 75,  227 => 95,  223 => 94,  153 => 43,  77 => 17,  520 => 208,  513 => 403,  510 => 402,  506 => 400,  501 => 199,  496 => 397,  474 => 382,  341 => 260,  335 => 106,  273 => 200,  67 => 10,  20 => 1,  161 => 45,  122 => 488,  119 => 88,  671 => 293,  621 => 251,  615 => 242,  610 => 239,  608 => 246,  600 => 232,  596 => 230,  590 => 229,  561 => 224,  558 => 224,  555 => 222,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  523 => 215,  518 => 207,  515 => 212,  511 => 203,  508 => 164,  505 => 209,  502 => 208,  483 => 190,  478 => 188,  475 => 202,  471 => 183,  454 => 196,  449 => 194,  439 => 189,  436 => 188,  431 => 135,  426 => 183,  408 => 177,  396 => 123,  389 => 171,  368 => 116,  355 => 153,  351 => 152,  347 => 262,  344 => 105,  340 => 282,  322 => 136,  311 => 132,  301 => 90,  297 => 88,  286 => 89,  283 => 82,  260 => 84,  237 => 98,  233 => 45,  230 => 63,  226 => 64,  217 => 61,  202 => 33,  197 => 113,  192 => 29,  175 => 24,  182 => 52,  179 => 72,  152 => 118,  149 => 49,  124 => 655,  97 => 70,  84 => 29,  34 => 4,  181 => 23,  137 => 31,  125 => 13,  107 => 18,  90 => 16,  63 => 13,  53 => 6,  485 => 171,  480 => 152,  472 => 165,  468 => 380,  455 => 159,  451 => 195,  448 => 157,  438 => 160,  434 => 187,  424 => 144,  420 => 150,  418 => 141,  409 => 139,  404 => 126,  398 => 137,  392 => 130,  390 => 134,  385 => 132,  379 => 124,  376 => 161,  373 => 115,  366 => 116,  348 => 113,  333 => 257,  325 => 137,  320 => 107,  316 => 97,  309 => 93,  305 => 129,  294 => 99,  289 => 90,  279 => 84,  275 => 82,  269 => 75,  263 => 72,  252 => 87,  240 => 68,  235 => 44,  219 => 78,  193 => 55,  189 => 75,  170 => 77,  129 => 667,  102 => 16,  65 => 17,  58 => 12,  71 => 8,  270 => 81,  255 => 68,  247 => 79,  244 => 78,  241 => 59,  239 => 54,  236 => 46,  231 => 80,  228 => 42,  225 => 39,  222 => 38,  220 => 92,  218 => 177,  209 => 57,  205 => 34,  180 => 34,  172 => 23,  144 => 4,  93 => 17,  88 => 63,  78 => 26,  201 => 56,  199 => 53,  196 => 33,  187 => 28,  173 => 48,  168 => 13,  166 => 26,  156 => 119,  138 => 16,  136 => 19,  133 => 38,  121 => 90,  112 => 365,  62 => 33,  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 288,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 278,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 258,  628 => 155,  624 => 154,  617 => 250,  613 => 248,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 231,  566 => 226,  560 => 125,  556 => 123,  550 => 122,  539 => 218,  534 => 119,  530 => 118,  527 => 117,  525 => 211,  507 => 202,  504 => 99,  500 => 162,  493 => 158,  491 => 157,  488 => 93,  481 => 189,  479 => 383,  476 => 98,  469 => 'placeholder',  466 => 379,  464 => 161,  460 => 91,  457 => 90,  453 => 89,  446 => 138,  444 => 191,  441 => 154,  437 => 86,  430 => 'placeholder',  428 => 134,  425 => 152,  419 => 131,  417 => 179,  413 => 129,  410 => 128,  407 => 127,  405 => 84,  402 => 138,  399 => 82,  395 => 131,  393 => 172,  380 => 'placeholder',  378 => 162,  375 => 67,  371 => 114,  364 => 115,  362 => 109,  359 => 114,  354 => 58,  352 => 115,  345 => 'placeholder',  342 => 109,  339 => 103,  334 => 80,  329 => 76,  327 => 103,  323 => 108,  321 => 99,  317 => 133,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 100,  293 => 85,  290 => 49,  285 => 85,  281 => 93,  278 => 83,  274 => 75,  267 => 80,  265 => 72,  262 => 85,  258 => 215,  215 => 39,  213 => 49,  206 => 58,  203 => 34,  178 => 25,  176 => 33,  171 => 14,  167 => 55,  160 => 62,  154 => 37,  151 => 21,  141 => 70,  132 => 65,  116 => 87,  114 => 83,  104 => 32,  91 => 14,  158 => 52,  146 => 55,  140 => 109,  128 => 14,  118 => 34,  110 => 35,  105 => 102,  100 => 20,  81 => 34,  61 => 16,  87 => 15,  46 => 18,  44 => 13,  76 => 57,  70 => 21,  59 => 16,  49 => 290,  28 => 2,  25 => 4,  21 => 2,  94 => 33,  89 => 31,  85 => 62,  75 => 20,  68 => 21,  56 => 7,  27 => 5,  31 => 2,  38 => 6,  26 => 3,  24 => 21,  19 => 1,  79 => 12,  72 => 19,  69 => 13,  47 => 6,  40 => 5,  37 => 5,  22 => 2,  246 => 108,  164 => 45,  162 => 39,  157 => 36,  139 => 3,  120 => 25,  115 => 48,  111 => 82,  108 => 44,  101 => 72,  98 => 30,  96 => 14,  83 => 25,  74 => 9,  66 => 14,  55 => 11,  52 => 8,  50 => 7,  43 => 7,  41 => 7,  35 => 4,  32 => 3,  29 => 2,  210 => 35,  204 => 32,  200 => 144,  194 => 28,  190 => 51,  188 => 71,  183 => 24,  177 => 49,  174 => 46,  169 => 45,  165 => 56,  163 => 78,  155 => 23,  150 => 21,  148 => 35,  145 => 16,  142 => 42,  134 => 30,  131 => 15,  126 => 48,  123 => 14,  117 => 39,  113 => 12,  109 => 78,  106 => 33,  103 => 21,  99 => 96,  95 => 167,  92 => 28,  86 => 26,  82 => 13,  80 => 112,  73 => 31,  64 => 9,  60 => 15,  57 => 5,  54 => 4,  51 => 11,  48 => 8,  45 => 7,  42 => 7,  39 => 142,  36 => 4,  33 => 3,  30 => 2,);
    }
}
