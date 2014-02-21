<?php

/* OroEntityBundle:Entities:relation.html.twig */
class __TwigTemplate_9b0d969dbe2e017c7e908296bc9df6c58a8e09da9abab6fc8dc6f4595a61c05e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["dataGrid"] = $this->env->loadTemplate("OroDataGridBundle::macros.html.twig");
        // line 2
        echo "<div class=\"widget-content grid-widget-content\">
    ";
        // line 3
        $context["gridName"] = "entity-relation-grid";
        // line 4
        echo "
    ";
        // line 5
        $context["gridParams"] = array("_parameters" => array("data_in" => twig_split_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "added"), "method"), ","), "data_not_in" => twig_split_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "removed"), "method"), ",")), "class_name" => (isset($context["entity_class"]) ? $context["entity_class"] : $this->getContext($context, "entity_class")), "entity_id" => (isset($context["entity_id"]) ? $context["entity_id"] : $this->getContext($context, "entity_id")), "field_name" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "fieldName"), "method"), "id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "id"), "method"));
        // line 15
        echo "
    <style type=\"text/css\">
        .grid-widget-content .grid, .grid-widget-content .table{margin-bottom: 0;}
    </style>

    ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "
    <script type=\"text/javascript\">
        ";
        // line 27
        $context["wid"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_wid"), "method");
        // line 28
        echo "        require(['jquery', 'routing', 'oro/datagrid/callback-listener', 'oro/widget-manager',
            'oro/multiple-entity/model'],
        function(\$, routing, CallbackListener, WidgetManager, MultipleEntityModel) {
            var addedModels = {};
            WidgetManager.getWidgetInstance(";
        // line 32
        echo twig_jsonencode_filter((isset($context["wid"]) ? $context["wid"] : $this->getContext($context, "wid")));
        echo ", function(widget) {
                if (widget.options.type == 'dialog') {
                    widget.getWidget().css({
                        'padding': 0,
                        'max-height': 500,
                        'overflow': 'auto'
                    });
                }

                widget.getAction('select', 'adopted', function(selectBtn) {
                    selectBtn.click(function() {
                        var addedVal = \$('#appendRelation').val();
                        var removedVal = \$('#removeRelation').val();
                        var appendedIds = addedVal.length ? addedVal.split(',') : [];
                        var removedIds = removedVal.length ? removedVal.split(',') : [];
                        widget.trigger('completeSelection', appendedIds, addedModels, removedIds);
                    });
                });
            });

            var gridName = ";
        // line 52
        echo twig_jsonencode_filter((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")));
        echo ";

            \$(function() {
                /** @type {oro.datagrid.CallbackListener} */
                new CallbackListener({
                    \$gridContainer: \$('#grid-' + gridName),
                    gridName: gridName,
                    dataField: 'id',
                    columnName: 'assigned',
                    processCallback: function (value, model, listener) {
                        var isActive = model.get(listener.columnName);
                        var id = model.get('id');
                        if (isActive) {
                            var label = '';

                            ";
        // line 67
        $context["label"] = "";
        // line 68
        echo "                            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "get", array(0 => "target_title"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
            // line 69
            echo "                                ";
            $context["is_extend"] = $this->getAttribute($this->getAttribute((isset($context["extend_provider"]) ? $context["extend_provider"] : $this->getContext($context, "extend_provider")), "getConfig", array(0 => $this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "get", array(0 => "target_entity"), "method"), 1 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "method"), "is", array(0 => "owner", 1 => "Custom"), "method");
            // line 70
            echo "                                ";
            $context["field_label"] = (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"));
            // line 71
            echo "                                ";
            if (((isset($context["is_extend"]) ? $context["is_extend"] : $this->getContext($context, "is_extend")) == true)) {
                // line 72
                echo "                                    ";
                $context["field_label"] = ("field_" . (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")));
                // line 73
                echo "                                ";
            }
            // line 74
            echo "
                                label += model.get('";
            // line 75
            echo twig_escape_filter($this->env, (isset($context["field_label"]) ? $context["field_label"] : $this->getContext($context, "field_label")), "html", null, true);
            echo "') + ' ';
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
                            addedModels[id] = new MultipleEntityModel({
                                'id': model.get('id'),
                                'link': routing.generate(
                                        'oro_entity_detailed',
                                        {
                                            id: model.get('id'),
                                            className: '";
        // line 84
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "get", array(0 => "target_entity"), "method"), "\\", "_"), "html", null, true);
        echo "',
                                            fieldName: '";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "getId", array(), "method"), "getFieldName", array(), "method"), "html", null, true);
        echo "'
                                        }
                                ),
                                'label': label,
                                'extraData':
                                [
                                    ";
        // line 91
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "get", array(0 => "target_grid"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 92
            echo "                                        ";
            $context["is_extend"] = $this->getAttribute($this->getAttribute((isset($context["extend_provider"]) ? $context["extend_provider"] : $this->getContext($context, "extend_provider")), "getConfig", array(0 => $this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "get", array(0 => "target_entity"), "method"), 1 => (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field"))), "method"), "is", array(0 => "owner", 1 => "Custom"), "method");
            // line 93
            echo "                                        ";
            $context["field_name"] = (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field"));
            // line 94
            echo "                                        ";
            if (((isset($context["is_extend"]) ? $context["is_extend"] : $this->getContext($context, "is_extend")) == true)) {
                // line 95
                echo "                                            ";
                $context["field_name"] = ("field_" . (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")));
                // line 96
                echo "                                        ";
            }
            // line 97
            echo "                                    {
                                        'label': '";
            // line 98
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["entity_provider"]) ? $context["entity_provider"] : $this->getContext($context, "entity_provider")), "getConfig", array(0 => $this->getAttribute((isset($context["relation"]) ? $context["relation"] : $this->getContext($context, "relation")), "get", array(0 => "target_entity"), "method"), 1 => (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field"))), "method"), "get", array(0 => "label"), "method")), "html", null, true);
            echo "',
                                        'value': model.get('";
            // line 99
            echo twig_escape_filter($this->env, (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), "html", null, true);
            echo "')
                                    },
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                                ]
                            });
                        } else if (addedModels.hasOwnProperty(id)) {
                            delete addedModels[id];
                        }
                    }
                });
            });
        });
    </script>

    <div class=\"widget-actions\">
        <button type=\"reset\" class=\"btn\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</button>
        <button type=\"button\" class=\"btn btn-primary\" data-action-name=\"select\">";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Select"), "html", null, true);
        echo "</button>
    </div>
</div>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        echo $context["dataGrid"]->getrenderGrid((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")), (isset($context["gridParams"]) ? $context["gridParams"] : $this->getContext($context, "gridParams")));
        echo "
        <input type=\"hidden\" name=\"appendRelation\" id=\"appendRelation\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "added"), "method"), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"removeRelation\" id=\"removeRelation\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "removed"), "method"), "html", null, true);
        echo "\" />
    ";
    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Entities:relation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 114,  1441 => 514,  1438 => 513,  1435 => 512,  1432 => 511,  1430 => 510,  1418 => 509,  1397 => 505,  1394 => 504,  1391 => 503,  1388 => 502,  1385 => 501,  1382 => 500,  1379 => 499,  1377 => 498,  1364 => 497,  1349 => 493,  1343 => 491,  1335 => 489,  1333 => 488,  1328 => 487,  1325 => 486,  1316 => 483,  1313 => 482,  1307 => 480,  1304 => 479,  1298 => 477,  1295 => 476,  1292 => 475,  1289 => 474,  1287 => 473,  1276 => 472,  1264 => 464,  1242 => 463,  1239 => 462,  1236 => 461,  1208 => 448,  1205 => 447,  1182 => 440,  1179 => 439,  1149 => 425,  1140 => 422,  1134 => 420,  1132 => 419,  1129 => 418,  1126 => 417,  1092 => 414,  1083 => 413,  1076 => 409,  1071 => 406,  1069 => 405,  1037 => 398,  1020 => 397,  1013 => 393,  1010 => 392,  1008 => 391,  1005 => 390,  1002 => 389,  993 => 386,  990 => 385,  977 => 384,  960 => 355,  953 => 352,  944 => 350,  935 => 347,  929 => 344,  917 => 343,  913 => 342,  909 => 341,  887 => 338,  848 => 305,  845 => 304,  807 => 288,  792 => 281,  789 => 280,  763 => 276,  752 => 275,  737 => 270,  718 => 268,  704 => 266,  684 => 252,  669 => 246,  660 => 243,  645 => 238,  642 => 237,  633 => 234,  627 => 232,  625 => 231,  618 => 229,  607 => 228,  585 => 205,  582 => 204,  571 => 202,  563 => 200,  546 => 194,  537 => 192,  528 => 189,  522 => 187,  516 => 185,  463 => 160,  440 => 132,  381 => 105,  367 => 101,  312 => 73,  292 => 69,  249 => 58,  208 => 45,  1361 => 391,  1352 => 494,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 485,  1319 => 484,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 445,  1193 => 345,  1190 => 344,  1188 => 443,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 438,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 423,  1141 => 321,  1118 => 320,  1115 => 319,  1109 => 415,  1106 => 316,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1067 => 299,  1064 => 298,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  979 => 260,  976 => 259,  970 => 257,  967 => 256,  964 => 357,  961 => 254,  958 => 253,  955 => 252,  947 => 249,  939 => 349,  936 => 242,  934 => 241,  931 => 345,  920 => 235,  918 => 234,  915 => 233,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  833 => 199,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  785 => 178,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  749 => 162,  739 => 156,  729 => 269,  724 => 154,  721 => 153,  715 => 267,  710 => 149,  707 => 148,  697 => 141,  696 => 140,  695 => 139,  689 => 137,  683 => 135,  680 => 250,  675 => 132,  666 => 126,  658 => 124,  654 => 241,  643 => 120,  638 => 118,  635 => 117,  619 => 113,  614 => 111,  564 => 99,  557 => 198,  547 => 93,  529 => 92,  524 => 90,  512 => 84,  509 => 83,  490 => 77,  470 => 73,  433 => 60,  414 => 52,  403 => 48,  400 => 47,  377 => 37,  374 => 36,  363 => 32,  308 => 13,  299 => 8,  271 => 374,  266 => 366,  492 => 164,  473 => 156,  456 => 68,  447 => 149,  421 => 139,  412 => 134,  386 => 127,  372 => 126,  337 => 22,  310 => 114,  295 => 107,  276 => 44,  254 => 91,  184 => 102,  343 => 283,  365 => 316,  2431 => 2339,  2364 => 2275,  2246 => 2160,  2128 => 2045,  2010 => 1930,  1892 => 1815,  1774 => 1700,  1656 => 1585,  1538 => 1470,  1420 => 1355,  1302 => 1240,  1184 => 1125,  948 => 895,  830 => 303,  712 => 150,  2321 => 2207,  2254 => 2143,  2136 => 2028,  2018 => 1913,  1900 => 1798,  1782 => 1683,  1664 => 1568,  1546 => 1453,  1428 => 1338,  1310 => 481,  1192 => 444,  1074 => 304,  956 => 353,  838 => 763,  720 => 648,  602 => 533,  484 => 162,  257 => 93,  207 => 269,  277 => 76,  268 => 373,  251 => 64,  185 => 27,  282 => 84,  221 => 78,  212 => 279,  214 => 60,  211 => 46,  191 => 246,  159 => 94,  143 => 109,  23 => 10,  1317 => 662,  1314 => 661,  1308 => 664,  1306 => 661,  1301 => 478,  1297 => 657,  1294 => 656,  1288 => 648,  1284 => 646,  1277 => 642,  1273 => 641,  1267 => 638,  1263 => 637,  1259 => 636,  1255 => 634,  1253 => 633,  1232 => 615,  1224 => 460,  1214 => 603,  1202 => 594,  1153 => 427,  1150 => 549,  1148 => 548,  1112 => 318,  1105 => 510,  1103 => 315,  1094 => 499,  1090 => 498,  1085 => 496,  1081 => 495,  1078 => 494,  1075 => 493,  1068 => 651,  1066 => 1010,  1062 => 400,  1058 => 490,  1056 => 293,  1053 => 292,  1039 => 472,  1033 => 468,  1018 => 455,  1016 => 276,  999 => 388,  996 => 387,  992 => 437,  982 => 261,  980 => 430,  973 => 258,  971 => 420,  965 => 417,  962 => 416,  959 => 415,  952 => 251,  950 => 250,  946 => 414,  942 => 412,  940 => 411,  937 => 410,  930 => 405,  923 => 236,  921 => 399,  916 => 397,  911 => 395,  906 => 340,  903 => 339,  900 => 228,  897 => 227,  894 => 226,  891 => 386,  888 => 385,  886 => 384,  883 => 383,  880 => 382,  877 => 381,  875 => 318,  872 => 379,  869 => 378,  866 => 316,  864 => 376,  861 => 315,  858 => 374,  855 => 314,  853 => 372,  850 => 313,  847 => 370,  844 => 204,  841 => 203,  839 => 367,  837 => 366,  834 => 365,  827 => 357,  823 => 356,  819 => 355,  816 => 289,  813 => 353,  806 => 360,  804 => 353,  799 => 351,  795 => 349,  793 => 182,  790 => 347,  783 => 177,  777 => 279,  775 => 337,  770 => 334,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  746 => 161,  742 => 322,  738 => 320,  736 => 319,  733 => 318,  726 => 313,  716 => 305,  714 => 304,  711 => 303,  700 => 294,  698 => 293,  693 => 290,  681 => 287,  678 => 249,  673 => 285,  670 => 284,  662 => 125,  657 => 277,  649 => 122,  644 => 268,  630 => 257,  611 => 247,  598 => 107,  592 => 208,  586 => 236,  583 => 235,  578 => 234,  575 => 233,  567 => 230,  554 => 197,  536 => 217,  533 => 216,  531 => 190,  498 => 198,  461 => 70,  445 => 163,  443 => 136,  429 => 154,  423 => 57,  411 => 144,  394 => 131,  388 => 42,  357 => 113,  350 => 26,  346 => 110,  338 => 107,  332 => 20,  319 => 98,  313 => 15,  291 => 106,  250 => 341,  238 => 312,  127 => 77,  517 => 168,  503 => 81,  489 => 156,  487 => 163,  482 => 153,  477 => 151,  467 => 72,  462 => 142,  459 => 69,  450 => 64,  442 => 62,  422 => 126,  416 => 124,  401 => 125,  391 => 130,  383 => 118,  353 => 99,  349 => 106,  330 => 104,  324 => 102,  306 => 127,  304 => 70,  288 => 4,  261 => 77,  259 => 70,  256 => 69,  248 => 336,  245 => 335,  243 => 327,  232 => 53,  229 => 82,  224 => 79,  216 => 60,  186 => 239,  147 => 51,  130 => 43,  284 => 104,  280 => 127,  253 => 342,  227 => 51,  223 => 94,  153 => 92,  77 => 17,  520 => 186,  513 => 184,  510 => 402,  506 => 400,  501 => 80,  496 => 79,  474 => 161,  341 => 260,  335 => 21,  273 => 380,  67 => 430,  20 => 1,  161 => 202,  122 => 13,  119 => 75,  671 => 293,  621 => 230,  615 => 242,  610 => 239,  608 => 246,  600 => 232,  596 => 106,  590 => 229,  561 => 224,  558 => 224,  555 => 95,  551 => 222,  548 => 195,  545 => 220,  542 => 193,  523 => 215,  518 => 207,  515 => 85,  511 => 203,  508 => 164,  505 => 209,  502 => 183,  483 => 163,  478 => 74,  475 => 202,  471 => 183,  454 => 196,  449 => 146,  439 => 189,  436 => 188,  431 => 129,  426 => 58,  408 => 50,  396 => 132,  389 => 107,  368 => 34,  355 => 27,  351 => 123,  347 => 262,  344 => 24,  340 => 282,  322 => 136,  311 => 14,  301 => 90,  297 => 88,  286 => 89,  283 => 82,  260 => 363,  237 => 54,  233 => 304,  230 => 52,  226 => 64,  217 => 289,  202 => 115,  197 => 249,  192 => 68,  175 => 99,  182 => 33,  179 => 49,  152 => 118,  149 => 91,  124 => 14,  97 => 44,  84 => 39,  34 => 8,  181 => 232,  137 => 31,  125 => 37,  107 => 71,  90 => 20,  63 => 9,  53 => 32,  485 => 171,  480 => 75,  472 => 165,  468 => 380,  455 => 159,  451 => 195,  448 => 157,  438 => 160,  434 => 130,  424 => 140,  420 => 150,  418 => 138,  409 => 139,  404 => 126,  398 => 137,  392 => 130,  390 => 43,  385 => 41,  379 => 104,  376 => 161,  373 => 115,  366 => 33,  348 => 113,  333 => 257,  325 => 137,  320 => 107,  316 => 16,  309 => 93,  305 => 129,  294 => 99,  289 => 90,  279 => 103,  275 => 82,  269 => 75,  263 => 43,  252 => 59,  240 => 55,  235 => 311,  219 => 49,  193 => 55,  189 => 240,  170 => 77,  129 => 15,  102 => 46,  65 => 33,  58 => 293,  71 => 45,  270 => 100,  255 => 353,  247 => 88,  244 => 78,  241 => 86,  239 => 54,  236 => 46,  231 => 80,  228 => 42,  225 => 298,  222 => 23,  220 => 290,  218 => 22,  209 => 74,  205 => 55,  180 => 34,  172 => 60,  144 => 176,  93 => 17,  88 => 63,  78 => 1,  201 => 56,  199 => 54,  196 => 44,  187 => 28,  173 => 48,  168 => 97,  166 => 209,  156 => 93,  138 => 37,  136 => 84,  133 => 38,  121 => 131,  112 => 30,  62 => 12,  706 => 189,  699 => 142,  694 => 138,  691 => 253,  687 => 288,  679 => 173,  672 => 247,  668 => 168,  663 => 244,  659 => 278,  655 => 164,  651 => 240,  647 => 162,  640 => 119,  636 => 235,  632 => 258,  628 => 155,  624 => 154,  617 => 112,  613 => 248,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 105,  589 => 143,  581 => 137,  579 => 136,  576 => 101,  572 => 180,  569 => 231,  566 => 201,  560 => 125,  556 => 123,  550 => 94,  539 => 218,  534 => 119,  530 => 118,  527 => 91,  525 => 211,  507 => 202,  504 => 99,  500 => 162,  493 => 78,  491 => 157,  488 => 165,  481 => 189,  479 => 162,  476 => 157,  469 => 'placeholder',  466 => 379,  464 => 71,  460 => 153,  457 => 90,  453 => 151,  446 => 140,  444 => 148,  441 => 154,  437 => 131,  430 => 'placeholder',  428 => 128,  425 => 127,  419 => 125,  417 => 179,  413 => 129,  410 => 128,  407 => 127,  405 => 123,  402 => 138,  399 => 133,  395 => 131,  393 => 172,  380 => 'placeholder',  378 => 162,  375 => 103,  371 => 102,  364 => 100,  362 => 109,  359 => 114,  354 => 124,  352 => 115,  345 => 'placeholder',  342 => 23,  339 => 85,  334 => 117,  329 => 76,  327 => 84,  323 => 108,  321 => 99,  317 => 133,  314 => 55,  307 => 71,  303 => 52,  296 => 100,  293 => 6,  290 => 5,  285 => 3,  281 => 388,  278 => 60,  274 => 75,  267 => 99,  265 => 72,  262 => 96,  258 => 354,  215 => 280,  213 => 21,  206 => 58,  203 => 73,  178 => 25,  176 => 48,  171 => 98,  167 => 46,  160 => 56,  154 => 189,  151 => 21,  141 => 175,  132 => 36,  116 => 74,  114 => 111,  104 => 70,  91 => 42,  158 => 52,  146 => 181,  140 => 85,  128 => 38,  118 => 12,  110 => 72,  105 => 27,  100 => 45,  81 => 38,  61 => 323,  87 => 15,  46 => 13,  44 => 14,  76 => 52,  70 => 46,  59 => 17,  49 => 274,  28 => 2,  25 => 3,  21 => 2,  94 => 67,  89 => 2,  85 => 38,  75 => 35,  68 => 21,  56 => 29,  27 => 4,  31 => 87,  38 => 10,  26 => 2,  24 => 3,  19 => 1,  79 => 56,  72 => 34,  69 => 22,  47 => 28,  40 => 168,  37 => 148,  22 => 2,  246 => 108,  164 => 203,  162 => 95,  157 => 36,  139 => 169,  120 => 25,  115 => 34,  111 => 110,  108 => 28,  101 => 69,  98 => 5,  96 => 68,  83 => 17,  74 => 20,  66 => 21,  55 => 284,  52 => 15,  50 => 18,  43 => 12,  41 => 25,  35 => 9,  32 => 15,  29 => 2,  210 => 20,  204 => 267,  200 => 72,  194 => 248,  190 => 51,  188 => 71,  183 => 24,  177 => 49,  174 => 217,  169 => 210,  165 => 96,  163 => 57,  155 => 23,  150 => 52,  148 => 39,  145 => 19,  142 => 18,  134 => 16,  131 => 160,  126 => 34,  123 => 14,  117 => 39,  113 => 73,  109 => 105,  106 => 104,  103 => 21,  99 => 40,  95 => 4,  92 => 3,  86 => 46,  82 => 51,  80 => 20,  73 => 47,  64 => 360,  60 => 6,  57 => 9,  54 => 16,  51 => 6,  48 => 8,  45 => 27,  42 => 7,  39 => 20,  36 => 9,  33 => 2,  30 => 5,);
    }
}
