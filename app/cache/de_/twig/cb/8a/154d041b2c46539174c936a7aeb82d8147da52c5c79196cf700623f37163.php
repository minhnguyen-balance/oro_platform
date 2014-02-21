<?php

/* OroUIBundle:Default:generalElements.html.twig */
class __TwigTemplate_cb8a154d041b2c46539174c936a7aeb82d8147da52c5c79196cf700623f37163 extends Twig_Template
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
        echo "    <div class=\"container-fluid wb\">
    <div class=\"row-fluid one-column\">
    <div class=\"container-fluid\">
    <p class=\"muted\">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
    <p class=\"text-warning\">Etiam porta sem malesuada magna mollis euismod.</p>
    <p class=\"text-error\">Donec ullamcorper nulla non metus auctor fringilla.</p>
    <p class=\"text-info\">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
    <p class=\"text-success\">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
    <hr />
    <blockquote>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    </blockquote>
    <hr />
    <div class=\"form-row\">
        <ul>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit
                <ul>
                    <li>Phasellus iaculis neque</li>
                    <li>Purus sodales ultricies</li>
                    <li>Vestibulum laoreet porttitor sem</li>
                    <li>Ac tristique libero volutpat at</li>
                </ul>
            </li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
        </ul>
        <ul class=\"unstyled\">
            <li>Lorem ipsum dolor sit amet</li>
            <li>Consectetur adipiscing elit</li>
            <li>Integer molestie lorem at massa</li>
            <li>Facilisis in pretium nisl aliquet</li>
            <li>Nulla volutpat aliquam velit
                <ul>
                    <li>Phasellus iaculis neque</li>
                    <li>Purus sodales ultricies</li>
                    <li>Vestibulum laoreet porttitor sem</li>
                    <li>Ac tristique libero volutpat at</li>
                </ul>
            </li>
            <li>Faucibus porta lacus fringilla vel</li>
            <li>Aenean sit amet erat nunc</li>
            <li>Eget porttitor lorem</li>
        </ul>
        <ul class=\"inline\">
            <li>Lorem ipsum</li>
            <li>Phasellus iaculis</li>
            <li>Nulla volutpat</li>
        </ul>
        <hr />
        <dl class=\"form-row\">
            <dt>Description lists</dt>
            <dd>A description list is perfect for defining terms.</dd>
            <dt>Euismod</dt>
            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
            <dt>Malesuada porta</dt>
            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
        </dl>
        <dl class=\"dl-horizontal\">
            <dt>Description lists</dt>
            <dd>A description list is perfect for defining terms.</dd>
            <dt>Euismod</dt>
            <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
            <dd>Donec id elit non mi porta gravida at eget metus.</dd>
            <dt>Malesuada porta</dt>
            <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
            <dt>Felis euismod semper eget lacinia</dt>
            <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
        </dl>
    </div>
    <hr />
    <ul style=\"margin-bottom: 5px;\" class=\"breadcrumb\">
        <li><a href=\"#\">Home</a> <span class=\"divider\">/</span></li>
        <li><a href=\"#\">Library</a> <span class=\"divider\">/</span></li>
        <li class=\"active\">Data</li>
    </ul>
    <hr />
    <div class=\"progress\">
        <div style=\"width: 35%\" class=\"bar bar-success\"></div>
        <div style=\"width: 20%\" class=\"bar bar-warning\"></div>
        <div style=\"width: 10%\" class=\"bar bar-danger\"></div>
    </div>
    <hr />
    <div class=\"bs-docs-example\">
        <div style=\"margin-bottom: 9px;\" class=\"progress progress-info\">
            <div style=\"width: 20%\" class=\"bar\"></div>
        </div>
        <div style=\"margin-bottom: 9px;\" class=\"progress progress-success\">
            <div style=\"width: 40%\" class=\"bar\"></div>
        </div>
        <div style=\"margin-bottom: 9px;\" class=\"progress progress-warning\">
            <div style=\"width: 60%\" class=\"bar\"></div>
        </div>
        <div class=\"progress progress-danger\">
            <div style=\"width: 80%\" class=\"bar\"></div>
        </div>
    </div>
    <hr />
    <div class=\"bs-docs-example\">
        <div style=\"margin-bottom: 9px;\" class=\"progress progress-info progress-striped\">
            <div style=\"width: 20%\" class=\"bar\"></div>
        </div>
        <div style=\"margin-bottom: 9px;\" class=\"progress progress-success progress-striped\">
            <div style=\"width: 40%\" class=\"bar\"></div>
        </div>
        <div style=\"margin-bottom: 9px;\" class=\"progress progress-warning progress-striped\">
            <div style=\"width: 60%\" class=\"bar\"></div>
        </div>
        <div class=\"progress progress-danger progress-striped\">
            <div style=\"width: 80%\" class=\"bar\"></div>
        </div>
    </div>
    <hr />
    <h4>.pull-left</h4>
    <h4>.pull-right</h4>
    <ul class=\"media-list\">
        <li class=\"media\">
            <a href=\"#\" class=\"pull-left\">
                <img data-src=\"holder.js/64x64\" class=\"media-object\" alt=\"64x64\" style=\"width: 64px; height: 64px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABUUlEQVR4nO2UMW7DMAxFc/+jcObqUbsOwDPwCurEQFXsoojgPBT9wxsSO8TTk6JHZo7/zIMWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkO0FobZjbMbBzHcfqOmQ13R2feEqBEM3P03oeZjd776Tu/lb1j5m0B3P1yhzJzRMRzJ2dZd39ZZGttayYSoI5oCdUi1kDu/k22FlG/nZ+9OxMLcHVc63NEnMrOi5yP+M5M7ASsu1rP5mO9ytb76/c7Mz8eYP2/lmzt1MrZPbAe852ZHw9Qt3FEXN7YZ7tVv+u9P0NExNZMJEBm/nhhXcnOO7ce83dnYgH+OgpAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1A8wVF0yPpFTYpPwAAAABJRU5ErkJggg==\">
            </a>
            <div class=\"media-body\">
                <h4 class=\"media-heading\">Media heading</h4>
                <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                <!-- Nested media object -->
                <div class=\"media\">
                    <a href=\"#\" class=\"pull-left\">
                        <img data-src=\"holder.js/64x64\" class=\"media-object\" alt=\"64x64\" style=\"width: 64px; height: 64px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABUUlEQVR4nO2UMW7DMAxFc/+jcObqUbsOwDPwCurEQFXsoojgPBT9wxsSO8TTk6JHZo7/zIMWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkO0FobZjbMbBzHcfqOmQ13R2feEqBEM3P03oeZjd776Tu/lb1j5m0B3P1yhzJzRMRzJ2dZd39ZZGttayYSoI5oCdUi1kDu/k22FlG/nZ+9OxMLcHVc63NEnMrOi5yP+M5M7ASsu1rP5mO9ytb76/c7Mz8eYP2/lmzt1MrZPbAe852ZHw9Qt3FEXN7YZ7tVv+u9P0NExNZMJEBm/nhhXcnOO7ce83dnYgH+OgpAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1A8wVF0yPpFTYpPwAAAABJRU5ErkJggg==\">
                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Nested media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                        <!-- Nested media object -->
                        <div class=\"media\">
                            <a href=\"#\" class=\"pull-left\">
                                <img data-src=\"holder.js/64x64\" class=\"media-object\" alt=\"64x64\" style=\"width: 64px; height: 64px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABUUlEQVR4nO2UMW7DMAxFc/+jcObqUbsOwDPwCurEQFXsoojgPBT9wxsSO8TTk6JHZo7/zIMWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkO0FobZjbMbBzHcfqOmQ13R2feEqBEM3P03oeZjd776Tu/lb1j5m0B3P1yhzJzRMRzJ2dZd39ZZGttayYSoI5oCdUi1kDu/k22FlG/nZ+9OxMLcHVc63NEnMrOi5yP+M5M7ASsu1rP5mO9ytb76/c7Mz8eYP2/lmzt1MrZPbAe852ZHw9Qt3FEXN7YZ7tVv+u9P0NExNZMJEBm/nhhXcnOO7ce83dnYgH+OgpAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1A8wVF0yPpFTYpPwAAAABJRU5ErkJggg==\">
                            </a>
                            <div class=\"media-body\">
                                <h4 class=\"media-heading\">Nested media heading</h4>
                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nested media object -->
                <div class=\"media\">
                    <a href=\"#\" class=\"pull-left\">
                        <img data-src=\"holder.js/64x64\" class=\"media-object\" alt=\"64x64\" style=\"width: 64px; height: 64px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABUUlEQVR4nO2UMW7DMAxFc/+jcObqUbsOwDPwCurEQFXsoojgPBT9wxsSO8TTk6JHZo7/zIMWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkO0FobZjbMbBzHcfqOmQ13R2feEqBEM3P03oeZjd776Tu/lb1j5m0B3P1yhzJzRMRzJ2dZd39ZZGttayYSoI5oCdUi1kDu/k22FlG/nZ+9OxMLcHVc63NEnMrOi5yP+M5M7ASsu1rP5mO9ytb76/c7Mz8eYP2/lmzt1MrZPbAe852ZHw9Qt3FEXN7YZ7tVv+u9P0NExNZMJEBm/nhhXcnOO7ce83dnYgH+OgpAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1A8wVF0yPpFTYpPwAAAABJRU5ErkJggg==\">
                    </a>
                    <div class=\"media-body\">
                        <h4 class=\"media-heading\">Nested media heading</h4>
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
                    </div>
                </div>
            </div>
        </li>
        <li class=\"media\">
            <a href=\"#\" class=\"pull-right\">
                <img data-src=\"holder.js/64x64\" class=\"media-object\" alt=\"64x64\" style=\"width: 64px; height: 64px;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAABUUlEQVR4nO2UMW7DMAxFc/+jcObqUbsOwDPwCurEQFXsoojgPBT9wxsSO8TTk6JHZo7/zIMWoFEAWoBGAWgBGgWgBWgUgBagUQBagEYBaAEaBaAFaBSAFqBRAFqARgFoARoFoAVoFIAWoNkO0FobZjbMbBzHcfqOmQ13R2feEqBEM3P03oeZjd776Tu/lb1j5m0B3P1yhzJzRMRzJ2dZd39ZZGttayYSoI5oCdUi1kDu/k22FlG/nZ+9OxMLcHVc63NEnMrOi5yP+M5M7ASsu1rP5mO9ytb76/c7Mz8eYP2/lmzt1MrZPbAe852ZHw9Qt3FEXN7YZ7tVv+u9P0NExNZMJEBm/nhhXcnOO7ce83dnYgH+OgpAC9AoAC1AowC0AI0C0AI0CkAL0CgALUCjALQAjQLQAjQKQAvQKAAtQKMAtACNAtACNApAC9AoAC1A8wVF0yPpFTYpPwAAAABJRU5ErkJggg==\">
            </a>
            <div class=\"media-body\">
                <h4 class=\"media-heading\">Media heading</h4>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
            </div>
        </li>
    </ul>
    <hr />
    <h3 class=\"title\">Paddigns</h3>
    <div class=\"bs-docs-example\">
        <div class=\"well well-small\">
            Look, I'm in a .well-small!
        </div>
    </div>
    <div class=\"well\">
        Look, I'm in a .well!
    </div>
    <div class=\"well well-large\">
        Look, I'm in a .well-large!
    </div>
    <div class=\"form-row\">
        Look, I'm in a .form-row!
    </div>
    <div class=\"hero-unit\">
        <h1>Hello, world!</h1>
        <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <p><a class=\"btn btn-primary btn-large\">Learn more</a></p>
    </div>
    <hr />
    <div class=\"form-row\">
        <table class=\"table table-bordered table-striped\">
            <thead>
            <tr>
                <th>Variable</th>
                <th>By default</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><code>@gridColumns</code></td>
                <td>12</td>
            </tr>
            <tr>
                <td><code>@gridColumnWidth</code></td>
                <td>60px</td>
            </tr>
            <tr>
                <td><code>@gridGutterWidth</code></td>
                <td>20px</td>
            </tr>
            <tr>
                <td><code>@bodyBackground</code></td>
                <td><span class=\"pull-left\">@white;</span><span class=\"example\" style=\"background: #fff;\"></span></td>
            </tr>
            <tr>
                <td><code>@textColor</code></td>
                <td><span class=\"pull-left\">@grayDark;</span><span class=\"example\" style=\"background: #333;\"></span></td>
            </tr>
            <tr>
                <td><code>@linkColor</code></td>
                <td><span class=\"pull-left\">#08c;</span><span class=\"example\" style=\"background: #08c\"></span></td>
            </tr>
            <tr>
                <td><code>@linkColorHover</code></td>
                <td><span class=\"pull-left\">darken(@linkColor, 15%);</span><span class=\"example\" style=\"background: #005580\"></span></td>
            </tr>
            <tr>
                <td><code>@baseFontSize</code></td>
                <td>14px;</td>
            </tr>
            <tr>
                <td><code>@baseFontFamily</code></td>
                <td>@sansFontFamily</td>
            </tr>
            <tr>
                <td><code>@baseLineHeight</code></td>
                <td>20px;</td>
            </tr>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:generalElements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2431 => 2339,  2364 => 2275,  2246 => 2160,  2128 => 2045,  2010 => 1930,  1892 => 1815,  1774 => 1700,  1656 => 1585,  1538 => 1470,  1420 => 1355,  1302 => 1240,  1184 => 1125,  948 => 895,  830 => 780,  712 => 665,  2321 => 2207,  2254 => 2143,  2136 => 2028,  2018 => 1913,  1900 => 1798,  1782 => 1683,  1664 => 1568,  1546 => 1453,  1428 => 1338,  1310 => 1223,  1192 => 1108,  1074 => 993,  956 => 878,  838 => 763,  720 => 648,  602 => 533,  484 => 418,  257 => 83,  207 => 33,  277 => 76,  268 => 73,  251 => 64,  185 => 27,  282 => 84,  221 => 41,  212 => 58,  214 => 60,  211 => 59,  191 => 53,  159 => 44,  143 => 109,  23 => 26,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 659,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 610,  1214 => 603,  1202 => 594,  1153 => 550,  1150 => 549,  1148 => 548,  1112 => 515,  1105 => 510,  1103 => 505,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 1010,  1062 => 492,  1058 => 490,  1056 => 489,  1053 => 488,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 454,  999 => 440,  996 => 439,  992 => 437,  982 => 431,  980 => 430,  973 => 425,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 483,  950 => 415,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 400,  921 => 399,  916 => 397,  911 => 395,  906 => 392,  903 => 391,  900 => 390,  897 => 389,  894 => 387,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 380,  872 => 379,  869 => 378,  866 => 377,  864 => 376,  861 => 375,  858 => 374,  855 => 373,  853 => 372,  850 => 371,  847 => 370,  844 => 369,  841 => 368,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 354,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 348,  790 => 347,  783 => 342,  777 => 338,  775 => 337,  770 => 334,  764 => 332,  756 => 327,  753 => 326,  751 => 325,  746 => 323,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  681 => 287,  678 => 286,  673 => 285,  670 => 284,  662 => 279,  657 => 277,  649 => 271,  644 => 268,  630 => 257,  611 => 247,  598 => 238,  592 => 237,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  567 => 230,  554 => 223,  536 => 217,  533 => 216,  531 => 215,  498 => 198,  461 => 175,  445 => 163,  443 => 162,  429 => 154,  423 => 151,  411 => 144,  394 => 136,  388 => 133,  357 => 113,  350 => 111,  346 => 110,  338 => 107,  332 => 105,  319 => 98,  313 => 96,  291 => 98,  250 => 80,  238 => 56,  127 => 27,  517 => 168,  503 => 200,  489 => 156,  487 => 192,  482 => 153,  477 => 151,  467 => 144,  462 => 142,  459 => 141,  450 => 406,  442 => 137,  422 => 132,  416 => 130,  401 => 125,  391 => 121,  383 => 118,  353 => 107,  349 => 106,  330 => 104,  324 => 102,  306 => 127,  304 => 96,  288 => 83,  261 => 77,  259 => 70,  256 => 69,  248 => 66,  245 => 209,  243 => 47,  232 => 66,  229 => 65,  224 => 53,  216 => 60,  186 => 50,  147 => 45,  130 => 37,  284 => 94,  280 => 127,  253 => 75,  227 => 95,  223 => 94,  153 => 43,  77 => 13,  520 => 208,  513 => 403,  510 => 402,  506 => 400,  501 => 199,  496 => 397,  474 => 382,  341 => 260,  335 => 106,  273 => 200,  67 => 18,  20 => 1,  161 => 45,  122 => 488,  119 => 88,  671 => 293,  621 => 251,  615 => 242,  610 => 239,  608 => 246,  600 => 232,  596 => 230,  590 => 229,  561 => 224,  558 => 224,  555 => 222,  551 => 222,  548 => 221,  545 => 220,  542 => 219,  523 => 215,  518 => 207,  515 => 212,  511 => 203,  508 => 164,  505 => 209,  502 => 208,  483 => 190,  478 => 188,  475 => 202,  471 => 183,  454 => 196,  449 => 194,  439 => 189,  436 => 188,  431 => 135,  426 => 183,  408 => 177,  396 => 123,  389 => 171,  368 => 116,  355 => 153,  351 => 152,  347 => 262,  344 => 105,  340 => 149,  322 => 136,  311 => 132,  301 => 90,  297 => 88,  286 => 89,  283 => 82,  260 => 84,  237 => 98,  233 => 45,  230 => 63,  226 => 64,  217 => 61,  202 => 33,  197 => 30,  192 => 29,  175 => 24,  182 => 52,  179 => 72,  152 => 50,  149 => 49,  124 => 655,  97 => 70,  84 => 19,  34 => 4,  181 => 23,  137 => 31,  125 => 13,  107 => 18,  90 => 'placeholder',  63 => 19,  53 => 12,  485 => 171,  480 => 152,  472 => 165,  468 => 380,  455 => 159,  451 => 195,  448 => 157,  438 => 160,  434 => 187,  424 => 144,  420 => 150,  418 => 141,  409 => 139,  404 => 126,  398 => 137,  392 => 130,  390 => 134,  385 => 132,  379 => 124,  376 => 161,  373 => 115,  366 => 116,  348 => 113,  333 => 257,  325 => 137,  320 => 107,  316 => 97,  309 => 93,  305 => 129,  294 => 99,  289 => 90,  279 => 84,  275 => 82,  269 => 75,  263 => 72,  252 => 87,  240 => 68,  235 => 44,  219 => 78,  193 => 55,  189 => 75,  170 => 77,  129 => 667,  102 => 16,  65 => 17,  58 => 60,  71 => 55,  270 => 81,  255 => 68,  247 => 79,  244 => 78,  241 => 59,  239 => 54,  236 => 46,  231 => 80,  228 => 42,  225 => 39,  222 => 38,  220 => 92,  218 => 40,  209 => 57,  205 => 34,  180 => 34,  172 => 23,  144 => 4,  93 => 162,  88 => 63,  78 => 21,  201 => 56,  199 => 53,  196 => 33,  187 => 28,  173 => 48,  168 => 13,  166 => 26,  156 => 9,  138 => 16,  136 => 19,  133 => 38,  121 => 90,  112 => 365,  62 => 33,  706 => 189,  699 => 'placeholder',  694 => 185,  691 => 184,  687 => 288,  679 => 173,  672 => 169,  668 => 168,  663 => 166,  659 => 278,  655 => 164,  651 => 163,  647 => 162,  640 => 158,  636 => 157,  632 => 258,  628 => 155,  624 => 154,  617 => 250,  613 => 248,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  589 => 143,  581 => 137,  579 => 136,  576 => 135,  572 => 180,  569 => 231,  566 => 226,  560 => 125,  556 => 123,  550 => 122,  539 => 218,  534 => 119,  530 => 118,  527 => 117,  525 => 211,  507 => 202,  504 => 99,  500 => 162,  493 => 158,  491 => 157,  488 => 93,  481 => 189,  479 => 383,  476 => 98,  469 => 'placeholder',  466 => 379,  464 => 161,  460 => 91,  457 => 90,  453 => 89,  446 => 138,  444 => 191,  441 => 154,  437 => 86,  430 => 'placeholder',  428 => 134,  425 => 152,  419 => 131,  417 => 179,  413 => 129,  410 => 128,  407 => 127,  405 => 84,  402 => 138,  399 => 82,  395 => 131,  393 => 172,  380 => 'placeholder',  378 => 162,  375 => 67,  371 => 114,  364 => 115,  362 => 109,  359 => 114,  354 => 58,  352 => 115,  345 => 'placeholder',  342 => 109,  339 => 103,  334 => 80,  329 => 76,  327 => 103,  323 => 108,  321 => 99,  317 => 133,  314 => 55,  307 => 'placeholder',  303 => 52,  296 => 100,  293 => 85,  290 => 49,  285 => 85,  281 => 93,  278 => 83,  274 => 75,  267 => 80,  265 => 72,  262 => 85,  258 => 70,  215 => 39,  213 => 49,  206 => 58,  203 => 34,  178 => 25,  176 => 33,  171 => 14,  167 => 55,  160 => 62,  154 => 37,  151 => 21,  141 => 70,  132 => 65,  116 => 87,  114 => 83,  104 => 32,  91 => 14,  158 => 52,  146 => 55,  140 => 17,  128 => 14,  118 => 34,  110 => 35,  105 => 102,  100 => 71,  81 => 22,  61 => 16,  87 => 11,  46 => 8,  44 => 11,  76 => 57,  70 => 18,  59 => 16,  49 => 7,  28 => 2,  25 => 4,  21 => 2,  94 => 245,  89 => 27,  85 => 62,  75 => 20,  68 => 21,  56 => 14,  27 => 5,  31 => 2,  38 => 34,  26 => 3,  24 => 21,  19 => 1,  79 => 149,  72 => 19,  69 => 13,  47 => 7,  40 => 10,  37 => 5,  22 => 2,  246 => 108,  164 => 45,  162 => 39,  157 => 36,  139 => 3,  120 => 25,  115 => 48,  111 => 82,  108 => 44,  101 => 72,  98 => 30,  96 => 14,  83 => 25,  74 => 12,  66 => 20,  55 => 9,  52 => 8,  50 => 8,  43 => 5,  41 => 5,  35 => 2,  32 => 3,  29 => 2,  210 => 35,  204 => 32,  200 => 80,  194 => 28,  190 => 51,  188 => 71,  183 => 24,  177 => 49,  174 => 46,  169 => 45,  165 => 56,  163 => 78,  155 => 23,  150 => 21,  148 => 35,  145 => 16,  142 => 42,  134 => 30,  131 => 15,  126 => 48,  123 => 14,  117 => 39,  113 => 12,  109 => 78,  106 => 33,  103 => 98,  99 => 96,  95 => 167,  92 => 28,  86 => 26,  82 => 23,  80 => 112,  73 => 56,  64 => 9,  60 => 1,  57 => 12,  54 => 'placeholder',  51 => 75,  48 => 9,  45 => 41,  42 => 7,  39 => 4,  36 => 5,  33 => 7,  30 => 2,);
    }
}
